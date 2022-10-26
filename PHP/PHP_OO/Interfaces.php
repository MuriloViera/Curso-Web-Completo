<?php 

	interface EquipamentoEletronicoInterface{

		//Métodos(As interfaces nao implementam metodos, elas apenas os declaram)
		public function ligar();
		public function desligar();
	}
	

	//Modelo de objeto
	class Geladeira implements EquipamentoEletronicoInterface{
	//O extends é diferente do implements, o extendes pega tudo daonde ele tiver extendendo, o implemento pega os metodos da inreface, e agora eu TENHO que implementar elas.

		//Métodos
		public function abrirPorta(){
			echo 'Abrindo a porta';
		}

		//Implementando os metodos da interface
		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}

	}


	//Modelo de objeto
	class Tv{

		//Métodos
		public function trocarCanal(){
			echo 'Trocando canal';
		}

		//Implementando os metodos da interface
		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}

	}


	$Electrolux = new Geladeira();
	$Philco = new Tv(); 

	//------------------------------------------------------------

	interface MamiferoInterface{
		public function respirar();
	}

	interface TerrestreInterface{
		public function andar();
	}

	interface AquaticoInterface{
		public function nadar();
	}

	//Modelo de objetos
	class Humano implements MamiferoInterface, TerrestreInterface{

		//Implementação dos metodos
		public function andar(){
			echo 'Andar';
		}

		public function respirar(){
			echo 'Respirar';
		}

		public function conversar(){
			echo 'Conversar';
		}
	}

	class Baleia implements MamiferoInterface, AquaticoInterface{

		//Implementação dos metodos
		public function nadar(){
			echo 'Nadar';
		}

		public function respirar(){
			echo 'Respirar';
		}

		protected function esguichar(){
			echo 'Esguichar';
		}
	}

	//------------------------------------------------------------

	//Interfaces
	interface AnimalInterface{
		public function comer();
	}

	interface AveInterface extends AnimalInterface{
		public function voar();
	}

	//Modelo de Objetos
	class papagaio implements AveInterface{
		
		//Implementação dos metodos
		public function voar(){
			echo 'Voar';
		}

		public function comer(){
			echo 'Comer';
		}
	}
?>

