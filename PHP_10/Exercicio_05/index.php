<?php

$form = isset($_GET["celsius"]) && isset($_GET["tipo"]);
$c;
$resultado;

if($form){

    $c = floatval($_GET["celsius"]);
    switch($_GET["tipo"]){
        case "K": $resultado = calcKel($c) . " K"; break;
        case "F": $resultado = calcFar($c) . " F"; break;
        default: $resultado = "ERRO"; break;
    }

}

function calcFar($c){ return $c * 1.8 + 32;}
function calcKel($c){ return $c + 273.15;}

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

    <h1>Teste do SWITCH com FUNÇÕES</h1>

    <form action="">

        <input type="number" name="celsius" step="0.1" required="required" placeholder="Celsius">
        <br><br>
        <label>Converter para: </label>
        <br>
        <label for="tipo">F: </label>
        <input type="radio" value="F" name="tipo" required="required" checked>
        <br>    
        <label for="tipo">K: </label>
        <input type="radio" value="K" name="tipo" required="required">
        <br><br>
        <input type="submit" value="Calcular">
        
    </form>

    <?php if($form): ?>
    <br>
    <div>
        <?= $c; ?> C = <?= $resultado; ?>
    </div>
    <?php endif; ?>

</body>
</html>