<?php


require_once("helpers/login_helper.php");

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

    <?php require("nav.php"); ?>
    <h3>Bem-vindo(a) <?= $_SESSION["usuario"]["nome"] ?></h3>
    <h1>Stock</h1>

    <div>
        <p>Nome: <?= $_SESSION["usuario"]["nome"]; ?></p>
        <p>Último Acesso: <?= $_SESSION["usuario"]["ultimo_acesso"]; ?></p>
    </div>
    
</body>
</html>