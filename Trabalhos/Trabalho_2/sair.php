<?php

require_once("importacoes.php");
verificarEstaLogado();

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
    
    <main>
        <div class="div-css">
            <h2>DESEJA SAIR?</h2>
            <a href="logout.php"><button class="button-css">SAIR</button></a>
        </div>

    </main>

    <?php require("components/footer.php"); ?>

</body>
</html>