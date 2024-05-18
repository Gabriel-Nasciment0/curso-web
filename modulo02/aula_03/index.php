<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	//Durma o codigo por x segundos.
/*
	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';
*/

	$nome = 'guilherme';

	if ($nome == 'joao') {
		//continuamos o codigo
		echo 'tudo certo';
	} else {
		die("O script parou de ser executado");
	}


	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';


	?>
</body>

</html>