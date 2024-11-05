<?php

class Email
{
    function __construct()
    {
        //NAO FUNCIONA

        $mail = new PHPMailer;


        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'gabrielhenrique4004.gmail.com';                 // SMTP username
        $mail->Password = '&aBd9fwD3TWQ$PH$9o4d8i4^gcfq*^#k%!g!KuDv4HQnfDy&q9sjCGtaMS@CMb4Y27Z^AWweS&cU&oABM%J@ezyeZz2AJsUu7R6o';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('gabrielhenrique4004.gmail.com', 'gabriel');
        $mail->addAddress('gabrielhenrique40042.gmail.com', 'gabriel');     // Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'assunto email';
        $mail->Body    = 'corpo <b>email</b>';
        $mail->AltBody = 'corpo email';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
