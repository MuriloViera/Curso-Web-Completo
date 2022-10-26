<?php 

	//Modelo de objeto
	class Funcionario {

		//Atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//getters e setters(Os getters e setters funcionam juntos, por exemplo, o nome José é passado na hora da criação de um modelo, e o set, pega esse nome e atribui a variavel DO objeto, tendo assim a variavel do objeto definida, é possivel que o usuario queira acessar esse atributo, e o get funciona assim, sendo uma função de retorno)
		function setNome($nome){
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function getNome(){
			return $this->nome;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}

		//Métodos(Ações)
		function resumirCadastro(){
			return "$this->nome possui $this->numFilhos filho(s)";
		}

		function modificarNumFilhos($numFilhosNovo){
			$this->numFilhos = $numFilhosNovo;
		}

		//O this novamente explicando serve para que eu indique para o compilador que estou usando metodos DESTE(THIS) modelo de objeto
	}

	$Jerson = new Funcionario();

	$Jerson->setNome('Jerson'); //Aqui em PHP, o que seria o . que eu conheço, agora é ->

	$Jerson->setNumFilhos(2);//Usando set para setar o atributo do metodo para 2

	echo $Jerson->getNome();//Chamando o metodo get para ver um atributo em específico setado

	echo '<br/>';

	echo $Jerson->resumirCadastro();

	$Fernando = new Funcionario();

	$Fernando->setNome('Fernando');

	$Fernando->setNumFilhos(0);

	echo '<br/>';

	echo $Fernando->getNome() . ' tem ' . $Fernando->getNumFilhos() . ' filho(s)';

?>