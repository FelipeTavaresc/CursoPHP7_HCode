<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);  

$stmt->execute();

echo "Usuário com o id $id foi excluido com sucesso!";

?>