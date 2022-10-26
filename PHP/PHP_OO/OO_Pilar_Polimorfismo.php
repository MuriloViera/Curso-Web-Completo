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

		function trocarMarcha(){
			echo 'Trocando a marcha';
		}
	}

	//Modelo de objeto filho
	class Carro extends Veiculo{ 

		//Atributos
		public $teto_solar = true;

		//Set multiplo(Sobrecarregado)
		function __construct($Placa, $Cor){
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

		function trocarMarcha(){//Como o modelo de objeto pai JA possui esse metodo, eu estou SOBRESCREVENDO ele e alterando somente para esse objeto filho
			echo 'MOTO trocando marcha';
		}

	}


	$amarok = new Carro('ABC1234', 'Branco');
	$ninja = new Moto('DEF1234', 'Preta');

	echo '<pre>';
	print_r($amarok);
	echo '<br/>';
	print_r($ninja);
	echo '<pre/>';

	$amarok->trocarMarcha();
	echo '<br/>';
	$ninja->trocarMarcha();
?>