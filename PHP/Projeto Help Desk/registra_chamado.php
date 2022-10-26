<?php 
	
	session_start();

	//Montagem do texto
	$titulo = str_replace('#',' ', $_POST['titulo']);
	$categoria = str_replace('#',' ', $_POST['categoria']);
	$descricao = str_replace('#',' ', $_POST['descricao']);

	//Abrindo arquivo
	$arquivo = fopen('arquivo.txt', 'a'); //O parametro a abre o arquivo para escrita, é bem semelhante ao do C;

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#'  . $descricao . PHP_EOL;//PHP END OF LINE, significa que ele quebra a linha dessa string

	//Escrevendo arquivo
	fwrite($arquivo, $texto);

	//Fechando arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>