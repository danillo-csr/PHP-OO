<?php 

class Newsletter {

    //função para validar email
    public  function cadastroEmail($email){

        //utiliza um filtro de validação do tipo email para validar
        //o valor da variável $email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            //lança uma nova exceção e mostra uma mensagem de erro,
            //para o caso de haver algum erro na validação do email
            throw new Exception("Este email é inválido!", 1);

        }//caso não haja nenhum problema de validação, mostra a mensagem
         // indicando que o email foi cadastrado com sucesso
         else{
            echo "Email cadastrado com sucesso!";
        }

    }
}

$newsletter = new Newsletter();

try{
$newsletter->cadastroEmail("danillocesar_06@@hotmail.com");   
}/*captura todas as possíveis exceções ao se executar
   o método acima
*/ catch(Exception $e){
    
    //o objeto $e possui informações relacionadas a exceção capturada
    // entre elas, a mensagem de erro, que é mostrada abaixo
    echo $e->getMessage()."<br>";

    //entre outras propriedades das exceções capturadas estão as:
        //---(code, file, line)

    //mostrao código do erro capturado
    echo "Código do erro: ".$e->getCode()."<br>";
    
    //mostra a linha em que ocorre o erro
    echo "Linha em que ocorre o erro: ".$e->getLine()."<br>";

    //mostra o caminho do arquivo em que ocorre o erro
    echo "Código do erro: ".$e->getFile()."<br>";
}