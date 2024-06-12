<?php
$pdo = new PDO("mysql:host=localhost;dbname=modulo04", "root", "");

$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE nome LIKE '%g%'");
$sql->execute();
$nome = $sql->fetchAll();
print_r($nome);