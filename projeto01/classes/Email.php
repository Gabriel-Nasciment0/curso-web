<?php

class Email
{
    private $mailer;
    public function __construct($host, $username, $senha, $name)
    {
        //NAO FUNCIONA

        $this->mailer = new PHPMailer;


        $this->mailer->isSMTP();                                      // Set mailer to use SMTP
        $this->mailer->Host = $host;  // Specify main and backup SMTP servers
        $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mailer->Username = $username;                 // SMTP username
        $this->mailer->Password = $senha;                           // SMTP password
        $this->mailer->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 465;                                    // TCP port to connect to

        $mail->setFrom($username, $name);

        $mail->isHTML(true);                                  // Set email format to HTML


    }
    public function addAdress($email, $nome)
    {
        $this->mailer->addAddress($email, $nome);     // Add a recipient

    }
    public function formatarEmail($info)
    {
        $mail->Subject = $info['assunto'];
        $mail->Body    = $info['corpo'];
        $mail->AltBody = strip_tags($info['assunto']);
    }
    public function enviarEmail()
    {
        if ($this->mailer->sendMail()) {
            return true;
        } else {
            return false;
        }
    }
}
