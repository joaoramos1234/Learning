<?php
require_once("funcoes.php");

$form = isset($_GET["euro"]) && isset($_GET["currency"]);
$e;
$result;

if ($form) {
    $e = floatval($_GET["euro"]);
    switch($_GET["currency"]) {
        case "dolar":
            $result = number_format(calcDolar($e), 2) . " dolares";
            break;
        case "libra":
            $result = number_format(calcLibra($e), 2) . " libras";
            break;
        case "real":
            $result = number_format(calcReal($e), 2) . " reais";
            break;
        case "iene":
            $result = number_format(calcIene($e), 0 ) . " ienes";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>CONVERSOR MONETÁRIO</h1>
    <br>
    <div class="div1_wrapper">
        <h4>VALOR EM EUROS</h4>
        <form action="">
            <input type="number" name="euro" value="<?php echo isset($_GET["euro"]) ? $_GET["euro"] : ""; ?>" step="0.01" id="euro_css" min="1" required="required">
            <br>
            <h4 id="sub_text">CONVERTER PARA </h4>
            <br>
            <div class="currency_css">
                <label for="dolar" class="currency2_css">DÓLAR</label>
                <input type="radio" name="currency" value="dolar" class="currency_radio_css" >
            </div>
            
            <div class="currency_css">
                <label for="libra" class="currency2_css">LIBRAS</label>
                <input type="radio" name="currency" value="libra" class="currency_radio_css">
            </div>
            
            <div class="currency_css">
                <label for="real" class="currency2_css">REAIS</label>
                <input type="radio" name="currency" value="real" class="currency_radio_css">
            </div>
            
            <div class="currency_css">
                <label for="iene" class="currency2_css">IENE</label>
                <input type="radio" name="currency" value="iene" class="currency_radio_css">
            </div>
            
            <br><br>
            <input type="submit" value="CALCULAR!" id="submit_css">
        </form>
    </div>
    
    <?php if($form && $result !== ""): ?>
        <div class="div2_wrapper">
            <h4><?= number_format($_GET["euro"], 2) ; ?>€  = <?= $result ; ?></h4>
        </div>
    <?php endif; ?>
    
</body>
</html>
