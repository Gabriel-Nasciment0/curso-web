<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo04', 'root', '');

$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");

$sql->execute(array($_GET['categoria_id']));
$info = $sql->fetchAll();
// echo '<pre>';
// print_r($info);
// echo '</pre>';
foreach ($info as $key => $value) {
    echo 'Titulo:', $value['titulo'];
    echo '<br/>';
    echo 'noticias:', $value['conteudo'];
    echo '<hr>';
}
?>

<body>

</body>

</html>