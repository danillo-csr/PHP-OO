<?php

class Pessoa {

    //declara uma constante
    const nome = "Danillo";

    public function exibirNome(){
        //exibe o valor da constante nome
        echo self::nome;
    }
}

$pessoa = new Pessoa();

$pessoa->exibirNome();

class Danillo extends Pessoa{
    const nome = " cesar da Conceição";

    public function exibirNome(){
        //exibe o valor da propria (self) constante nome;
        echo self::nome;

        //exibe o valor da constante nome da classe pai (parent);
        echo parent::nome;
    }
}

$danillo = new Danillo();

$danillo->exibirNome();