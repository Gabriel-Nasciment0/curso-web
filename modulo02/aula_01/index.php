<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	$arr = array('Gabriel', 'joao', 'felipe', 'mario');

	/*
	   foreach($arr as $key => $value) {
		   echo $key;
		   echo '=>';
		   echo $value;
		   echo '<hr>';
	   }
	   */

	
	   $total = count($arr);

	   for($i = 0; $i < $total; $i++){
		   echo $arr[$i];
		   echo '<br />';
	   }
	   

	?>
</body>

</html>