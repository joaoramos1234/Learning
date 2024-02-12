<?php

require_once("config.php");
require_once ("base_dados.php");

$minimo = 0;
$maximo = 0;
$direcao = "ASC";

$form = isset($_GET["minimo"] ) && isset($_GET["maximo"]) && isset($_GET["select"]);

if($form){
    $minimo = $_GET["minimo"];
    $maximo = $_GET["maximo"]; 
    $direcao = $_GET["select"];
} else{
    header("Location: index.php");
    exit;
}

$produto = selectSQL("SELECT * FROM produtos WHERE preco BETWEEN $minimo AND $maximo ORDER BY preco $direcao");

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
    
    <h1>Papelaria 4</h1>
    <div class="div-css">
        <h3>Procurar por faixa de preço entre <?= number_format($minimo, 2) ?>€ e <?= number_format($maximo, 2) ?>€</h3>
        <?php foreach($produto as $p): ?>
            <ul>
                <li><?=$p['produto'] ?> - <?= number_format($p['preco'], 2) ?>€</li>
            </ul>
        <?php endforeach; ?>
    </div>
    <a class="voltar" href="index.php">Voltar</a>
    
</body>
</html>