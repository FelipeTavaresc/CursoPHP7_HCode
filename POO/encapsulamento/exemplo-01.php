 <?php
 	Class Pessoa{
 		public $nome = "Rasmus Lerdorf";
 		protected $idade = 48;
 		private $senha = "123";

 		public function verDados(){
 			echo $this->nome . "<br>";
 			echo $this->idade . "<br>";
 			echo $this->senha . "<br>";
 		}
 	}

 	$obj = new Pessoa();
 	//echo $obj->senha . "<br>";

 	$obj->verDados();
 ?>