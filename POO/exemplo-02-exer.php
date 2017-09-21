<?php

	class Funcionario{

		private $nome;
		private $cargo;
		private $departamento;
		private $salario;

		public function getNome(){
			return $this->nome;		
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getCargo(){
			return $this->cargo;
		}

		public function setCargo($cargo){
			$this->cargo = $cargo;
		}

		public function getDepartamento(){
			return $this->departamento;
		}

		public function setDepartamento($departamento){
			$this->departamento = $departamento;
		}

		public function getSalario(){
			return $this->salario;
		}

		public function setSalario($salario){
			$this->salario = $salario;
		}

		public function exibir(){
			return array(
				"nome"=>$this->getNome(),
				"cargo"=>$this->getCargo(),
				"departamento"=>$this->getDepartamento(),
				"salario"=>$this->getSalario()
			);
		}

	}

	$funcionario = new Funcionario();
	$funcionario->setNome("Felipe Tavares");
	$funcionario->setCargo("Desenvolvedor JR");
	$funcionario->setDepartamento("Desenvolvimento");
	$funcionario->setSalario("1800");

	echo "<pre>";

	print_r($funcionario->exibir());

	echo "</pre>";


?>