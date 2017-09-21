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

	array_push($pessoas, array(
		'nome'=>'Jonas',
		'idade'=>'22'
	));

	array_push($pessoas, array(
		'nome'=>'Carla',
		'idade'=>'23'
	));

	array_push($pessoas, array(
		'nome'=>'José',
		'idade'=>'22'
	));

	print_r($pessoas[0]);

	echo "</pre>";
?>