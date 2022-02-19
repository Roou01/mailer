<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//* общие настройки
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";
$mail->setLanguage('ru', 'PHPMailer-6.5.4/language/');
$mail->IsHTML(true);

//! Кому отправляем
$mail->addAdress("phobos01@inbox.ru");

//? Тема письма
$mail->Subject = "Данные из формы Заказать консультацию";

//* Тело письма
$body = "<h1> Пользователь ввёл следующие данные: </h1>"
$body.="<p><strong>Имя:</strong> ".$_POST["consalt-desktop-name"]."</p>";


// $response =["message", ]

header("Content-type: aplication/json");
echo json_encode($response);