<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__.'/vendor/autoload.php';

function sendMail($email) {
    $mail = new PHPMailer(true);
    try
    {
        $mail->isSMTP();        //Devine o uso de SMTP no envio
        $mail->SMTPAuth = true; //Habilita a autenticação SMTP
        $mail->Username   = '49b141e36b91cd';
        $mail->Password   = 'd386a96f992a73';
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->Port = 2525;

        $mail->setFrom('caiquedm11@gmail.com', 'Dias');
        $mail->addAddress($email, 'Destinatário');

        $mail->isHTML(true);
        $mail->Subject = 'Newsletter';
        $mail->Body    = 'Você agora receberá novas atualizações!</b>';
        
        // Enviar
        $mail->send();
        echo 'A mensagem foi enviada!';
    }
    catch (Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}