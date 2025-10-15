<?php
session_start();
$win = "true";

// Если существует переменная POST, то
if ($_POST) {

    // Токен и ID чата для Telegram бота
    $token = "8421673223:AAE61ZHLO7gPCkIYbAF-PI-HrMVj2ZKsUeE";
    $chat_id = "-4913757404";

    // Получаем данные из формы
    $name = $_POST['name'] ? $_POST['name'] : 'Не указано';
    $tel = $_POST['tel'];

    // Формируем сообщение для Telegram
    $message = "Заявка на вызов специалиста с сайта geometriyasten62.ru\n";
    $message .= "Имя: " . $name . "\n";
    $message .= "Телефон: " . $tel . "\n";

    // Формируем сообщение для email
    $email_message = "Заявка на вызов специалиста с сайта geometriyasten62.ru\n\n";
    $email_message .= "Имя: " . $name . "\n";
    $email_message .= "Телефон: " . $tel . "\n";

    // Отправляем на email
    $email_sent = mail("vasilyev-r@mail.ru", "Заявка на вызов специалиста с сайта geometriyasten62.ru", $email_message);

    // Отправляем в Telegram
    $telegram_url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text=" . urlencode($message);
    $telegram_sent = file_get_contents($telegram_url);

    // Проверяем успешность отправки
    if ($email_sent || $telegram_sent) {
        $_SESSION['win'] = 1;
        $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за проявленный интерес ко мне. Я&#160;свяжусь с Вами в ближайшее время.</p>';
    } else {
        $_SESSION['win'] = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Ошибка!</strong><br>Не удалось отправить заявку. Попробуйте еще раз.</p>';
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;

    /*
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		print_r( $Return );
		
		/* Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > 1 ){ */

    /*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
            } */
}
