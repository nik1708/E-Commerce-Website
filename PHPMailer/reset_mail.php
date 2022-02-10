<?php
session_start();
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
    $mail->addAddress($receiver_mail);  
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Link to reset your password';
    $mail->Body    = 'Click On This Link to Reset Password<br>Note: Link can be opened once only...!!!'.$link.'';
    $_SESSION['check'] = true;
    $mail->send();
} catch (Exception $e) {
    $_SESSION['check'] = false;
    echo $email;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo '<script>alert("Message could not be sent. Mailer Error");</script> ';
}