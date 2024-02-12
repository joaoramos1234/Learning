<?php

require_once("config.php");
require_once("base_dados.php");


$pesquisa = "%%";

$form = isset($_GET["pesquisar"]);

if($form){
    $pesquisa = "%" . $_GET["pesquisar"] . "%";
    $produtos = selectSQL("SELECT * FROM produtos WHERE produto LIKE '$pesquisa'");
}

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
    
    <h1>Tabela Automática</h1>

    <form method="get">
        <br>
        <input type="text" name="pesquisar" placeholder="Produto a pesquisar...">
        <br>
        <input class="voltar" type="submit" value="Enviar">
        <a class="voltar" href="index.php">Voltar </a>
        <br>
    </form>

    <?php if($form) ?>
        <div class="div-css">

            <?php if(!empty($produtos)): ?>
                <?php $chaves = array_keys($produtos[0]);?>
            <table>

                <tr>
                    <?php foreach($chaves as $c): ?>
                        <th><?= $c; ?></th>
                    <?php endforeach; ?>
                </tr>

                <?php foreach($produtos as $p): ?>
                <tr>
                    <?php foreach($chaves as $c): ?>
                        <td><?= $p[$c]; ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>

            </table>

        </div>
    <?php endif; ?>

</body>
</html>