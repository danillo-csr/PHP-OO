<?php

/*
        ########## MODIFICADORES DE ACESSO ##########

PUBLIC - acessível por qualquer um, de qualquer lugar, não tem ocultação nenhuma

PROTECTED - acessível por todos os herdeiros como se fossem públicos

PRIVATE - acessível apenas dentro do escopo da classe

*/

class Veiculo{
    private $modelo;
    private $cor;
    private $ano;

    public function Andar(){
        echo "andou!<br>";

    }

    public function Parar(){
        echo "parou!<br>";

    }
}

class Carro extends Veiculo {

}

class Moto extends Veiculo {

}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "vermelho";
$carro->ano = 1999;
$carro->Andar();
$carro->Parar();
var_dump($carro);

echo "<br>";

$moto = new Moto();

$moto->modelo = "V-Max";
$moto->cor = "Preto";
$moto->ano = 2016;
$moto->Andar();
$moto->Parar();
var_dump($moto);