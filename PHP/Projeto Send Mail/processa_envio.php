<?php 

	//Importando bibliotecas		
	require_once './PHPMailer-6.4.1/src/Exception.php';

	require_once './PHPMailer-6.4.1/src/OAuth.php';

	require_once './PHPMailer-6.4.1/src/PHPMailer.php';

	require_once './PHPMailer-6.4.1/src/POP3.php';

	require_once './PHPMailer-6.4.1/src/SMTP.php';

	//Selecionando o namespace que vou usar
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//print_r($_POST);

	//Modelo de dados
	class Mensagem{

		//Atributos
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array('codigo_status' => null, 'descricao_status' => '');

		//Get
		public function __get($atributo){
			return $this->$atributo;
		}

		//Set
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		//Métodos
		public function mensagemValida(){
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){//a função nativa empty verifica se uma variavel esta vazia, se tiver retorna true, se nao retorna false
				return false;
			}
			else {
				return true;
			}

		}
	}

	//Objetos
	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	//print_r($mensagem);

	if(!$mensagem->mensagemValida())	{
		echo 'Mensagem nao é valida';
		header('Location: index.php');
	}

	//Mensagem válida(Isso eu nao fiz, so copiei do github dos caras que fizeram a biblioteca)
	
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = false; //Enable verbose debug output
	    $mail->isSMTP(); //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com'; //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;  //Enable SMTP authentication
	    $mail->Username   = 'murilo.pizzamiglio@sou.unaerp.edu.br'; //SMTP username
	    $mail->Password   = 'Muri120220'; //SMTP password
	    $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
	    $mail->Port       = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom('murilo.pizzamiglio@sou.unaerp.edu.br', 'Muliro Email Una');
	    $mail->addAddress($mensagem->__get('para')); //Add a recipient
	   
	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('mensagem');
	    $mail->AltBody ='É necessario usar um client que suporte HTML para ter acesso total a essa mensagem';

	    $mail->send();

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';

	} catch (Exception $e) {

		$mensagem->status['codigo_status'] = 2;
	    $mensagem->status['descricao_status'] = 'O email nao pode ser enviado. Detalhes do erro: {$mail->ErrorInfo}';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>App Mail Send</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">Seu app de envio de e-mails particular!</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php if($mensagem->status['codigo_status'] == 1) {?>

				<div class="container">
					<h1 class="display-4 text-success">Sucesso</h1>
					<p><?= $mensagem->status['descricao_status'] ?></p>
					<a href="index.php" class="btn btn-success btn-large mt-5 text-white">Voltar</a>
				</div>

			<?php } ?>	


			<?php if($mensagem->status['codigo_status'] == 2) {?>

				<div class="container">
					<h1 class="display-4 text-danger">Ops<!/h1>
					<p><?= $mensagem->status['descricao_status'] ?></p>
					<a href="index.php" class="btn btn-danger btn-large mt-5 text-white">Voltar</a>
				</div>
				

			<?php } ?>	
		</div>
	</div>

</body>
</html>