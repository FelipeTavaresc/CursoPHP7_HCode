<?php
	
	class Endereco{
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){
			var_dump("DESTRUIR");
		}

		public function __toString(){
			return $this->logradouro. ", ".
				   $this->numero. " - ".
				   $this->cidade;
		}

		public function __halt_compiler(oid)
	}

	$meuEndereco = new Endereco("Rua João de Almada", 18, "São Paulo");

	echo "<pre>";

	var_dump($meuEndereco);

	echo $meuEndereco;

	echo "</pre>";

?>