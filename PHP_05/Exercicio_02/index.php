<?php

    $encontrado = false;
    $raio = 0;
    $circunferencia = 0;
    
    if(isset($_GET["raio"])){
        $raio = round($_GET["raio"], 2);
        $circunferencia = round(2 * M_PI * $raio, 2);
        $encontrado = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 99.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h2>CÁLCULO DO COMPRIMENTO DA CIRCUNFERÊNCIA</h2>
        <div class="div_css">
            
            <form action="" id="form">
                <input type="text" name="raio" placeholder="RAIO">
                <br><br>
                <input type="submit" value="Calcular!" id="input_css">
            </form>
            <br><br>
            <a href="index.php">
                <button>Reset!</button>
            </a>
        </div>
        <?php if($encontrado): ?>
            <div class="div_css" id="div2">

                <p id="raio_css"><?=$raio?></p>
                <p id="circ_css"><?=$circunferencia?></p>
                
            </div>
        <?php endif; ?>
        
    </main>

</body>
</html>