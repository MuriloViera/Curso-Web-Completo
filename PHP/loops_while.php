<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>While em PHP</title>
</head>
<body>

	<?php 

		$num = 1;
		echo '--Inicio do loop ---';
		echo '<br/>';

		while ($num < 50) {
			echo "$num <br/>";

			$num += 5;

			//Ai tem o break e o continue, o break ele quebra o laço de repetição e segue o código e o continue pula para a proxima repetição do laço, o que tiver de baixo dele nao é impresso 
		}

		echo '--Inicio do loop ---';


	?>

</body>
</html>