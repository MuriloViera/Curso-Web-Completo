<?php 
	class Pai{
		//Atributos
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz'; 


		//Get multiplo
		public function __get($atributo){
			return $this->$atributo;
		}

		//Set
		public function __set($atributo, $value){
			$this->$atributo = $value;
		}

		//Metodos
		private function executarMania(){
			echo 'Assobiar';
		}

		protected function responder(){
			echo 'Oi';
		}

		public function executarAcao(){
			$this->executarMania();
		}
	}

	class Filho extends Pai{
		//No processo de herença, os atributos private NAO sao herdados, mas os protected sim

		//Get
		public function getAtributo($atributo){
			return $this->$atributo;
		}

		//Set
		public function setAtributo($atributo, $valor){
			$this->$atributo = $valor;
		}
	}


	$Jorge = new Pai();

	echo $Jorge->humor;
	$Jorge->humor = 'Triste';
	echo '<br/>';
	echo $Jorge->humor;

	echo '<br/>';

	//echo $Jorge->nome;
	//Vai dar erro, por que a aplicação nao pode acessar atributos privados

	//echo $Jorge->sobrenome;
	//Vai dar erro, por que a aplicação nao pode acessar atributos protegidos

	echo $Jorge->nome;//Meio de acessar um atributo privado ou protegido por eu ter criado um get sobrecarregado

	echo '<br/>';

	$Jorge->nome = 'Oliveira';//Meio de alterar um atributo privado ou protected por eu ter criado um set sobrecarregado

	echo $Jorge->nome;

	echo '<br/>';

	//echo $Jorge->executarMania();
	//Vai dar erro, do mesmo jeito que atributos, nao posso acessar metodos privados ou protected

	echo $Jorge->executarAcao();//Aqui estou executando o metodo executarAcao que é publico que executa o executarMania que é privado

	$Joao = new Filho();

	echo '<br/>';
	echo '<hr/>';

	/*
	echo $Joao->getAtributo('humor');//Mesmo com o get unico, eu nao consigo pegar um atributo privado da classe pai	

	$Joao->setAtributo('humor', 'Triste');//Com um set unico, eu ainda nao consigo alterar um atributo da classe pai privado, como por exemplo o "nome", o que acontece é que é criado um novo atributo especifico da classe filho 

	echo '<br/>';

	echo $Joao->getAtributo('humor');
	*/


?>