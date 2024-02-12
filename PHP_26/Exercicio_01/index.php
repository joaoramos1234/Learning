<?php 



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
    <form method="get" action="final.php">
        <h3>Procurar por faixa de preço</h3>
        <input class="input-css" type="number" name="minimo" placeholder="Valor Mínimo..." required="required">
        <br>
        <input class="input-css" type="number" name="maximo" placeholder="Valor Máximo..." required="required">
        <br>
        <select name="select">
            <option value="ASC">Ascendente</option>
            <option value="DESC">Descendente</option>
        </select>
        <br>
        <input class="voltar" type="submit" value="Enviar">
        <br>
    </form>
    
    

</body>
</html>