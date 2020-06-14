<?php

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;

    }
}

class Carrinho{
    public $produtos;

    //passa como parametro para a função adicionaProdutos(), uma instancia
    //da classe Produtos, ou seja, uma agregação, em que uma classe depende
    //da outra
    public function adicionaProdutos(Produtos $produtos){
        //adiciona o objeto $produtos ao array produtos[]
        $this->produtos[] = $produtos;
    }

    public function exibeProdutos(){
        
        //percorre o array $produtos[] e parar cada posição do array, ele
        //adiciona o objeto que desta posição na variável $inf
        foreach($this->produtos as $inf){
            
            //para cada objeto do array, são mostrados os seus atributos
            echo $inf->nome."<br>";
            echo $inf->valor."<br>";
        }
    }
}

//instancia a classe Produtos e cria o objeto $produtos
//e passa os parametros diretamente pelo instanciamento
$produto1 = new Produtos("Guitarra Telecaster Condor CT-10", 1300);
//a linha acima é equivalente as linhas de baixo
//$produto1->nome = "Guitarra Telecaster Condor CT-10";
//$produto1->valor = 1300;

//instancia a classe Carrinho e cria o objeto $carrinho
$carrinho = new Carrinho();

//através do objeto $carrinho, acessa o método adicionaProdutos da classe Carrinho
//e passa como parametro o objeto $produto1
$carrinho->adicionaProdutos($produto1);

//acessa o método exibeProdutos() para mostrar o valor de cada atributo de cada
//objeto presente no array $produtos
$carrinho->exibeProdutos();
