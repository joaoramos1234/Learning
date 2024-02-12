<?php

require_once("importacoes.php");

verificarEstaLogado();
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
        <h2 class="uppercase">BEM-VINDO(a) <?= $_SESSION["usuario"]["nome"] ?>.</h2>
    </div>
</main>

<?php require("components/footer.php"); ?>
    
</body>
</html>