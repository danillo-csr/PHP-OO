<?php

//cria uma classe
class Pessoa{
    //atributos da classe Pessoa
    public $nome;
    public $idade;

    //método de uma classe
    public function Falar(){
        echo $this->nome." tem ". $this->idade." anos de idade, acabou de FALAR";
    }

}
//cria uma instancia da classe Pessoa
//nesse caso $danillo é um objeto do tipo Pessoa
$danillo = new Pessoa();

//Sendo $danillo um objeto da classe Pessoa, ele pode
//executar os métodos dessa classe
//executa o método da classe Pessoa Falar()
$danillo->Falar();
echo "<hr>";

//insere valores nos atributos $nome e $idade, do objeto $danillo
$danillo->nome = "danillo cesar da conceição";
$danillo->idade = 27;

var_dump($danillo);

echo "<hr>";

//mostra os valores dos atributos do objeto $danillo
echo $danillo->nome." tem ". $danillo->idade." anos de idade";

echo "<hr>";

$danillo->Falar();
