<?php

require_once("importacoes.php");

$coluna = "";
$ordem = "";

$form = isset($_GET["coluna"]) && isset($_GET["ordem"]);

if($form){
    $coluna = $_GET["coluna"];
    $ordem = $_GET["ordem"];
    $resultados = selectSQL("SELECT * FROM produtos ORDER BY $coluna $ordem");
}
else{
    $resultados = selectSQL("SELECT * FROM produtos");
}

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

    <main class="caixa">

        <h2>Lista dos Produtos</h2>
        <br>
        <div>
            <form action="">
                <label for="coluna">Coluna: </label>
                <select name="coluna" id="coluna">
                    <option <?= ($coluna == "id") ? "selected" : ""; ?> value="id">ID</option>
                    <option <?= ($coluna == "nome") ? "selected" : ""; ?> value="nome">Nome</option>
                    <option <?= ($coluna == "preco") ? "selected" : ""; ?> value="preco">Preço</option>
                    <option <?= ($coluna == "quantidade") ? "selected" : ""; ?> value="quantidade">Quantidade</option>
                </select>
                <br><br>
                <div>
                    <label for="ordem">Ascendente: </label>
                    <input type="radio" name="ordem" value="ASC" <?= ($ordem == "ASC") ? "checked" : ""; ?>>
                    <br>
                    <label for="ordem">Descendente: </label>
                    <input type="radio" name="ordem" value="DESC" <?= ($ordem == "DESC") ? "checked" : ""; ?>>
                </div>
                <br>
                <input type="submit" value="Listar">
            </form>
        </div>
        <br>
        <?php require("componentes/tabela_auto.php"); ?>

    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>