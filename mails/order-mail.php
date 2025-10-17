<?php
session_start();
require_once __DIR__ . '/validator.php';

// Конфигурация для формы заказа (имя + телефон)
$config = [
    'recipient_email' => 'info@himmelrf.ru, vasilyev-r@mail.ru',
    'email_subject' => 'Заявка на расчет сметы или вызов инженера',
    'log_file' => __DIR__ . '/spam_log.txt',

    // Telegram настройки
    'telegram_token' => '7637946124:AAGtIRdbQVoNi82RVGvb6syTJ6ZQk3l5jOU',
    'telegram_chat_id' => '-4796917309',

    'validation' => [
        'require_all_fields' => true,
        'name_only_cyrillic' => true,
        'email_only_latin' => false,           // email нет в форме
        'phone_same_digits' => true,
        'phone_sequential_digits' => true,
        'city_only_cyrillic' => false,         // города нет в форме
        'phone_russian_operators' => true,
        'honeypot_name' => true,
        'phone_full_length' => true,
        'form_timestamp' => true
    ]
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

$logger = new SpamLogger($config['log_file']);

$formData = [
    'user_name' => $_POST['user_name'] ?? '',
    'tel' => $_POST['tel'] ?? '',
    'email' => '',  // пустое значение, т.к. email нет
    'city' => '',   // пустое значение, т.к. города нет
    'name' => $_POST['name'] ?? '',
    'form_timestamp' => $_POST['form_timestamp'] ?? ''
];

// Используем функцию из validator.php
$validation = validateFormData($formData, $config, $russian_operator_codes);

if (!$validation['valid']) {
    $logger->logAttempt($formData, true, $validation['errors']);

    $_SESSION['win'] = 'block';
    $_SESSION['recaptcha'] = '<p class="text-danger"><strong>Ошибка валидации формы:</strong><br>' . implode('<br>', $validation['errors']) . '</p>';

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

// Формируем сообщение для Telegram
$telegramMessage = "🔧 Заявка на расчет сметы или вызов инженера с сайта geometriyasten62.ru\n\n";
$telegramMessage .= "Имя: " . htmlspecialchars($formData['user_name']) . "\n";
$telegramMessage .= "Телефон: " . htmlspecialchars($formData['tel']) . "\n";
$telegramMessage .= "\n---\n";
$telegramMessage .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$telegramMessage .= "Дата: " . date('d.m.Y H:i:s');
$telegramMessage .= "\nСтраница: " . ($_SERVER['HTTP_REFERER'] ?? 'неизвестно');

// Отправка в Telegram
$telegramUrl = "https://api.telegram.org/bot{$config['telegram_token']}/sendMessage?chat_id={$config['telegram_chat_id']}&text=" . urlencode($telegramMessage);
$telegramSent = @file_get_contents($telegramUrl);

// Отправка письма
$emailMessage = "Заявка на расчет сметы или вызов инженера\n\n";
$emailMessage .= "Имя: " . htmlspecialchars($formData['user_name']) . "\n";
$emailMessage .= "Телефон: " . htmlspecialchars($formData['tel']) . "\n";
$emailMessage .= "\n---\n";
$emailMessage .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$emailMessage .= "Дата: " . date('d.m.Y H:i:s') . "\n";
$emailMessage .= "Страница: " . ($_SERVER['HTTP_REFERER'] ?? 'неизвестно') . "\n";

$headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$emailSent = mail($config['recipient_email'], $config['email_subject'], $emailMessage, $headers);

if ($emailSent || $telegramSent) {
    $logger->logAttempt($formData, false, []);

    $_SESSION['win'] = 'block';
    $_SESSION['recaptcha'] = '<p>Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.</p>';

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    $_SESSION['win'] = 'block';
    $_SESSION['recaptcha'] = '<p>Ошибка отправки письма. Пожалуйста, попробуйте позже или свяжитесь с нами по телефону.</p>';

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
