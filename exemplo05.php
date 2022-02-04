<?php

$nome = "Fabio";



function teste(){

    global $nome;
    echo $nome;

}

function teste2(){

    $nome = "Hanada";

    echo $nome. " agora teste 2";

}

teste();

teste2();

?>