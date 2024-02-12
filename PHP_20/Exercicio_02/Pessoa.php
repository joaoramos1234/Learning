<?php

class Pessoa{

    public $nome;
    public $idade;
    public $morada;
    private $saldo;

    function __construct($nome, $idade, $morada){

        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> morada = $morada;
        $this -> saldo = 100.00;

    }

    function exibirFicha(){
        echo $this->nome . " - (" . $this->idade . ") [" . $this->morada . "]<br>";
        echo "{Saldo: " . number_format($this->saldo, 2) . "}<br>";
    }

    function getSaldo(){
        return $this->saldo;
    }
}


?>