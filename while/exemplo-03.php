<?php
	//Exercício
	$valorProduto = 2000;
	$valorDesconto = 10;
	$produdoComDesconto = (($valorProduto / 100) * $valorDesconto);
	$aPagar = $valorProduto -  $produdoComDesconto;

	/*if ($valorProduto > 10000) {
		echo $valorProduto = $valorProduto * ($desconto * 100);
	}*/

	echo "Valor do Produto: " . $valorProduto . "<br>";
	echo "Desconto: " . $valorDesconto . "% <br>";
	echo "Total a pagar: " . $aPagar;

?>