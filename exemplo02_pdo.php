<?php


$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>