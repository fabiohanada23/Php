<?php

class Pessoa {

    public $nome;//atributo

    public function falar(){//metodo

        return "meu nome é " .$this->nome;

    }

}

$fabio = new Pessoa();
$fabio->nome = "Fabio Hanada";
echo $fabio->falar();
?>
