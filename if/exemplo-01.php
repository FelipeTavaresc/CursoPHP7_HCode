<?php
	$qualASuaIdade = 125;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if ($qualASuaIdade < $idadeCrianca) {
		echo "Criança";
	}else if($qualASuaIdade < $idadeMaior){
		echo "Adolecente";
	}else if ($qualASuaIdade < $idadeMelhor) {
		echo "Adulto";
	}else{
		echo "Idoso";
	}

	echo "<br>";

	echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade" : "Maior de Idade";

	echo "<br>";


	//Praticando com If
	$salario = 2500;

	if ($salario <= 1000) {
		echo "Analista Junior";
	}elseif ($salario >= 1000 & $salario <= 1500) {
		echo "Analista Pleno";
	}elseif ($salario > 1500 & $salario <= 2000) {
		echo "Analista Senior";
	}else{
		echo "Supervisor";
	}

	
?>