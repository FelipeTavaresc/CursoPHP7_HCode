<?php

	for ($i = 0; $i <= 1000 ; $i+=5) {

		if ($i >= 200 & $i <= 800) continue; // Pula a sequencia conforme a instrução acima.

		if ($i === 900) break; 
		echo $i . "<br>";
	}

?>