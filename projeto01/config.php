<?php
// envio de email 
$autoLoad = function ($class) {
    if ($class == 'Email') {
        include('classes/vendor/autoload.php');
    }
    include('classes/phpmailer/' . $class . '.php');
};
spl_autoload_register($autoLoad);
// vincular aruivo ao diretorio principal
define('INCLUDE_PATH', 'http://localhost/GitHub/curso-web/projeto01/');
