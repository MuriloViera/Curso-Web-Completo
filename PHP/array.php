<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays PHP</title>
</head>
<body>

	<?php 

		//Arrays sequenciais
		$lista_frutas = array('Banana','Maça','Morango', 'Uva');

		//OU
		$lista_frutas2= ['Banana','Maça','Morango', 'Uva'];

		//Print para debug
		echo '<pre>';
			print_r($lista_frutas);
		echo '<pre/>';
		echo '<br/>';
		echo '<pre>';
			print_r($lista_frutas2);
		echo '<pre/>';

		//Printando indices especificos
		echo $lista_frutas[1];
		echo '<br/>';
		echo $lista_frutas2[2];




			
		//Arrays associativos(Basicamente sou eu falando que nao quero os indices sendo numeros mas o que eu definir)
		echo '<hr/>';

		$lista_frutas4 = array('a' => ' Banana',
							  'b' => 'Maça',
							  'c' => 'Morango', 
							  'd' => 'Uva');

		echo '<pre>';
			print_r($lista_frutas4);
		echo '<pre/>';



		//Adicionando indices
		$lista_frutas[5] = 'Abacaxi';
		echo '<pre>';
			print_r($lista_frutas);
		echo '<pre/>';

	?>

</body>
</html>