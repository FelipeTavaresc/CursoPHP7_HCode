<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Carlos";
$password = "ka9589";
$id = 4;

$stmt->bindParam(":LOGIN", $login);  
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);  

$stmt->execute();

echo "Usuário com o id $id foi alterado com sucesso!";

?>