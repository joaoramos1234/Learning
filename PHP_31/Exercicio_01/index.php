<?php

require_once("config.php");
require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");
$chaves = array_keys($produtos[0]);

require_once("./components/pagina.php");

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

    <h1>Exemplo de paginação</h1>
    
    <h2>Página Actual (<?= $pagina_atual ?> / <?= $total_de_paginas ?>)</h2>
    <br>
    <?php require_once("./components/Table.php"); ?>

    <?php require_once("./components/Page.php"); ?>

</body>
</html>