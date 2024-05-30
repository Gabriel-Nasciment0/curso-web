<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include ('./class01.php');
    $teste = new class01('gabriel', 22);

    echo $teste->getNome();
    ?>
    <br>
    <?php
    echo $teste->getIdade();
    ?>
</body>

</html>