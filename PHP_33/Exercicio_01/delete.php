<?php

require_once("importacoes.php");

$form = isset($_GET["apagar"]);
$form_2 = isset($_GET["resposta"]);

if($form){
    $id = $_GET["apagar"];
    if($form_2){
        iduSQL("DELETE FROM produtos WHERE id='$id'");
        header("Location: editar.php");
        exit();
    }
}
else{
    header("Location: editar.php");
    exit();
}

$produto = selectSQLUnico("SELECT nome FROM produtos WHERE id='$id'");

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

        <h2>Editar Produtos</h2>
        <br>
        <h3>
            Tem certeza que desejas apagar o produto (<?= $produto["nome"]; ?>)?
        </h3>
        <br>
        <form action="">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <button name="resposta" value="sim">SIM</button>
            <a href="editar.php">
                <button type="button">Não</button>
            </a>
        </form>
        
    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>