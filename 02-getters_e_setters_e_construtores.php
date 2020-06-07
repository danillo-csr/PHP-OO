<?php

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){

        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
        
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){

        //FUNÇÃO PARA LIMPAR O EMAIL DE CARACTERES INDESEJADOS E/OU INCORRETOS NO EMAIL
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }



    public function Logar(){
        if($this->email == "danillocesar_06@hotmail.com"
            and $this->senha == 123456){
                echo "logado com sucesso!";
            }
            else{
                echo "dados inseridos inválidos! tente novamente.";
            }
        }
    }

$logar = new Login("danillocesar.06@gmail.com", 987654, "danillo");

//$logar->setEmail("danillocesar_06@hot098098#$%mail.com");
//$logar->setSenha(123456);

$logar->Logar();

echo "<hr>";

echo "Seu email é:.. ".$logar->getEmail()." e sua senha é:.. ".$logar->getSenha();