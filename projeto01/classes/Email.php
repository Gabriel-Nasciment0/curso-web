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

        $this->mailer->setFrom($username, $name);

        $this->mailer->isHTML(true);                                  // Set email format to HTML
        $this->mailer->CharSet = 'UTF-8';
    }
    public function addAdress($email, $nome)
    {
        $this->mailer->addAddress($email, $nome);     // Add a recipient

    }
    public function formatarEmail($info)
    {
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body    = $info['corpo'];
        $this->mailer->AltBody = strip_tags($info['assunto']);
    }
    public function enviarEmail()
    {
        if ($this->mailer->send()) {
            return true;
        } else {
            return false;
        }
    }
}
