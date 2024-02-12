<?php

$form = isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["altura"]);

$pessoa = [];

if ($form) {
    $pessoa = [
        "nome" => $_GET["nome"],
        "idade" => $_GET["idade"],
        "altura" => $_GET["altura"]
    ];
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
    

    <h1>Array com Chaves</h1>    
    <div class="wrapper">
        <h2>Registo de Pessoa</h2>
        <form action="" method="get">
            <input type="text" name="nome" placeholder="Nome" required="required">
            <br>
            <input type="number" name="idade" placeholder="Idade" required="required">
            <br>
            <input type="number" step="0.01" name="altura" placeholder="Altura" required="required">
            <br>
            <input type="submit" value="Registar">
        </form>
    </div>
    <?php if($form): ?>
    <div class="wrapper">
        <h3>Nome: <?= $pessoa["nome"]; ?> </h3>
        <h3>Idade: <?= $pessoa["idade"]; ?></h3>
        <h3>Altura: <?= $pessoa["altura"]; ?></h3>
        <button><a href="index.php">Reset</a></button>
    </div>

    <div class="wrapper">
        <?php print_r($pessoa) ?>
    </div>
    <?php endif; ?>
    
    
</body>
</html>