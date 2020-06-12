<?php

class Pessoa{
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 27;
/*
    cria uma referencia do objeto $pessoa no objeto Spessoa2
    então o objeto $pessoa2 é apenas uma referencia de $pessoa
*/
$pessoa2 = $pessoa;
/*
    o atributo $idade, do objeto $pessoa2 recebe o valor 30
    ou seja, como é uma referencia do objeto $pessoa, na verdade
    é o atributo $idade do objeto $pessoa que esta recebendo o valor 30
*/
$pessoa2->idade = 30;
/*
    mostra o valor contido no atributo $idade, do objeto $pessoa
    ou seja, mostra o valor 30, que foi inserido na sua referencia $pessoa2
*/
echo $pessoa->idade;
echo "<br>";
/*
    cria de fato um clone, uma cópia do objeto $pessoa
    que não possui nenhuma dependencia
*/
$pessoa3 = clone $pessoa;

//atribui o valor 40 ao atributo $idade do objeto $pessoa
$pessoa->idade = 40;

//atribui o valor 56 ao atributo $idade do objeto $pessoa3
$pessoa3->idade = 56;
/*
    mostra o valor contido no atributo $idade, do objeto $pessoa
    no caso, 40
*/
echo $pessoa->idade;
echo "<br>";
/*
    mostra o valor contido no atributo $idade, do objeto $pessoa3
    no caso, 56
*/
echo $pessoa3->idade;
echo "<br>";
/*
    mostra novamente o valor contido no atributo $idade, do objeto $pessoa
    que permanece sendo 40, ou seja, não foi alterado pela alteração no
    objeto $pessoa3
*/
echo $pessoa->idade;
echo "<br>";