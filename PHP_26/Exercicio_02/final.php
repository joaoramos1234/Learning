<?php

require_once("config.php");
require_once ("base_dados.php");

$produtos = selectSQL("SELECT id, produto FROM produtos");

$colunas = array_keys($produtos[0]);


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
    <div class="div-css">
        <table>
            <tr>
                <?php foreach($colunas as $c): ?>
                    <th><?= $c; ?></th>
                <?php endforeach; ?>
            </tr>
        <?php foreach($produtos as $p): ?>
            <tr>
            <?php foreach($colunas as $c): ?>
                <td><?= $p[$c]; ?></td>
        <?php endforeach; ?>
            <?= $p['id']; ?>
            <?= $p['produto']; ?>
            <?= $p['preco']; ?>
            <?= $p['quantidade']; ?>

            </tr>
        <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>