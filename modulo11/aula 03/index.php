<?php
//header("location: https://www.google.com/");
//die();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>opa</h1>
</body>

</html>
<?php
$print = ob_get_contents();
ob_end_clean();
echo $print
//ob_end_flush()
?>