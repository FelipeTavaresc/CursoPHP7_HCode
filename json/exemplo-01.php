<?php
	//
	echo "<pre>";

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'Paulo',
		'idade'=>'20'
	));

	array_push($pessoas, array(
		'nome'=>'Pedro',
		'idade'=>'21'
	));

	echo json_encode($pessoas);

	echo "</pre>";
?>