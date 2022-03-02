<?php

abstract class Animal{

    public function fala(){

        return "Som";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal{

    public function fala()
    {
        return "Late";
    }

}

class Gato extends Animal{

    public function fala()
    {
        return "Mia";
    }

}

class Passaro extends Animal{

    public function fala()
    {
        return "Canta";
    }

    public function mover()
    {
        return "Voa e " . parent::mover();
    }

}

$pluto = new Cachorro();

echo $pluto->fala() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "----------------------<br/>";

$garfield = new Gato();

echo $garfield->fala() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "----------------------<br/>";

$ave = new Passaro();

echo $ave->fala() . "<br/>";
echo $ave->mover() . "<br/>";


?>
