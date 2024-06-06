<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo04', 'root', '');

$sql = $pdo->prepare("SELECT = FROM posts");

$sql->execute();
$info = $sql->fetchAll();
echo '<pre>';
print_r();

echo '</pre>';
?>

<body>

</body>

</html>