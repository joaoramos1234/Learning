<?php

require_once("funcoes.php");

$form = isset($_GET["celsius"]) && (isset($_GET["far"]) || isset($_GET["kel"]));
$c = ($form) ? floatval($_GET["celsius"]) : NULL;
if($form){
    
    $c = floatval($_GET["celsius"]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    
    <h1>Conversor de Temperaturas com CheckBoxes</h1>
    <form action="">
        <label for="far">Celsius: </label>
        <input type="number" name="celsius" value="<?=(is_null($c)) ? "" : number_format($c, 1); ?>" step="0.1" required="required">
        <br><br>
        <h4>Escalas: </h4>
        <label for="far">F: </label>
        <input type="checkbox" name="far">
        <br>
        <label for="kel">K: </label>
        <input type="checkbox" name="kel">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if($form): ?>
        <hr>
        <?php if(isset($_GET["far"])): ?>
            <h3><?= number_format($c, 1)?> C = <?= number_format(calcFar($c), 1) ?> F</h3>
        <?php endif; ?>

        <?php if(isset($_GET["kel"])): ?>
            <h3><?= number_format($c, 1)?> C = <?= number_format(calcKel($c), 1) ?> K</h3>
        <?php endif; ?>

    <?php else: ?>
        <hr>
        <h3>Selecione alguma opção!</h3>
    <?php endif; ?>

</body>
</html>