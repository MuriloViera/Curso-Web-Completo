<?php 

	//Tenha uma lógica
	try {

		echo '<h3> ** TRY ** </h3>';

		$sql = 'Select *from clientes';//É so pra eu forçar dar um erro
		mysql_query($sql);//Nao se preocupa com isso
		
	} catch (Error $e) {//Se tiver erro ele entra aqui e passa o erro pra variavel $e, se nao ele nem entra e vai pro finally

		echo '<h3> ** CATCH ** </h3>';
		echo '<p style="color: red">' . $e;
		
	} finally {//Opção opcional
		echo '<h3> ** FINALLY ** </h3>';
	}

?>