<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operadores de Incremento e Decremento</title>
</head>
<body>

	<h3>Pré-incremento</h3>

	<!--Se eu colocar o ++ ou -- antes da variavel, ele incrementa ou decrementa a variavel e depois passa ela, se eu colocar depois, ele passa a variavel normal e depois de passar aumenta ou decrementa ela-->

	<?php 
		$a = 7;

		echo "O valor contido em a é $a <br/>";
		echo 'O valor contido em a é ' . ++$a . '<br/>';
	?>

	<h3>Pré-decremento</h3>

	<?php 
		$a = 7;

		echo "O valor contido em a é $a <br/>";
		echo 'O valor contido em a é ' . --$a . '<br/>';
	?>

	<h3>Pós-incremento</h3>

	<?php 
		$a = 7;

		echo "O valor contido em a é $a <br/>";
		echo 'O valor contido em a é ' . $a++ . '<br/>';
		echo "O valor atualizado é $a"
	?>

	<h3>Pós-decremento</h3>

	<?php 
		$a = 7;

		echo "O valor contido em a é $a <br/>";
		echo 'O valor contido em a é ' . $a-- . '<br/>';
		echo "O valor atualizado é $a"
	?>



</body>
</html>