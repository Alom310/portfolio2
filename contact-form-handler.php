<?php
    // require 'phpmailer/Exception.php'
    // require 'phpmailer/PHPmailer.php'
    // require 'phpmailer/SMTP.php'

    require 'vendor/autoload.php';

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

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('alomrelay@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
        $error = "Something went worng. Please try again.";
    }
    else 
    {
        $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }

    $mail->smtpClose();

?>