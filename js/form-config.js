/**
 * КОНФИГУРАЦИЯ ВАЛИДАЦИИ ДЛЯ КАЖДОЙ ФОРМЫ
 * Здесь можно настроить индивидуальные правила для каждой формы на сайте
 * 
 * КАК ИСПОЛЬЗОВАТЬ:
 * 1. Добавь в HTML форме ID: <form id="contact-form" class="protected-form">
 * 2. Создай конфигурацию в этом файле с таким же ID
 * 3. Включи/выключи нужные проверки (true/false)
 */

const FORM_VALIDATION_RULES = {
    // Форма 1: Контактная форма (имя + email)
    'contact-form': {
        requireAllFields: true,
        nameOnlyCyrillic: true,
        emailOnlyLatin: true,
        phoneSameDigits: false,          // телефона нет в форме
        phoneSequentialDigits: false,    // телефона нет в форме
        cityOnlyCyrillic: false,
        phoneRussianOperators: false,    // телефона нет в форме
        honeypotName: true,
        phoneFullLength: false,          // телефона нет в форме
        formTimestamp: true
    },

    // Форма 2: Модальное окно заказа (имя + телефон)
    'order-form': {
        requireAllFields: true,
        nameOnlyCyrillic: true,
        emailOnlyLatin: false,           // email нет в форме
        phoneSameDigits: true,
        phoneSequentialDigits: true,
        cityOnlyCyrillic: false,
        phoneRussianOperators: true,
        honeypotName: true,
        phoneFullLength: true,
        formTimestamp: true
    },

    // Форма 3: Обратный звонок в модалке (имя + телефон)
    'callback-modal-form': {
        requireAllFields: true,
        nameOnlyCyrillic: true,
        emailOnlyLatin: false,           // email нет в форме
        phoneSameDigits: true,
        phoneSequentialDigits: true,
        cityOnlyCyrillic: false,
        phoneRussianOperators: true,
        honeypotName: true,
        phoneFullLength: true,
        formTimestamp: true
    },

    // Форма 4: Обратный звонок на странице (имя + телефон)
    'callback-page-form': {
        requireAllFields: true,
        nameOnlyCyrillic: true,
        emailOnlyLatin: false,           // email нет в форме
        phoneSameDigits: true,
        phoneSequentialDigits: true,
        cityOnlyCyrillic: false,
        phoneRussianOperators: true,
        honeypotName: true,
        phoneFullLength: true,
        formTimestamp: true
    }
};

// Настройки по умолчанию (если форма не найдена в конфигурации)
const DEFAULT_VALIDATION_RULES = {
    requireAllFields: true,
    nameOnlyCyrillic: true,
    emailOnlyLatin: true,
    phoneSameDigits: true,
    phoneSequentialDigits: true,
    cityOnlyCyrillic: true,
    phoneRussianOperators: true,
    honeypotName: true,
    phoneFullLength: true,
    formTimestamp: true
};

/**
 * Получает правила валидации для конкретной формы
 */
function getFormValidationRules(formId) {
    // Если нашли правила для этой формы - возвращаем их
    if (FORM_VALIDATION_RULES[formId]) {
        return FORM_VALIDATION_RULES[formId];
    }
    
    // Если не нашли - возвращаем дефолтные
    return DEFAULT_VALIDATION_RULES;
}