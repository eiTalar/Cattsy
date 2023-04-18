<?php
/* 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "you@example.com";
$mail->Password = "grkbndagauabpswv";
$mail->setFrom($email, $name);
$mail->addAddress("eitalarczyk@gmail.com", "Szymon");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->send();
header("Location: index.html");
*/

$name = $_POST["name"];
$email = $_POST["email"];
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
    $mail->Username = 'eitalarczyk@gmail.com';
    $mail->Password = 'grkbndagauabpswv';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($email, $name);

    $mail->addAddress('ejtalar@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = "Cattsy contacts with you!";
    $mail->Body = $message;

    if (!$mail->Send()) {
        echo "Błąd wysyłania e-maila: " . $mail->ErrorInfo;
    } else {
        header("Location: send.php");
    }
}
?>