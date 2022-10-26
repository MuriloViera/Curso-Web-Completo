<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variaveis constantes PHP</title>
</head>
<body>

	<?php

		define('BD_URL', 'endereco_bd_dev');//Para definir constantes, abro o define, passo o nome da variavel, e depois o valor dela

		define('BD_USUARIO', 'usuario_dev');

		define('BD_SENHA', 'senha_dev');

		echo BD_URL . '<br/>';
		echo BD_USUARIO . '<br/>';
		echo BD_SENHA . '<br/>';

		//Para eu usar a variavel depois, eu nao preciso usar o $

	?>

</body>
</html>