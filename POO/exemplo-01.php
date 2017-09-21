<?php
	class Pessoa {
		//Atributo
		public $nome; 

		//Método
		public function falar() {
			return "O meu nome é ".$this->nome;
		}

	}

	$felipe = new Pessoa();
	$felipe->nome = "Felipe Tavares";
	echo $felipe->falar();

?>