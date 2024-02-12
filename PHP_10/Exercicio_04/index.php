<?php

$form = isset($_GET["celsius"]);


function calcularFahrenheit($c){

    return $c * 1.8 + 32;

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

    <h1>Calcular Fahrenheit</h1>
    <form action="">
        <label for="Celsius">Celsius: </label>
        <input type="number" name="celsius" step="0.1" min="0" required="required">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <br><br>

    <?php if($form): ?>
    <div>
        <h3>Resultado em Fahrenheit: <?= calcularFahrenheit($_GET["celsius"]); ?></h3>
    </div>
    <?php endif; ?>
    
    
</body>
</html>