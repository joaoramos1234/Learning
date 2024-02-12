<?php

require_once("config.php");
require_once("base_dados.php");

$form = isset($_GET["nome"]) && isset($_GET["login"]) && isset($_GET["senha"]);

if($form){

    $nome = $_GET["nome"];
    $login = $_GET["login"];
    $senha = $_GET["senha"];

    $senha = password_hash($_GET["senha"], PASSWORD_DEFAULT);
    iduSQL("INSERT INTO colaboradores (nome, login, senha) VALUE ('$nome', '$login','$senha')");
    header("Location: index.php");
    exit();
}else{
    header("Location: index.php");
    exit();
}


?>