<?php 

	if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
		
		$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha = '';
		
		try{

			$conexao = new PDO($dsn, $usuario, $senha);

			$query = "select * from tb_usuarios where email = '{$_POST['usuario']}' AND senha = '{$_POST['senha']}' ";

			echo $query;

			$stmt = $conexao->query($query);
			$usuario = $stmt->fetch();
			echo '<hr/>';

			echo '<pre>';
			print_r($usuario);
			echo '</pre>';

		}catch(PDOException $e){
			echo 'Erro: '. $e->getCode(). 'Mensagem: '.$e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<form method="post" action="injetando_sql.php">
		<input type="text" placeholder="usuário" name="usuario">
		<br>
		<input type="password" placeholder="senha" name="senha">
		<br>
		<button type="submit">Entrar</button>
	</form>


</body>
</html>