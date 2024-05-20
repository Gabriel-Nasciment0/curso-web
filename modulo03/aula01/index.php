<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	class pessoa
	{

		private $nome = 'Gabriel';
		private $idade = '23';
		private $peso = '67Kg';

		public function crescer()
		{
			echo 'estou crescendo';
			$this->comer();
		}
		public function comer()
		{
			echo ' estou comendo';
		}

	}//pessoa
	$pessoa = new pessoa;
	$pessoa2 = new pessoa;

	$pessoa->crescer();

	?><!--php-->
</body>

</html>