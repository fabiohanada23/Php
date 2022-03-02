<?php

class Pessoa {

    public $nome = "Rasmus";
    protected $idade = 48;
    public $senha = "12345"; //exemplo de privado

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha. "<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha. "<br/>";

    }

}

$objeto = new Programador();

$objeto->verDados();

//ctrl + shift + s

?>
