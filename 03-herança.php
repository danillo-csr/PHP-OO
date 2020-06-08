<?php

/*
        ########## MODIFICADORES DE ACESSO ##########

PUBLIC - acessível por qualquer um, de qualquer lugar, não tem ocultação nenhuma

PROTECTED - acessível por dentro da classe e por todos os herdeiros como se fossem

PRIVATE - acessível apenas dentro do escopo da classe

fala miss


*/

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    
    protected $categoria;
    protected $motor;
    protected $preco;

    private $placa;
    private $numPassageiros;
    private $velMax;

    public function Andar(){
        echo "andou!<br>";
    }

    public function Parar(){
        echo "parou!<br>";
    }

    public function getModelo(){
        return $modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getCor(){
        return $cor;
    }

    public function setCor($c){
        $this->cor = $c;
    }
    
    public function getAno(){
        return $ano;
    }

    public function setAno($a){
        $this->ano = $a;
    }

}

class Carro extends Veiculo {
    
    $carro->categoria = "hatch";
    $carro->motor = "1.8";
    $carro->preco = 55000;


}

class Moto extends Veiculo {

    $moto->categoria = "Custom";
    $moto->motor = "800cc";
    $moto->preco = 200000;

}

$carro = new Carro();

$carro->modelo = "Gol";
$carro->cor = "vermelho";
$carro->ano = 1999;

$carro->placa = "vkh-8946";
$carro->numPassageiros = 5;
$carro->velMax = 180;

$carro->Andar();
$carro->Parar();
var_dump();

/* ------------------------------ */

echo "<br><hr>";

$moto = new Moto();

$moto->modelo = "V-Max";
$moto->cor = "Preto";
$moto->ano = 2016;

$moto->placa = "crf-2531";
$moto->numPassageiros = 2;
$moto->velMax = 170;

$moto->Andar();
$moto->Parar();
var_dump($moto);