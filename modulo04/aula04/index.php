<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo04', 'root', '');

$id = 10;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Joao',sobrenome='Vitor' WHERE nome='Luiz' and sobrenome='Gustavo'");

if ($sql->execute()) {
    echo "Meu cliente foi atualizado";
}
