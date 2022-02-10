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
    $mail->addAddress($_SESSION['query_mail']);  
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Your Query has been submitted Successfully';
    $mail->Body .= '<p>Your Query will be solved within 7 working days<p>';
    $mail->send();
    $_SESSION['check'] = true;
} catch (Exception $e) {
    $_SESSION['check'] = false;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo '<script>alert("Message could not be sent. Mailer Error");</script> ';
}