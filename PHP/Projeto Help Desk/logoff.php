<?php 

	session_start();

	print_r($_SESSION);

	//Verifica se o indice existe e se existir o remove o índice do array de sessão e se ele ja nao existir, ele nao da erro
	//unset()


	//Destruir a variável de sessão, porem, se eu recarregar a pagina, ela ainda vai estar la, so na proxima vez que a pagina for recarregada, que ela nao vai existir
	session_destroy();
	header('Location:index.php');

?>