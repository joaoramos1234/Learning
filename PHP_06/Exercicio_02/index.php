<?php 

$peso = "";
$preco_unidade = "";

if(isset($_GET["peso"]) && isset($_GET["preco_unidade"])){
    $peso = $_GET["peso"];
    $preco_unidade = $_GET["preco_unidade"];
    $preco_total = round($peso * $preco_unidade, 3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 100.02</title>
</head>
<body>

    <h1>TALHO</h1>
    <div id="div_img">
        <span class="span_css" id="peso"><?= $peso ?></span>
        <span class="span_css" id="preco_unidade"><?= $preco_unidade ?></span>
        <?php if ($peso && $preco_unidade): ?>
            <span class="span_css" id="preco_total"><?= $preco_total ?></span>
        <?php endif; ?>
    </div>
    <div id="div_form_css">
        <form>
            <input type="number" step="0.001" name="peso" id="form_css1" 
            placeholder="PESO TOTAL" value=<?= $peso ?>>
            <input type="number" step="0.01" name="preco_unidade" id="form_css1" placeholder="PREÇO/KG" 
            value=<?= $preco_unidade ?>>
            <input type="submit" value="CALCULAR">
        </form>
    </div>

</body>
</html>