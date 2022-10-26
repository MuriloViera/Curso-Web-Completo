<?php 

	//Modelo de objeto pai
	class Veiculo{

		//Atributos
		public $placa = null;
		public $cor = null;

		//Metodo
		function acelerar(){
			echo 'Acelerar';
		}

		function freiar(){
			echo 'Freiar';
		}
	}

	//Modelo de objeto filho
	class Carro extends Veiculo{ //eu dar extends significa que estou pegando os atributos e metodos da outro modelo e adicionando a esses

		//Atributos
		public $teto_solar = true;

		//Set multiplo(Sobrecarregado)
		function __construct($Placa, $Cor){//Esse construct nada mais é do que um set sobrecarregado(que modifica mais de um atributo ao mesmo tempo) que inicia junto quando se cria o objeto
			$this->placa = $Placa;
			$this->cor = $Cor;

		}


		//Metodos
		function abrirTetoSolar(){
			echo 'Abrindo teto solar';
		}

		function alterarPosicaoVolante(){
			echo 'Alterando posição do volante';
		}

	}


	//Modelo de objeto filho
	class Moto extends Veiculo{

		//Atributos
		public $contra_peso_guidao = true;

		//Set multiplo(Sobrecarregado)
		function __construct($Placa, $Cor){ 
			$this->placa = $Placa;
			$this->cor = $Cor;

		}

		//Metodos
		function empinar(){
			echo 'Empinando';
		}

	}


	$amarok = new Carro('ABC1234', 'Branco');
	$ninja = new Moto('DEF1234', 'Preta');

	echo '<pre>';
	print_r($amarok);
	echo '<br/>';
	print_r($ninja);
	echo '<pre/>';

?>