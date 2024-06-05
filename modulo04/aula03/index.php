<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo04', 'root', '');

$id = 10;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Luiz',sobrenome='Gustavo' WHERE id=$id");
