<?php

$form = isset($_GET["total"]);

if($form){

    $total = $_GET['total'];

}else{
    header("Location: index.php");
    exit();
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
    
    <h1>Movimentações</h1>
    <form action="saida.php" method="get">
        <?php for($i = 1; $i <= $total; $i++): ?>
        <input type="number" name="movimentacoes[]" step="0.01" min="1" placeholder="Movimentação <?= $i;?>"  required="required">
        <br><br>
        <?php endfor; ?>
        <input type="submit" value="Registar">
        
    </form>
   
</body>
</html>