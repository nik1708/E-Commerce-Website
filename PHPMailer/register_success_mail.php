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
    $mail->addAddress($email);  
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Welcome to the Favourite Tailor! Thanks for joining us';
    $mail->AddEmbeddedImage('images/logos/company1.jpg', 'logo');
    $mail->Body = '
        <img src="cid:logo" style="width:50px; height:50px;"><br><br>
        <h3>Your account has been successfully registered<h3>
    
    ';
    $mail->send();
    $_SESSION['check'] = true;
} catch (Exception $e) {
    $_SESSION['check'] = false;
    exit;
}