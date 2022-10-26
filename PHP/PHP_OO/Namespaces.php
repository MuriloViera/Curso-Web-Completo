<?php 
	
	namespace A;//A partir desse ponto, o namespace será A

	//Interfaces
	interface CadastroInterface{
		public function salvar();
	}

	//Modelos de objetos
	class Cliente implements \B\CadastroInterface{
	//To implementando a interface do namespace B no namespace A

		//Atributos
		public $nome  = 'Jorge';

		//Construct
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		//Get
		public function __get($atributo){
			return $this->$atributo;
		}

		//Implementar metodos
		public function salvar(){
			echo 'Salvando';
		}

		public function remove(){
			echo 'Remover';
		}
	}

	namespace B;//-------------------------------------------------

	//Interfaces
	interface CadastroInterface {
		public function remove();
	}

	class Cliente implements \A\CadastroInterface{

		//Atributos
		public $nome  = 'Lucas';

		//Construct
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		//Get
		public function __get($atributo){
			return $this->$atributo;
		}

		//Implementar metodos
		public function remove(){
			echo 'Deletar';
		}

		public function salvar(){
			echo 'Salvar';
		}
	}

	//Objetos
	$c = new \B\Cliente();//Coloco entre barras antes para especificar qual namespace eu quero que ele olhe
	print_r($c);
	echo $c->__get('nome');

?>