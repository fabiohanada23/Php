<?php

session_id('u70lvlfhbic2vd4cnsilb9uqo1');

require_once ("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>
