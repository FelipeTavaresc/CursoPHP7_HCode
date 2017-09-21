<?php
	//Novos operadores PHP7
	//Colection Null
	$a = null;
	$b = 8;
	$c = 10;
	echo $a ?? $b ?? $c;
	//Na string acima o sistema verica se, a variável "$a" for null, mostre a variável "$b". E, se a variável "$b" também for null, mostre a variável "$c", e assim para as demais.

?>