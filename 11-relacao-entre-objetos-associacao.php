<?php

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente1 = new Cliente();
$cliente1->nome = "danillo";
$cliente1->endereco = "Av. Nsa. Sra. do Carmo";

$pedido = new Pedido();
$pedido->numero = 01;

//recebe no atributo $cliente da classe Pedido, o objeto $cliente1 da 
//classe Cliente 
$pedido->cliente = $cliente1;

$dados = array(
    'numero' => $pedido->numero,
    'nome' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco
);

var_dump($dados);