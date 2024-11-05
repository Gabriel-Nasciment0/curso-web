<?php
// envio de email 
$autoLoad = function ($class) {
    if ($class == 'Email') {
        include('classes/PHPMailer/PHPMailerAutoload.php');
    }
    include('classes/' . $class . '.php');
};
spl_autoload_register($autoLoad);
// vincular aruivo ao diretorio principal
define('INCLUDE_PATH', 'http://localhost/GitHub/curso-web/projeto01/');
