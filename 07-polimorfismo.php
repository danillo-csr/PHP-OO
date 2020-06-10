<?php

class Animal{

    //define o método Andar()
    public function Andar(){
        echo "<br>O animal andou!";
    }

}

class Cavalo extends Animal{
    
    //redefine, o método herdado Andar();
    public function Andar(){
        echo "<br>O cavalo andou!";
    }
}

$animal = new Animal();
$animal->Andar();

$cavalo = new Cavalo();
$cavalo->Andar();