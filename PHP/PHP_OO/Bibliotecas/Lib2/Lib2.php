<?php 

	namespace B;
	//Interfaces
	interface CadastroInterface {
		public function remove();
	}

	class Cliente implements CadastroInterface{

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

	}

?>