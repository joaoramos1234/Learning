<?php

class Banner{

    public $imagem;
    public $titulo;
    public $texto;


    function __construct($imagem, $titulo, $texto){

        $this->imagem = $imagem;
        $this->titulo = $titulo;
        $this ->texto = $texto;


    }

    function exibirFicha(){
        echo "<img src='$this->imagem'class='icone'>";
        echo $this->titulo;
        echo $this->texto;
    }

}

?>