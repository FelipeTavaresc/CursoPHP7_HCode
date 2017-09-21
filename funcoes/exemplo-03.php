<?php
	function ola($texto = "Mundo", $periodo = "Bom dia"){
		return "Olá $texto! $periodo!<br>";
	}

	echo ola("Mundo");
	echo ola("", "Boa noite");
	echo ola("Pedro", "Boa tarde");
	echo ola("Paulo", "");

?>