<?php 

class User{

    private $nome;
    private  $senha;
    private  $idade;
    private $altura;
    
    private $peso;

    function __construct($nome, $senha, $idade, $altura, $peso){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }
}

?>