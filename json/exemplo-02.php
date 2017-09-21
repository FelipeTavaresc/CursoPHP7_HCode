<?php
	echo "<pre>";

	$json = '[{"nome":"Paulo","idade":"20"},{"nome":"Pedro","idade":"21"}]'; 

	$data = json_decode($json, true);

	var_dump($data);

	echo "</pre>";
?>