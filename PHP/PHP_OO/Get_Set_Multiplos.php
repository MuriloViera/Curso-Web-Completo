<?php 

	//Nessa aula, vou aprender a usar apenas um set e um get para toooodos os atributos, e nao um par para cada

	//Modelo de objeto
	class Funcionario {

		//Atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//Getter e Setters(Overloading)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}


		//Métodos(Ações)
		function resumirCadastro(){
			return $this->__get('nome') . ' possui '.  $this->__get('numFilhos'). ' filho(s)';
		}

		function modificarNumFilhos($numFilhosNovo){
			$this->numFilhos = $numFilhosNovo;
		}

	}


	$Josué = new Funcionario();

	$Josué->__set('nome', 'Josué');
	$Josué->__set('numFilhos', 2);

	echo $Josué->__get('nome');

	echo '<br/>' . $Josué->resumirCadastro()

	
?>