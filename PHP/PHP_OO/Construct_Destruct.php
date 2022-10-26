<?php 

	class Pessoa{

		//Atributos
		public $nome = null;

		function __construct($Nome){ //O construct é um metodo que se inicia no momento em que o objeto é criado, aqui ele ta funcionando como um SET
			$this->nome = $Nome;
		}

		function __destruct(){//Metodo executado automaticamente quando o objeto for removido
			echo  'Objeto removido';

		}

		//Getter e Setters
		function __get($atributo){
			return $this->$atributo;
		}

		//Métodos
		function correr(){
			return $this->nome. ' está correndo';
		}

	}


	$Gilberto = new Pessoa('Gilberto');
	echo '<br/> Nome:' . $Gilberto->__get('nome');
	echo '<br/>' . $Gilberto->correr();

	echo '<br/>';
	unset($Gilberto);//O unset remove um objeto da memória

?>