<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays Multidimensionais</title>
</head>
<body>

	<?php 


		$lista_coisas = [];

		$lista_coisas['frutas'] = ['Banana', 'Maça', 'Morango', 'Banana']; //No indice frutas, to criando outro array
		$lista_coisas['pessoas'] = ['Maria','Bruno'];//No indice pessoas, to criando outro array

		echo '<pre>';
		print_r($lista_coisas);
		echo '<pre/>';

		echo '<hr/>';
		echo $lista_coisas['frutas'][0];
		echo '<br/>';
		echo $lista_coisas['pessoas'][1];

	?>

</body>
</html>