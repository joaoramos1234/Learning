<?php

$form2 = isset($_GET["produto"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form2){
    $produto = $_GET["produto"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    iduSQL("UPDATE produtos SET produto='" . $_GET["produto"] . "', preco='" . $_GET["preco"] . "', quantidade='" . $_GET["quantidade"] . "' WHERE id = " . $_GET["editar"] . ";");

    
    header("Location: index.php");
    exit();
}

?>