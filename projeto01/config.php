<?php

$autoLoad = function ($class) {
    if ($class == 'email') {
        include('classes/PHPMailer/PHPMailerAutoload.php');
    }
    include('classes/' . $class . '.php');
};

spl_autoload_register($autoLoad);
define('INCLUDE_PATH', 'http://localhost/GitHub/curso-web/projeto01/');
