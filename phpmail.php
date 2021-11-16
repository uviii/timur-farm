 


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail\vendor\autoload.php';

$mail = new PHPMailer(TRUE);


   
   $mail->setFrom('yubrajbudhathoki01@gmail.com', 'Darth Vader');
   $mail->addAddress('yubrajbudhathoki01@gmail.com', 'Emperor');
   $mail->Subject = 'Force';
   $mail->Body = 'There is a great disturbance in the Force.';
   
   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'yubrajbudhathoki01@gmail.com';
   
   /* SMTP authentication password. */
   $mail->Password = 'tzcuuqyxkspglbfu';
   
   /* Set the SMTP port. */
   $mail->Port = 587;
   
   /* Finally send the mail. */
   $mail->send();
  if (!$mail->send()) {

    echo 'massege couldnot be sent';


    # code...
  }else
  {
    echo 'massege has been sent!';
  }
