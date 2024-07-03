<?php

$autoload = function ($class) {

    include('/modulo05Projeto01/classes/' . $class . '.php');
};
spl_autoload_register($autoload);
define('INCLUDE_PATH', 'http://localhost/GitHub/curso-web/modulo05Projeto01/');
