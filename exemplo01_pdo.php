<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {

    foreach ($row as $key => $value) {

        echo "<strong>".$key.":</strong>".$value."<br/>";

    }

    echo "----------------------------------------------<br>";

}

//var_dump($result);

?>
