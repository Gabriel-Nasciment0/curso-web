<?php
$func = function ($nome) {
    echo $nome;
};

//$func('Gabriel');

function one()
{
    $func = function () {
        echo 'Olá Mundo';
    };
    $func();
}

one();
