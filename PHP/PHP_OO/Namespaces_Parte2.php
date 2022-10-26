<?php 

	include_once "./Bibliotecas/Lib1/Lib1.php";

	include_once "./Bibliotecas/Lib2/Lib2.php";

	use A\Cliente; //Com o use eu especifico qual o namespace que eu quero usar

	use B\Cliente as C1;//Aqui especifiquei que quero o namspace B e mudei o nome dele pra C1

	$c = new Cliente();

	print_r($c);

	echo $c->__get('nome');

	$c = new C1();

	print_r($c);

	echo $c->__get('nome');

?>