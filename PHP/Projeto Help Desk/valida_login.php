<?php 

	session_start();//A sessão como o nome ja diz é uma sessao que quando aberta ficara disponivel para todas as paginas da aplicação

	//Variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = [1 => 'Administrativo', 2 => 'Usuário'];

	//Usuarios do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jorge@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),

	);

	foreach ($usuarios_app as $user ) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	if ($usuario_autenticado) {
		echo 'Usuario autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php?');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');//Essa instrução força o redirecionamento da pagina para index.php
	}

	//$_SESSION['variable']
  	//Vetor Superglobal de variaveis compartilhadas entre as paginas que iniciaram a sessao que podem ser usada em qualquer script da aplicação, as variaveis de sessao so sao passadas quando uma pagina se direciona para a outra por algum meio que eu queira dentro da pagina, nao apenas escrevendo o url
	
	/*
	$_POST['email'];
	$_POST['senha'];
	//Como agora as informações estao vindo pela requisição http e nao pela URL mais, a superglobal GET nao funciona mais, entao como estou enviando pelo metodo POST, eu recebo elas pela variavel POST
	*/

	/*
	echo $_GET['email'];
	echo $_GET['senha'];
	//Super global get, que vai pegar os input que estao sendo mandandos com o a tag 'name', pq quando eu uso formulario, eu envio para outro lugar e as informaçoes ficam no url, com o GET eu pego elas.

	*/
?>