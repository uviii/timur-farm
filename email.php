



<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<?php
$to_email = "yubrajbudhathoki.ag2018@ritroorkee.com ";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: yubrajbudhathoki01@gmail.com ";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>
</body>
</html>