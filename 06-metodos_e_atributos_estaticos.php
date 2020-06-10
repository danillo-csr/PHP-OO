<?php

class Login{
    /*
        Com o comando static cria um atributo estático.
        Um atributo estático pode ser acessado diretamente na classe,
        sem que seja necessário instanciar a classe.
    */
    public static $user;

    /*
        Cria um método estático.
        Métodos estáticos podem ser utilizados sem instanciar uma classe.
    */
    public static function verificaLogin(){

        /*
            no contexto estático, se usa a expressão "self::" para referenciar uma variável,
            e não o "this->"
        */
        echo "O usuário ".self::$user." está logado!";
    }
    
    //
    public function sairSistema(){
        echo "<br> saiu do sistema!";
    }
}

/*  Sendo um atributo estático, o atributo é acessível diretamente na classe
    sem haver a necessidade de instanciar a classe.
*/
Login::$user = "admin";

/*  Utiliza o método sem instanciar um objeto para a classe Login
    ou seja, utiliza o método diretamente da classe Login.
*/
Login::verificaLogin();

echo "<br>".Login::$user;

/*
    Uma classe pode ter atributos/métodos estáticos e não estáticos.
    porém, cada um é acessado da sua maneira.
*/
$login = new Login();
$login->sairSistema();