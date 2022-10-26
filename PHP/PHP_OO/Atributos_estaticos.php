<?php 

	class Exemplo {

		//Atributos
		public static $atributo1 = 'Eu sou um atributo estatico';
		public $atributo2 = 'Eu sou um atributo normal';


		//Metodos
		public static function metodo1(){
			echo 'Eu sou um metodo estatico';

		}

		public function metodo2(){
			echo 'Eu sou um metodo normal';
		}
	}

	$x = new Exemplo();

	echo Exemplo::$atributo1; //Com atributos estaticos, eu nao preciso criar um objeto, eu posso acessar o objeto direto com :: e ver os atributos dele, se eu tentar acessar um atributo 2 por esse metodo, vai dar pau

	echo '<br/>';

	echo Exemplo::metodo1(); 

	//Os atributos estaticos nao podem ser acessados igual normalmente, usando o ->
	//Os metodos estáticos nao podem ser chamados com o $this

?>