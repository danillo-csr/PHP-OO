<?php

/*
        ########## MODIFICADORES DE ACESSO ##########

PUBLIC - acessível por qualquer um, de qualquer lugar, não tem ocultação nenhuma

PROTECTED - acessível por dentro da classe e por todos os herdeiros

PRIVATE - acessível apenas dentro do escopo da classe


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

    //métodos públicos, são acessíveis de qualquer lugar, de dentro da class, de fora e de herdeiros da classe
    public function Andar(){
        echo "andou!<br>";
    }

    protected function Parar(){
        echo "parou!<br>";
    }

    private function Estacionar(){
        echo "Estacionou!<br>";
    }

    public function acessaEstacionar(){
        return $this->Estacionar();
    }
    
    //-------------------------------

    //métodos para alterar e recuperar as informações dos atributos $placa, $numPassageiros e $velMax, que tem o modificador de acesso private;
    public function getPlaca(){
        return $this->placa;
    }
    public function setPlaca($p){
        $this->placa = $p;
    }
    //-------------------------------
    public function getNumPassageiros(){
        return $this->numPassageiros;
    }
    public function setNumPassageiros($np){
        $this->numPassageiros = $np;
    }
    //-------------------------------
    public function getVelMax(){
        return $this->velMax;
    }
    public function setVelMax($vm){
        $this->velMax = $vm;
    }
}

class Carro extends Veiculo {
    
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($cc){
        $this->categoria = $cc;
    }
    //-------------------------------
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($m){
        $this->motor = $m;
    }
    //-------------------------------
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }

    public function acessaParar(){
        return $this->Parar();
    }

}

class Moto extends Veiculo {

    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($cm){
        $this->categoria = $cm;
    }
    //-------------------------------
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($m){
        $this->motor = $m;
    }
    //-------------------------------
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }

    public function acessaParar(){
        return $this->Parar();
    }

}


//cria o objeto $carro que é uma instancia da classe Carro;

$carro = new Carro();

//por terem o modificador de acesso Public, atribui valores diretamente aos atributos do objeto $carro, sem métodos específicos para isso(setters);

$carro->modelo = "Gol";
$carro->cor = "vermelho";
$carro->ano = 1999;

//por terem o modificador de acesso Public, recupera e mostra os valores diretamente dos atributos do objeto $carro, sem métodos específicos para isso(getters);

echo $carro->modelo."<br>";
echo $carro->cor."<br>";
echo $carro->ano."<br>";

//--------------------- altera e recupera o valor dos atributos $categoria, $motor e $preco, que tem o modificador de acesso protected

$carro->setCategoria("Sedan");
echo $carro->getCategoria()."<br>";

$carro->setMotor("1.8");
echo $carro->getMotor()."<br>";

$carro->setPreco(60000);
echo $carro->getPreco()."<br>";

//--------------------- atribui e recupera os dados dos atributos $placa, $numPassageiros e $velMax, que estão com o modificador de acesso private, e só são acessíveis por seus
//--------------------- respectivos métodos getters e setters

$carro->setPlaca("xlr-8000");
echo $carro->getPlaca()."<br>";

$carro->setNumPassageiros(5);
echo $carro->getNumPassageiros()."<br>";

$carro->setVelMax(180);
echo $carro->getVelMax()."<br>";

//---------------------

$carro->Andar();
$carro->acessaParar();
$carro->acessaEstacionar();


echo "<br>";
var_dump($carro);

/* ------------------------------------------------- */

echo "<br><hr>";

$moto = new Moto();

$moto->modelo = "V-Max";
$moto->cor = "Preto";
$moto->ano = 2016;

//-------------------------

echo $moto->modelo."<br>";
echo $moto->cor."<br>";
echo $moto->ano."<br>";

//------------------------- 

$moto->setCategoria("Custom");
echo $moto->getCategoria()."<br>";

$moto->setMotor("800cc");
echo $moto->getMotor()."<br>";

$moto->setPreco(200000);
echo $moto->getPreco()."<br>";

//-----------------------------

$moto->setPlaca("gty-5736");
echo $moto->getPlaca()."<br>";

$moto->setNumPassageiros(2);
echo $moto->getNumPassageiros()."<br>";

$moto->setVelMax(180);
echo $moto->getVelMax()."<br>";

//---------------------

$moto->Andar();
$moto->acessaParar();
$moto->acessaEstacionar();

echo "<br>";
var_dump($moto);