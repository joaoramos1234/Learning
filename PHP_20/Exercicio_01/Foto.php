<?php 

class Foto{

    public $imagem;
    public  $titulo;
    public  $texto;
    public $id;

    function __construct($imagem, $titulo, $texto, $id){
        $this->imagem = $imagem;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->id = $id;
    }



}



?>