<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concatenação PHP</title>
</head>
<body>

	<?php

		$nome = ' Jorge';
		$cor = 'amarelo';
		$idade = 25;
		$atividade_preferida = 'andar de bicicleta.';

		//Operador . é o que usa para concatenar, seria o meu + que eu to acostumado

		echo 'Olá' . $nome .  ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

		//Operador aspas duplas

		echo '<br/>';

		print '<hr/>';

		echo "Olá $nome, vi que sua cor preferida é $cor, e estou vendo também que voce possui $idade anos e que gosta de $atividade_preferida"
	?>

</body>
</html>