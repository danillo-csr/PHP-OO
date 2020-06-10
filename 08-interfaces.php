<?php

/*
    Uma interface define um modelo a ser seguido
    pelas classes que a implementam.
 */
interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}
/*
    A classe noticias esta implementando a interface Crud
    e sendo assim, deve seguir seus padrões.
*/
class Noticias implements Crud (){
    
    public function create(){
        //logica para criar uma noticia
    }
    public function read(){
        //logica para ler uma noticia
    }
    public function update(){
        //logica para atualizar uma noticia
    }
    public function delete(){
        //logica para deletar uma noticia
    }
}