<?php
$sendto = "dmitry@emisart.ru"; //Edit here

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject2 = $_POST['caption'];
$mailtext = $_POST['mailtext'];



$headers  = 'From: Mail Form | Форма отправки <info@mir.beget.ru>' . "\r\n";
$subject  = "Вам письмо!";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8 \r\n";
// Formating a mail body
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<p><strong>Имя:</strong> ".$firstname."</p>\r\n";
$msg .= "<p><strong>Фамилия:</strong> ".$lastname."</p>\r\n";
$msg .= "<p><strong>Тема:</strong> ".$subject2."</p>\r\n";
$msg .= "<p><strong>Текст:</strong> ".$mailtext."</p>\r\n";
$msg .= "</body></html>";

// Sending a mail
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
