<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções em PHP</title>
</head>
<body>

	<?php 


		function exibirBoasVindas(){
			echo 'Boas vindas';
		}

		exibirBoasVindas();

		function calcularAreaTerreno($largura, $comprimento){
			$area = $largura * $comprimento;
			return $area;
		}

		echo '<br/>';
		echo calcularAreaTerreno(45, 20);

	?>

</body>
</html>