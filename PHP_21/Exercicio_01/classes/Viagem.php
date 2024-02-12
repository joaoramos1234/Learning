<?php 

class Viagem{

    public $imagem;
    public  $titulo;
    public  $texto;

    function __construct($imagem, $titulo, $texto){
        $this->imagem = $imagem;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

}

?>