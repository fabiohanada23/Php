<?php

function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Ola $texto $periodo<br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Fabio", "Boa tarde");
echo ola("Maria", "");

?>
