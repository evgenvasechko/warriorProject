<?php

$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

$name = trim(strip_tags($_POST['name'])); //забираем данные из POST
$email = trim(strip_tags($_POST['email'])); // + фильтр пхп и хтмл символов
$phone = trim(strip_tags($_POST['phone']));

$to = 'max.kublitski@gmail.com'; //здесь менять адрес
$subject = '=?utf-8?B?'.base64_encode('Свяжитесь с ' . $name).'?='; //код для правильного отображения заголовка в почтовом ящике
$message = "Вам написал: " . $name . "\r\n" . "Его номер: " . $phone . "\r\n" . "Его почта: " . $email;

if(!empty($_POST['name']) & !empty($_POST['email']) & !empty($_POST['phone'])) //"валидация" формы
{
    mail($to, $subject, $message);
    echo 'Ваше сообщение успешно отправлено! В ближайшее время мы свяжемся с Вами.';
}
else
{
    echo 'Для отправки сообщения заполните все поля!<br>' . $back;
}


?>