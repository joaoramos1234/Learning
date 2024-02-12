<?php

$numero_meses = $_GET["numero_meses"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    
    <h1>Meio</h1>

    <div class="wrapper">
        <form action="fim.php" method="get">
            <?php for($i = 1; $i <= $numero_meses; $i++): ?>
                <br><br>
                <label for="valor[]">Recibo <?=$i?></label>
                <br>
                <input type="number" step="0.01" name="valor[]" required="required">
                <input type="date" name="data[]" required="required">
            <?php endfor; ?>
            <br><br>
            <input type="submit" value="Registar">
        </form>

    </div>
    
    
    
</body>
</html>