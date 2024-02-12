<?php

require_once("importacoes.php");

verificarEstaLogado();

$coluna = "";
$ordem = "";

$form = isset($_GET["coluna"]) && isset($_GET["ordem"]);

if ($form) {
    $coluna = $_GET["coluna"];
    $ordem = $_GET["ordem"];
    $resultados = selectSQL("SELECT id, nome, preco, quantidade FROM produtos ORDER BY $coluna $ordem");
} else {
    $resultados = selectSQL("SELECT id, nome, preco, quantidade FROM produtos");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="div-css">
    <?php require("components/nav.php") ?>
</div>

<main>
    <div class="div-css">
        <form class="form-css" action="">
            <h2 class="lista-h2">ORDEM DA LISTA</h2>
            <br>
            <label for="coluna">Coluna:</label>
            <select name="coluna" id="coluna">
                <option <?= ($coluna == "id") ? "selected" : ""; ?> value="id">ID</option>
                <option <?= ($coluna == "nome") ? "selected" : ""; ?> value="nome">Nome</option>
                <option <?= ($coluna == "preco") ? "selected" : ""; ?> value="preco">Preço</option>
                <option <?= ($coluna == "quantidade") ? "selected" : ""; ?> value="quantidade">Quantidade</option>
            </select>
            <br><br><br>
            <div class="ordem-selecionada">
                <label for="ascRadio">Ascendente:</label>
                <input type="radio" name="ordem" id="ascRadio" value="ASC" checked>
                <br><br>
                <label for="descRadio">Descendente:</label>
                <input type="radio" name="ordem" id="descRadio" value="DESC">
            </div>
            <br><br>
            <input type="submit" value="Listar">
        </form>

        <?php require("components/table_automatica.php");?>
    </div>
</main>

<?php require("components/footer.php"); ?>
    
</body>
</html>