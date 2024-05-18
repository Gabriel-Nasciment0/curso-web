<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	function mostrarNome($nome, $idade)
	{
		echo '<h2>Nome e: </h2>' . $nome;
		echo '<hr>';
		echo "Idade: $idade";
	}

	function calculadora($numero1 = 16, $numero2 = 18)
	{
		echo ($numero1 + $numero2);
	}

	function verdade()
	{
		return true;
	}

	function retornarString()
	{
		return 'Gabriel';
	}

	echo calculadora();

	$variavel = verdade();

	//calculadora(20,30);
	?>
</body>

</html>