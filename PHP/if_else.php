<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If e Else PHP</title>
</head>
<body>

	<?php 

		//Ai tem todos os operadores condicionais(>,>=,<,<=,==,===,!=)que eu ja to careca de saber, nao muda nada do if e else de toda programação, tirando Piton

		if (false) {
			echo 'Verdadeiro';
		}
		else{
			echo 'Falso';
		}

		//Tem uma diferencinha que se o if tiver uma UNICA instrução dentro dele, eu nao preciso por os {}

		if(true)
			echo '<br/> Verdadeiro';

		//Tem os operadores lógicos, que sao &&, ||, XOR, !
		//O XOR retorna verdadeiro se APENAS se uma das expressoes for verdadeiro, se tiver mais que uma ele nao entra
		//O ! inverte o resultado

		echo '<hr/>';

		if (!(5 > 3 || 5 < 4)) {
			echo 'Verdadeiro';
		}
		else{
			echo 'Falso';
		}

	?>

</body>
</html>