<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PEsquisa de Arrays</title>
</head>
<body>

	<?php 

		//in_array() -> Retorna true or false
		//array_search() -> Retorna um indice do valor pesquisado caso ele exista

		$lista_frutas = ['Banana', 'Morango', 'Maça', 'Uva'];

		echo '<pre>';
		print_r($lista_frutas);
		echo '<pre/>';

		if(in_array('Morango', $lista_frutas)){
			echo 'O indice pesquisado existe';
		}
		else
		{
			echo 'O indice pesquisado nao existe';	
		}

		echo '<br/>';
		echo array_search('Uva', $lista_frutas);







		echo '<hr/>';
		$lista_coisas = [
			'frutas' => $lista_frutas,
		    'pessoas' => ['Joao', 'Maria']
		];

		echo '<pre>';
		print_r($lista_coisas);
		echo '<pre/>';

		echo array_search('Uva', $lista_coisas['frutas']);

	?>

</body>
</html>