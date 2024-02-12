<?php

require_once("importacoes.php");

verificarEstaLogado();


$form = isset($_GET["apagar"]);


if($form){
    $id = $_GET["apagar"];
    $produto_selecionado = selectSQLUnico("SELECT * FROM produtos WHERE id='$id'");
    if ($produto_selecionado !== false) {
        iduSQL("DELETE FROM produtos WHERE id='$id'");
    } else {
        header("Location: apagar_produto.php");
        exit();
    }
    
}else{
    header("Location: apagar_produto.php");
    exit();
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
        <h3 class="lista-h2">PRODUTO <?= $produto_selecionado["nome"] ?>(<?= $id ?>) apagado com sucesso!</h3>
       <a href="apagar_produto.php"><button class="button-css">VOLTAR</button></a>
    </div>

</main>

<?php require("components/footer.php"); ?>

</body>
</html>