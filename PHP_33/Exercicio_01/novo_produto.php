<?php

require_once("config.php");
require_once("base_dados.php");
require_once("helpers/login_helper.php");

$form = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form){
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    date_default_timezone_set("Europe/Lisbon");
    $data_criacao = date("h:i:s - d/m/Y");

    iduSQL("INSERT INTO produtos (nome, preco, quantidade, data_criacao) VALUES ('$nome', '$preco', '$quantidade', '$data_criacao')");
    header("Location: novo_produto.php");
    exit();
}

$resultados = selectSQL("SELECT * FROM produtos ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 132.1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php require("componentes/header.php"); ?>

    <main>

        <div class="caixa">
            <h2>Novo Produto</h2>
            <br>
            <form action="" autocomplete="off">
                <input type="text" name="nome" required placeholder="Nome" autofocus>
                <br><br>
                <input type="number" name="preco" step="0.01" min="0.01" required placeholder="Preço">
                <br><br>
                <input type="number" name="quantidade" min="0" required placeholder="Quantidade">
                <br><br>
                <input type="submit" value="Registar">
            </form>
        </div>

        <div class="caixa">
            <?php require("componentes/tabela_auto.php"); ?>
        </div>

    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>