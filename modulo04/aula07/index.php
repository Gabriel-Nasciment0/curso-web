<?php
$pdo = new PDO("mysql:host=localhost;dbname=modulo04", "root", "");
$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN  cargos ON `clientes`. `cargo` = `cargos` . `id`");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes as $KEY => $value) {
    echo $value['nome'];
    echo '  ';
    echo $value['nome_cargos'];
    echo '<hr>';
}