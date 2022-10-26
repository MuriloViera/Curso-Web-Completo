<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For Each em PHP</title>
</head>
<body>

	<?php 

		$itens = array('Sofá','Mesa', 'Cadeira', 'Fogão', 'Geladeira');

		echo '<pre>';
			print_r($itens);
		echo '<pre>';

		foreach ($itens as $iten) { //O foreach ele percorre o array um a um em cada ciclo da estrutura de repetição, e a cada ciclo ele passa esse valor para a variavel que eu informei.
			echo "$iten";

			if ($iten == 'Mesa') {
				echo " (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";
			}

			echo '<hr/>';
		}
	?>

</body>
</html>