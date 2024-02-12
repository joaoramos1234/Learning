<?php

require_once("config.php");
require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");
$chaves = array_keys($produtos[0]);

$form = isset($_GET['nome']) && isset($_GET['preco']) && isset($_GET['quantidade']);

if($form){
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $quantidade = $_GET['quantidade'];
    iduSQL("INSERT INTO produtos (produto, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')");
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
</head>

<body>

    <h1>Pingo Doce - Novo Produto</h1>
    <div>
        <form action="">
            <input type="text" name="nome" required="required" placeholder="Nome do produto...">
            <br>
            <input type="number" name="preco" min="0.01" step="0.01" required="required" placeholder="Preço do produto...">
            <br>
            <input type="number" name="quantidade" required="required" placeholder="Quantidade do produto...">
            <br>
            <input class="voltar" type="submit" value="Registar">
        </form>
    </div>
    <div class="div-css ">

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
    
</body>
</html>