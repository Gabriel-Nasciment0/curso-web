<?php

// Inclui o PHPMailer
require 'caminho/para/PHPMailerAutoload.php';

class Email
{
    function __construct()
    {
        $mail = new PHPMailer;

        // Ativa o modo de depuração, caso queira ver mais detalhes (3 para modo avançado)
        // $mail->SMTPDebug = 3;

        // Configurações do servidor SMTP
        $mail->isSMTP();                                      // Define o uso do SMTP
        $mail->Host = 'smtp.gmail.com';                       // Servidor SMTP do Gmail
        $mail->SMTPAuth = true;                               // Habilita autenticação SMTP
        $mail->Username = 'seu-email@gmail.com';              // Seu endereço de e-mail
        $mail->Password = 'sua-senha';                        // Senha do seu e-mail
        $mail->SMTPSecure = 'tls';                            // Criptografia TLS
        $mail->Port = 587;                                    // Porta do servidor SMTP para o Gmail

        // Configurações do remetente e destinatário
        $mail->setFrom('seu-email@gmail.com', 'Seu Nome');    // Remetente
        $mail->addAddress('destinatario@exemplo.com', 'Destinatário'); // Destinatário principal
        $mail->addReplyTo('info@exemplo.com', 'Informação');  // Responder para

        // Conteúdo do e-mail
        $mail->isHTML(true);                                  // Define o formato como HTML
        $mail->Subject = 'Assunto do E-mail';
        $mail->Body    = 'Este é o corpo da mensagem em <b>HTML</b>';
        $mail->AltBody = 'Este é o corpo da mensagem em texto plano para clientes que não suportam HTML';

        // Envio do e-mail
        if (!$mail->send()) {
            echo 'Não foi possível enviar a mensagem.';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            echo 'Mensagem enviada com sucesso!';
        }
    }
}
