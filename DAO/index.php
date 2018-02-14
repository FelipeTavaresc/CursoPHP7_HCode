<?php

require_once("Config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo id
//$search = Usuario::search("o");
//echo json_encode($search);

//Carrega uma lita usandno o login e senha
$usuario = new Usuario();
$usuario->login("admin","admin");
echo $usuario;

?>