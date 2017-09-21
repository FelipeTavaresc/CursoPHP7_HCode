<?php

	$a = 10;

	function trocaValor(&$a){
		//Quando há um "&" ao lado esquerdo do parâmetro siginifica que o valor está sendo passado por referência.
		$a += 50;
		return $a;
	}

	echo trocaValor($a);
	echo "<br>";
	echo trocaValor($a);
	echo "<br>";
	echo $a;
?>