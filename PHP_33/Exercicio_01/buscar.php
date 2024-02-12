<?php

require_once("importacoes.php");

$form = isset($_GET["busca"]);

if($form){
    $busca = $_GET["busca"];
    $resultados = selectSQL("SELECT * FROM produtos WHERE nome LIKE '%$busca%'");
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

    <main>

        <div class="caixa">
            <form action="">
                <input type="text" name="busca" required placeholder="Busca" autofocus>
                <input type="submit" value="Buscar">
            </form>
        </div>
        
        <?php if($form): ?>

            <div class="caixa">
                <h3>Buscar relacionadas a (<?= $busca ?>)</h3>
                <br><br>
                <?php require("componentes/tabela_auto.php"); ?>
            </div>

        <?php endif; ?>

    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>