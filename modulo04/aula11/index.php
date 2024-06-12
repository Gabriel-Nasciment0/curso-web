<?php
$pdo = new PDO("mysql:host=localhost;dbname=modulo04", "root", "");

$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE id IN (1,2,3");
$sql->execute();
$nome = $sql->fetchAll();
print_r($nome);
