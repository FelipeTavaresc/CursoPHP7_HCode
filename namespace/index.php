<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Felipe");
$cad->setEmail("felipe@felipe.com");
$cad->setSenha("13456");

echo "<pre>";

var_dump($cad);

echo "</pre>";

$cad->registrarVenda();
?>