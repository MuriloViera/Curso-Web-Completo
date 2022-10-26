<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções para Arrays em PHP</title>
</head>
<body>

	<?php 


		//is_array
		$array = [];
		$retorno = is_array($array);

		if($retorno){
			echo 'Sim é um array';
		}
		else{
			echo 'Não, não é um array';
		}



		echo '<hr/>';



		//array_keys
		$array1 = ['a', 'b', 'c', 'd'];
		echo '<pre>';
		print_r($array1);
		echo '<pre/>';

		$chaves_array1= array_keys($array1);

		echo '<pre>';
		print_r($chaves_array1);
		echo '<pre/>';



		echo '<hr/>';



		//sort
		$array2 = ['Teclado' ,'Mouse', 'Cabo HDMI', 'Gabinete','Fonte atx', 'Notebook'];

		echo '<pre>';
		print_r($array2);
		echo '<pre/>';

		echo sort($array2); //True or False, retorna true se ele conseguir ordenar, se nao retorna false

		echo '<pre>';
		print_r($array2);
		echo '<pre/>';



		echo '<hr/>';



		//asort -> Mesma coisa do sort porem ele organiza em ordem alfabetica mas mantem os indices dos dados
		$array3 = ['Teclado' ,'Mouse', 'Cabo HDMI', 'Gabinete','Fonte atx', 'Notebook'];

		echo '<pre>';
		print_r($array3);
		echo '<pre/>';

		echo asort($array3);

		echo '<pre>';
		print_r($array3);
		echo '<pre/>';



		echo '<hr/>';



		//count ->Conta a quantidade de indices
		$array4 = ['Teclado' ,'Mouse', 'Cabo HDMI', 'Gabinete'];

		echo '<pre>';
		print_r($array4);
		echo '<pre/>';

		echo count($array4);



		echo '<hr/>';



		//array_merge -> Junta arrays
		$array5 = ['OSX', 'WINDOWS'];
		$array6 = ['LINUX'];
		$array7 = array('SOLARIS');

		$novo_array = array_merge($array5, $array6, $array7);

		echo '<pre>';
		print_r($novo_array);
		echo '<pre/>';



		echo '<hr/>';



		//explode ->Junta uma string separando em algum ponto ele
		$string2 = '05/01/2022';

		$array8 = explode('/', $string2);

		echo '<pre>';
		print_r($array8);
		echo '<pre/>';



		echo '<hr/>';



		//implode ->Transofrma um array em uma string
		$array9 = ['a', 'b', 'x', 'y'];

		$string_retorno = implode(',', $array9);

		echo $string_retorno;


	?>

</body>
</html>