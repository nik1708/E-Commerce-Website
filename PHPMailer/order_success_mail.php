<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'favouritetailor00@gmail.com';                
    $mail->Password   = 'favouritetailor';                              
    $mail->SMTPSecure = 'tls';           
    $mail->Port       = 587;                                   

    $mail->setFrom('favouritetailor00@gmail.com', 'FAVOURITE TAILOR');
    $mail->addAddress($_SESSION['email']);    

    $mail->isHTML(true);                              
    $mail->Subject = 'Your Order has been booked Successfully';
    $mail->AddEmbeddedImage('images/'.$_SESSION['image'], 'logo');
    $mail->Body = '
        <h3 style="">HEY '.$_SESSION['fname'].',</h3>
        <p style="">Your order is confirmed. Your product will be delivered in 7 working days<p><br><br>
        <h4>PRODUCT DETAILS: <h4><br>
        <img src="cid:logo"
        style="
            margin-left: 10%;
            width: 20%;        
        "><br><br>
        <p 
        style="
            margin-left: 10%;
        ">
        Color: '.$_SESSION['a'].'<br>'.
        $_SESSION['detail1'].': '.$_SESSION['b'].'<br>'.
        $_SESSION['detail2'].': '.$_SESSION['c'].'<br>'.
        $_SESSION['detail3'].': '.$_SESSION['d'].'<br><br>
        Price: '.$_SESSION['price'].'
        <br><br><b>Payment Mode [COD] Cash On Delivery</b>
        </p>
        
    ';
    $mail->send();
    $_SESSION['check'] = true;
} catch (Exception $e) {
    $_SESSION['check'] = false;
    exit;
}