<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\htdocs\timur farm\adminstatus\blogadmin\PHPMailer-master\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\timur farm\adminstatus\blogadmin\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\timur farm\adminstatus\blogadmin\PHPMailer-master\PHPMailer-master\src\SMTP.php';


  $name='youbraj';
  $email='yubrajbudhathoki01@gmail.com';
  $subject='ok man you are right ao that you dont know that ouodfja';
  $body='fjksjf mah fjsdfiajf';


  $mail= new PHPmailer();
  $mail->isSMTP();//disable when is in hosting 
  $mail->HOST='SMTP.gmail.com';
  $mail->SMTPAuth= true;
  $mail->username='yubrajbudhathoki01@gmail.com';
  $mail->password='tzcuuqyxkspglbfu';
  $mail->Port=587;
  $mail->SMTPsecure='ssl';
  $mail->isHTML(true);
  $mail->setFrom('yubrajbudhathoki01@gmail.com', 'uvii');
  $mail->addAddress('yubrajbudhathoki01@gmail.com');
  $mail->addReplyTo('yubrajbudhathoki01@gmail.com');
  $mail->Subject=('<h1 aligh=center> subscrebed my chanel </h1><br><h4 aligh=center> like this vedio </h4>');

  if (!$mail->send()) {

    echo 'massege couldnot be sent';


    # code...
  }else
  {
    echo 'massege has been sent!';
  }


?> 