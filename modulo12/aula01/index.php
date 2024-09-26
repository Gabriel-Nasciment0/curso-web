<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=modulo12', 'root', '707070');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'nao conectou! tenta mais tarde';
}
