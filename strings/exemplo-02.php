<?php
	$nome = "felipe tavares";

	$nome =	strtoupper($nome); //Converter para maíusculas

	echo $nome;

	$nome = strtolower($nome);//Converter para minusculas

	echo "<br/>";

	echo $nome;

	echo "<br/>";

	echo ucwords($nome); // Converte a primeira letra de cada palavra em maíuscula

	echo "<br/>";

	echo ucfirst($nome); // Converte apenas a primeira letra para maíuscula

	
?>