<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>
</head>
<body>

	<?php

	$texto = 'Curso Completo de PHP';

	//String to lower
	echo $texto;
	echo '<br/>';
	echo '<hr/>';
	echo strtolower($texto);

	//String to upper
	echo '<br/>';
	echo '<hr/>';
	echo strtoupper($texto);

	//Upper case first
	echo '<br/>';
	echo '<hr/>';
	echo ucfirst($texto);

	//String lenght
	echo '<br/>';
	echo '<hr/>';
	echo strlen($texto);

	//String replace
	echo '<br/>';
	echo '<hr/>';
	echo str_replace('PHP','CSS',$texto);

	//String substract
	echo '<br/>';
	echo '<hr/>';
	echo substr($texto, 1, 4);

	?>

</body>
</html>