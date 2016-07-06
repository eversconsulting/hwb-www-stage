<?php
require 'PHPMailerAutoload.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->SMTP_AUTH = false;
$mail->Port = 25;
$mail->Host = "localhost";
$mail->FromName = "orders@homewoodbat.com";

$mail->setFrom('orders@homewoodbat.com');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('orderfromwebsite@gmail.com');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';

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

$mail->Body = $body;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}




?>
