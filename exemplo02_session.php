<?php

require_once ("config.php");

/*session_unset($_SESSION['nome']);*/

session_start();

echo $_SESSION["nome"];

?>
