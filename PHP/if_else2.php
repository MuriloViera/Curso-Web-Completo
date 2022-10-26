<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If e Else Parte 2</title>
</head>
<body>

	<?php 

	$cartao = true;
	$compra = 50;
	$frete = 50;
	$desconto = true;

	if($cartao  && $compra >= 400){
		$frete = 0;		
	}
	else if($cartao  && $compra >= 300){
		$frete = 10;
	}
	else if($cartao  && $compra >= 100){
		$frete = 25;
	}else{
		$desconto = false;
	}

	?>


	<h1>Detalhes do pedido</h1>

	<p>Possui cartão da loja?
	
	<!--Operador ternário <condição> ? true : false
	Mesma coisa do Javascript-->
	<?= $cartao ? 'SIM' : 'NAO' ?>

	</p>

	<p>Valor da compra: <?= $compra?></p>	

	<p>Recebeu desconto no frete?
	

	<?php
		$teste = $desconto ? 'SIM' : 'NÃO';
		echo $teste
	?>


	</p>

	<p>Valor do frete: <?= $frete ?></p>

</body>
</html>