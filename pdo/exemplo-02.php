<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQL2017;ConnectionPooling=0", "sa", "865522");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin DESC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>