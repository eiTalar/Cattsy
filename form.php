<?php
/* 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST['submit'])) {
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'example@gmail.com';
$mail->Password = 'password';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = '587';
$mail->setFrom($email, $name);
$mail->addAddress('example@gmail.com');
$mail->isHTML(true);
$mail->Subject = "Cattsy contacts with you!";
$mail->Body = $message;
if (!$mail->Send()) {
echo "Błąd wysyłania e-maila: " . $mail->ErrorInfo;
} else {
header("Location: send.html");
}
}
?>