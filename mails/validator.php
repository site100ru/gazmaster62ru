<?php
/**
 * Единый файл валидации для всех форм
 */

// Справочник российских кодов операторов
$russian_operator_codes = [
    '910', '911', '912', '913', '914', '915', '916', '917', '918', '919',
    '980', '981', '982', '983', '984', '985', '986', '987', '988', '989',
    '920', '921', '922', '923', '924', '925', '926', '927', '928', '929',
    '930', '931', '932', '933', '934', '936', '937', '938', '939',
    '900', '901', '902', '903', '904', '905', '906', '908', '909',
    '950', '951', '952', '953', '954', '955', '956', '957', '958', '959',
    '999',
    '940', '941', '942', '943', '944', '945', '946', '947', '948', '949',
    '960', '961', '962', '963', '964', '965', '966', '967', '968', '969',
    '970', '971', '977', '978', '991', '992', '993', '994', '995', '996', '997'
];

/**
 * Класс для логирования спама
 */
class SpamLogger
{
    private $logFile;

    public function __construct($logFile)
    {
        $this->logFile = $logFile;
    }

    public function logAttempt($data, $isSpam = false, $errors = [])
    {
        $logEntry = [
            'timestamp' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
            'is_spam' => $isSpam,
            'errors' => $errors,
            'data' => $data
        ];

        $logLine = json_encode($logEntry, JSON_UNESCAPED_UNICODE) . PHP_EOL;
        file_put_contents($this->logFile, $logLine, FILE_APPEND | LOCK_EX);
    }
}

/**
 * Проверяет обязательные поля
 * Автоматически определяет какие поля обязательны на основе конфига
 */
function validateRequiredFields($data, $config)
{
    if (!$config['validation']['require_all_fields']) {
        return ['valid' => true];
    }

    $errors = [];
    $requiredFields = [];
    
    // Всегда проверяем имя
    $requiredFields[] = 'user_name';
    
    // Если включена проверка email - значит email обязателен
    if ($config['validation']['email_only_latin']) {
        $requiredFields[] = 'email';
    }
    
    // Если включена проверка телефона - значит телефон обязателен
    if ($config['validation']['phone_full_length'] || 
        $config['validation']['phone_same_digits'] || 
        $config['validation']['phone_sequential_digits'] ||
        $config['validation']['phone_russian_operators']) {
        $requiredFields[] = 'tel';
    }
    
    // Если включена проверка города - значит город обязателен
    if ($config['validation']['city_only_cyrillic']) {
        $requiredFields[] = 'city';
    }

    foreach ($requiredFields as $field) {
        if (!isset($data[$field]) || trim($data[$field]) === '') {
            $errors[] = "Поле '$field' обязательно для заполнения";
        }
    }

    return [
        'valid' => count($errors) === 0,
        'errors' => $errors
    ];
}

/**
 * Проверяет имя на кириллицу
 */
