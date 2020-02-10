<?php
    require 'includes/Exception.php'
    require 'includes/PHPmailer.php'
    require 'includes/SMTP.php'

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception; 

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host = 'smtp.gmail.com';
    $mail-> SMTPSecure = 'tls';
    $mail-> Post = '587';
    $mail-> usename = 'alomrelay@gmail.com';
    $mail-> password = 'Relay1234$';
    $mail-> setForm('alomrelay@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail-> Body = '<h1>this is plain text email body</h1>';
    $mail-> addAddress('alomrelay@gmail.com');
    
    if( $mail->Send() ) {
        echo "Email Sent!";
    }else{
        echo "Error!";
    }

    $mail->smtpClose();

    $name = $_POST['name']
    $visitor_emai; = $_POST['email']


?>