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
        echo "<tr>";
        echo "<td><img src='$this->imagem'class='icone'></td>";
        echo "<td>$this->titulo</td>";
        echo "<td>$this->texto</td>";
        echo "</tr>";
    }

}

?>