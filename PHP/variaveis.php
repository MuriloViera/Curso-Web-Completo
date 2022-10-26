<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variaveis PHP</title>

</head>

<body>

	<?php
		//Variavel do tipo string
		$nome = 'Jailson Mendes';

		//Variavel do tipo int
		$idade = 35;

		//Variavel do tipo float
		$peso = 82.5;

		//Variavel do tipo boolean
		$fumante_sn = true; //Retorna 1 se for true se for false retorna vazio

		//..lógica..//

		$idade = '30';
	?>

	<h1>Ficha cadastral</h1>
	<br>
	<p>Nome: <?= $nome ?> </p>
	<!--OU-->
	<p>Nome: <?php echo $nome ?></p>
	 <!--Diferença é que o de cima usa a tagpropria pra printar coisas ?=-->
	<p>Nome: <?= $nome ?> </p>
	<p>Idade: <?= $idade ?> </p>
	<p>Peso: <?= $peso ?> </p>
	<p>Fumante: <?= $fumante_sn ?> </p>

</body>
</html>