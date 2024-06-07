<?php


$pdo = new PDO("mysql:host=localhost;dbname=modulo04", "root", "");
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes as $KEY => $value) {
    echo $value['nome'];
    echo '<hr>';
}
