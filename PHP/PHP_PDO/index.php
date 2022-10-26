<?php

	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';


	try{
		//Criar a tabela
		$conexao = new PDO($dsn, $usuario, $senha);

		$query = '
			create table if not exists tb_usuarios(
					id int not null primary key auto_increment,
					nome varchar(50) not null,
					email varchar(100) not null,
					senha varchar(32) not null
			)
		';

		$retorno =  $conexao->exec($query);
		//Retorna 0 se criar uma tabela
		echo $retorno;

		//Inserir na tabela
		$query = ' 
			insert into tb_usuarios(
				nome, email, senha
				) values (
				"Muliro","murilo@teste.com.br","123456"
				)
		';

		$retorno = $conexao->exec($query);
		//Retorna 1 pq to alterando 1 registro so
		echo $retorno;

		/*
		//apagar itens da tabela
		$query = 'delete from tb_usuarios';

		$retorno = $conexao->exec($query);
		//Retorna 5 pq to alterando 5 registro que tinham la
		echo $retorno;
		*/

	}catch(PDOException $e){
		echo 'Erro: '. $e->getCode(). 'Mensagem: '.$e->getMessage();

		//Registrar erro
	}


?>