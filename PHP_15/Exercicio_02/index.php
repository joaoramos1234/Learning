<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    
    <h1>Entrada</h1>
    <label for="total">Total de movimentações bancárias</label>
    <form action="movimentacoes.php" method="get">
        <br>
        <input type="number" name="total" placeholder="Número de movimentações..." required="required">
        <br><br>
        <input type="submit" value="Registar">
    </form>
   
</body>
</html>