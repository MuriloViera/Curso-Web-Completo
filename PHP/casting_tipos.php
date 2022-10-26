<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting de Tipos em PHP</title>
</head>
<body>

	<?php 

		//gettype() => retorna o tipo da vriável
		$valor = 10;
		$valor2 = (float) $valor; //Converter int para float
		$valor3 = (string) $valor; //Converter int para string
		//Da pra fazer o mesmo so que de float pra int e string

		echo $valor . ' ' . gettype($valor);
		echo '<br/>';
		echo $valor2 . ' ' . gettype($valor2);
		echo '<br/>';
		echo $valor3 . ' ' . gettype($valor3);



	 	echo '<br/><hr/>';



	 	$valornovo = '12.2';
	 	$valornovo2 = (integer) $valornovo;
	 	$valornovo3 = (float) $valornovo;

	 	echo $valornovo2 . ' ' . gettype($valornovo2);
	 	echo '<br/>';
	 	echo $valornovo3 . ' ' . gettype($valornovo3);

		
	?>

</body>
</html>