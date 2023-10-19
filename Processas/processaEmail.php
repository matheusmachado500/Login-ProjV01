<?php
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendEmail()
{
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = true;
        $mail->Username = 'gestiprodemail@gmail.com';
        $mail->Password = 'imqh mfgg unjo bmbx';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 587;

        $mail->setFrom('gestiprodemail@gmail.com', 'Mailer');
        $mail->addAddress('josemanuelguedes@gmail.com', 'José Guedes');
        # $mail->addAddress('ellen@example.com'); 
        # $mail->addReplyTo('info@example.com', 'Information');
        # $mail->addCC('cc@example.com');
        # $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>