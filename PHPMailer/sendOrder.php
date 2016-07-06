<?php
  //SMTP needs accurate times, and the PHP time zone MUST be set
  //This should be done in your php.ini, but this is how to do it if you don't have access to that
  date_default_timezone_set('Etc/UTC');

  require 'PHPMailerAutoload.php';

  //Create a new PHPMailer instance
  $mail = new PHPMailer;

  //Tell PHPMailer to use SMTP
  $mail->isSMTP();

  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 2;

  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6

  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;

  //Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = 'tls';

  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;

  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "bevers222@gmail.com";

  //Password to use for SMTP authentication
  $mail->Password = "denver1996";

  //Set who the message is to be sent from
  $mail->setFrom('bevers222@gmail.com');


  //Set who the message is to be sent to
  $mail->addAddress('bevers222@gmail.com');

  //Set the subject line
  $mail->Subject = 'PHPMailer GMail SMTP test';

  $mail->Body = 'This is a plain-text message body';



  //send the message, check for errors
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Message sent!";
  }





?>
