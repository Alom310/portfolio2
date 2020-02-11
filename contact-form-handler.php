<?php
    // require 'phpmailer/Exception.php'
    // require 'phpmailer/PHPmailer.php'
    // require 'phpmailer/SMTP.php'
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception; 

    require 'vendor/autoload.php';

try {
    //Server settings
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'alomrelay@gmail.com';
    $mail->Password = 'Relay1234$';

    //Recipients
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('alomrelay@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    // Content
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
}
?>