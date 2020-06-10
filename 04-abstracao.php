<?php

//classe abstrata, que serve apenas de modelo para as classes que a estendem
abstract class Banco {
    
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }
//métodos abstratos, não contém corpo e são implementados apenas nas classes herdeiras
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    //implementa o método Sacar();
    public function Sacar($s){
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }
    //implementa o método Depositar();
    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

$itau = new Itau();

$itau->setSaldo(5000);
echo "Saldo:".$itau->getSaldo()."<br>";

$itau->Sacar(450);
$itau->Depositar(800);

echo "<hr>Saldo: ".$itau->getSaldo();

