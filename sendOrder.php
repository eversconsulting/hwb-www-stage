
<?php

$json = json_decode($_POST['myData'], true);
$customer = $_POST['customer'];

$body = "A new order has come in. Here are the details:\n\nCustomer Email: ".$customer." \n";



foreach($json as $order_bat){

    $type = $order_bat['type'];
    $wood = $order_bat['wood'];
    $handle = $order_bat['handle'];
    $barrel = $order_bat['barrel'];
    $logo = $order_bat['logo'];
    $finish = $order_bat['finish'];
    $length = $order_bat['length'];
    $engStyle = $order_bat['engravingStyle'];
    $eng = $order_bat['engraving'];
    $quantity = $order_bat['quantity'];
    $model = $order_bat['model'];


    $toAdd = $type." Bat\nModel: ".$model."\nLength: ".$length."\nWood: ".$wood."\nHandle Color: ".$handle."\nBarrel Color: ".$barrel."\nLogo and Engraving Color: ".$logo."\nFinish Type: ".$finish."\nEngraving Style: ".$engStyle."\nEngraving: ".$eng."\nQuantity: ".$quantity;

    $body .= $toAdd;

}




/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
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
$mail->Host = 'localhost';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 25;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "ordersfromwebsite@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Homewood01!";
//Set who the message is to be sent from
$mail->setFrom('ordersfromwebsite@gmail.com', 'Order');
//Set who the message is to be sent to
$mail->addAddress('orders@homewoodbat.com');
//Set the subject line
$mail->Subject = 'New Online Order';

//Replace the plain text body with one created manually
$mail->Body = $body;


//$mail->send();

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo 'Message has been sent';


}

?>
