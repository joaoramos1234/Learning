<?php

class Carousel{

    public $img;
    public $titulo;
    public $texto;
    
    public $preco;
    public $stock;

    function __construct($img, $titulo, $texto, $preco, $stock){

        $this->img = $img;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->preco = $preco;
        $this->stock = $stock;

    }

}

?>