<?php
	session_id('ncm9ln01t7g76bm5qjij61uss2');

	echo "<pre>";

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

	echo "</pre>"

?>