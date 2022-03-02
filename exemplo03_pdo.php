<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "querty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Inserido ok";

?>
