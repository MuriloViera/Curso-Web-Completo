<?php 
	namespace A;

	//Interfaces
	interface CadastroInterface{
		public function salvar();
	}

	//Modelos de objetos
	class Cliente implements CadastroInterface{

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

	}
?>	