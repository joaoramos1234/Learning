<?php

require_once("importacoes.php");

$form = isset($_GET["editar"]);
$form_2 = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form){
    $id = $_GET["editar"];
    $produto = selectSQLUnico("SELECT * FROM produtos WHERE id='$id'");
    if($form_2){
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $quantidade = $_GET["quantidade"];
        
        date_default_timezone_set("Europe/Lisbon");
        $data_edicao = date("h:i:s - d/m/Y");

        iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade', data_edicao='$data_edicao' WHERE id='$id'");
        header("Location: editar.php");
        exit();
    }
}
else{
    header("Location: editar.php");
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
            <h2>Editar Produto</h2>
            <br>
            <form action="" autocomplete="off">
                <input type="hidden" name="editar" value="<?= $id; ?>">
                <input type="text" name="nome" required placeholder="Nome" autofocus value="<?= $produto["nome"]; ?>">
                <br><br>
                <input type="number" name="preco" step="0.01" min="0.01" required placeholder="Preço" value="<?= number_format($produto["preco"], 2); ?>">
                <br><br>
                <input type="number" name="quantidade" min="0" required placeholder="Quantidade" value="<?= $produto["quantidade"]; ?>">
                <br><br>
                <input type="submit" value="Editar">
            </form>
        </div>

    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>