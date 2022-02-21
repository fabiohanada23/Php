<?php

$json = '[{"name":"PHP 7","short_name":"PHP"},{"name":"JavaScript","short_name":"JS"},{"name":"Vue JS","short_name":"Vue"}]';

$data = json_decode($json, true);

var_dump($data);

?>
