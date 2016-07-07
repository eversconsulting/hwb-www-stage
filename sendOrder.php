<?php
require 'PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->SMTP_AUTH = false;
$mail->Port = 25;
$mail->Host = "localhost";
$mail->FromName = "bevers222@gmail.com";
$mail->setFrom('bevers222@gmail.com');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('ordersfromwebsite@gmail.com');
//Set the subject line
$mail->Subject = 'New Online Order';



// Open a directory, and read its contents
$dir    = 'orders/';
$files = scandir($dir);

$str = implode(',', $files);

// foreach ($files as $f) {
//   $body = $body . $f;
// }

//$mail->AddAttachment($files[0]);







$mail->Body = $str.;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}




?>
