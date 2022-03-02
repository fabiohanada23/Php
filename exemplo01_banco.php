<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Erro: " . $conn->connect_error;

}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "1234";

$stmt->execute();

$login = "user2";
$pass = "6549";

$stmt->execute();



?>
