<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções de Datas PHP</title>
</head>
<body>



	<?php 

		//Recuperar a timezone 
		echo date_default_timezone_get();
		echo '<br/>';
		echo date('d/m/y H:i');
		echo '<hr/>';

		//Forçar a configuração do timezone
		echo 'Setei para o BR';
		date_default_timezone_set('America/Sao_Paulo');

		//Recuperar a data atual
		echo '<br/>';
		echo date('d/m/y H:i');//Ver o php.net para saber quais tokens tem que colocar ali dentro para formatar a data



		echo '<hr/>';
		$data_inicial = '2022-01-05';
		$data_final = '2022-02-05';

		//Strtotime calcula os segundos da data 01011970 ate uma que eu coloquei
		//01/01/1970 --- 05/01/2022

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);

		echo '<br/>';
		echo $data_inicial . ' - ' . $time_inicial;
		echo '<br/>';
		echo $data_final . ' - ' . $time_final;

		echo '<br/>';
		$diferenca_times = $time_final - $time_inicial;
		echo $diferenca_times;//Ai aqui eu descubro a quantidade de segundos das datas final e inicial que eu coloquei

		$segundos_existem_dia = 24 * 60 * 60;

		echo '<br/>';
		echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

		$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

		echo '<br/>';
		echo 'Existem ' . $diferenca_de_dias_entre_as_datas . ' dias entre as datas inseridas';

	?>

</body>
</html>