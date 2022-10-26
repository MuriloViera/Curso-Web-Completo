<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes matematicas PHP</title>
</head>
<body>

	<?php 

		$num = 7.5;

		//Arredondamento para cima
		echo '<br/>';
		echo '<hr/>';
		echo ceil($num);

		//Arrendondando para baixo
		echo '<br/>';
		echo '<hr/>';
		echo floor($num);

		//Arredondamento com base na fração, se dps da virgula for maior que 5 ele arredonda pra cima, se for menor que 4 ele arredonda pra baixo
		echo '<br/>';
		echo '<hr/>';
		echo round($num);

		//Gera um valor randomico de 0 ate o randmax
		echo '<br/>';
		echo '<hr/>';
		echo rand(10, 20);//Gera um valor de 10 a 20
		echo '<br/>' . getrandmax();

		//Retorna a raiz quadrada de um numero
		echo '<br/>';
		echo '<hr/>';
		echo sqrt($num);

	?>

</body>
</html>