function validateNameCyrillic($name, $config)
{
    if (!$config['validation']['name_only_cyrillic'] || empty(trim($name))) {
        return ['valid' => true];
    }

    if (!preg_match('/^[А-Яа-яЁё\s\-]+$/u', $name)) {
        return [
            'valid' => false,
            'errors' => ['Имя должно быть написано только кириллицей']
        ];
    }

    preg_match_all('/[А-Яа-яЁё]/u', $name, $matches);
    if (count($matches[0]) < 2) {
        return [
            'valid' => false,
            'errors' => ['Имя должно содержать минимум 2 буквы']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет email на латиницу и корректность
 */
function validateEmailLatin($email, $config)
{
    if (!$config['validation']['email_only_latin'] || empty(trim($email))) {
        return ['valid' => true];
    }

    if (!preg_match('/^[a-zA-Z0-9@._\-]+$/', $email)) {
        return [
            'valid' => false,
            'errors' => ['Email должен содержать только латинские буквы']
        ];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [
            'valid' => false,
            'errors' => ['Некорректный формат email']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет телефон на 6 одинаковых цифр подряд
 */
function validatePhoneSameDigits($phone, $config)
{
    if (!$config['validation']['phone_same_digits'] || empty(trim($phone))) {
        return ['valid' => true];
    }

    $digitsOnly = preg_replace('/\D/', '', $phone);

    if (preg_match('/(\d)\1{5}/', $digitsOnly)) {
        return [
            'valid' => false,
            'errors' => ['Телефон не может содержать 6 одинаковых цифр подряд']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет телефон на 6 последовательных цифр
 */
function validatePhoneSequentialDigits($phone, $config)
{
    if (!$config['validation']['phone_sequential_digits'] || empty(trim($phone))) {
        return ['valid' => true];
    }

    $digitsOnly = preg_replace('/\D/', '', $phone);
    $len = strlen($digitsOnly);

    for ($i = 0; $i <= $len - 6; $i++) {
        $sequence = substr($digitsOnly, $i, 6);

        $isAscending = true;
        for ($j = 0; $j < 5; $j++) {
            if (intval($sequence[$j + 1]) !== intval($sequence[$j]) + 1) {
                $isAscending = false;
                break;
            }
        }

        $isDescending = true;
        for ($j = 0; $j < 5; $j++) {
            if (intval($sequence[$j + 1]) !== intval($sequence[$j]) - 1) {
                $isDescending = false;
                break;
            }
        }

        if ($isAscending || $isDescending) {
            return [
                'valid' => false,
                'errors' => ['Телефон не может содержать 6 цифр подряд по порядку']
            ];
        }
    }

    return ['valid' => true];
}

/**
 * Проверяет город на кириллицу
 */
function validateCityCyrillic($city, $config)
{
    if (!$config['validation']['city_only_cyrillic'] || empty(trim($city))) {
        return ['valid' => true];
    }

    if (!preg_match('/^[А-Яа-яЁё\s\-]+$/u', $city)) {
        return [
            'valid' => false,
            'errors' => ['Город должен быть написан только кириллицей']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет российский код оператора
 */
function validateRussianOperator($phone, $config, $operatorCodes)
{
    if (!$config['validation']['phone_russian_operators'] || empty(trim($phone))) {
        return ['valid' => true];
    }

    $digitsOnly = preg_replace('/\D/', '', $phone);

    if (strlen($digitsOnly) !== 11) {
        return ['valid' => true];
    }

    $operatorCode = substr($digitsOnly, 1, 3);

    if (!in_array($operatorCode, $operatorCodes)) {
        return [
            'valid' => false,
            'errors' => ['Указан некорректный код российского оператора']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет honeypot поле (ловушка для ботов)
 */
function validateHoneypotName($data, $config)
{
    if (!$config['validation']['honeypot_name']) {
        return ['valid' => true];
    }

    if (isset($data['name']) && trim($data['name']) !== '') {
        return [
            'valid' => false,
            'errors' => ['Обнаружена подозрительная активность (honeypot name)']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет полную длину телефона
 */
function validatePhoneFullLength($phone, $config)
{
    if (!$config['validation']['phone_full_length'] || empty(trim($phone))) {
        return ['valid' => true];
    }

    $digitsOnly = preg_replace('/\D/', '', $phone);

    if (strlen($digitsOnly) !== 11) {
        return [
            'valid' => false,
            'errors' => ['Введите полный номер телефона (11 цифр)']
        ];
    }

    if ($digitsOnly[0] !== '7' && $digitsOnly[0] !== '8') {
        return [
            'valid' => false,
            'errors' => ['Номер должен начинаться с +7 или 8']
        ];
    }

    return ['valid' => true];
}

/**
 * Проверяет timestamp (время заполнения формы)
 */
function validateFormTimestamp($timestamp, $config)
{
    if (!$config['validation']['form_timestamp']) {
        return ['valid' => true];
    }

    if (empty($timestamp)) {
        return [
            'valid' => false,
            'errors' => ['Ошибка валидации формы (timestamp)']
        ];
    }

    $submitTime = time();
    $formOpenTime = intval($timestamp) / 1000;
    $timeSpent = $submitTime - $formOpenTime;

    if ($timeSpent < 2) {
        return [
            'valid' => false,
            'errors' => ['Форма заполнена слишком быстро']
        ];
    }

    if ($timeSpent > 3600) {
        return [
            'valid' => false,
            'errors' => ['Форма устарела']
        ];
    }

    return ['valid' => true];
}

/**
 * ГЛАВНАЯ ФУНКЦИЯ - Валидирует все данные формы
 */
function validateFormData($data, $config, $operatorCodes)
{
    $allErrors = [];

    $userName = $data['user_name'] ?? '';
    $email = $data['email'] ?? '';
    $tel = $data['tel'] ?? '';
    $city = $data['city'] ?? '';
    $timestamp = $data['form_timestamp'] ?? '';

    $validations = [
        validateRequiredFields($data, $config),
        validateNameCyrillic($userName, $config),
        validateEmailLatin($email, $config),
        validatePhoneSameDigits($tel, $config),
        validatePhoneSequentialDigits($tel, $config),
        validateCityCyrillic($city, $config),
        validateRussianOperator($tel, $config, $operatorCodes),
        validateHoneypotName($data, $config),
        validatePhoneFullLength($tel, $config),
        validateFormTimestamp($timestamp, $config)
    ];

    foreach ($validations as $result) {
        if (!$result['valid'] && isset($result['errors'])) {
            $allErrors = array_merge($allErrors, $result['errors']);
        }
    }

    return [
        'valid' => count($allErrors) === 0,
        'errors' => $allErrors
    ];
}
?>