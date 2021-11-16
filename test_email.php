<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail\vendor\autoload.php';

$mail = new PHPMailer();

$mail->IsSMTP();
   $mail->setFrom('yubrajbudhathoki01@gmail.com', 'Darth Vader');
   $mail->addAddress('yubrajbudhathoki01@gmail.com', 'Emperor');                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com;smtp2.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "yubrajbudhathoki01@gmail.com";  // SMTP username
$mail->Password = "tzcuuqyxkspglbfu"; // SMTP password

$mail->From = "yubrajbudhathoki01@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("yubrajbudhathoki01@gmail.com", "Josh Adams");
$mail->AddAddress("yubrajbudhathoki01@gmail.com");                  // name is optional
$mail->AddReplyTo("yubrajbudhathoki01@gmail.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("");         // add attachments
$mail->AddAttachment("", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
