<?php 

require_once ("config.php");
require_once ("base_dados.php");

$produto = selectSQL("SELECT * FROM produtos ORDER BY preco ASC");


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

    <table>
        <tr>
            <th> ID </th>
            <th> Produto </th>
            <th> Preço </th>
            <th> Quantidade </th>
        </tr>
    <?php foreach($produto as $p): ?>

        <tr>
            <td><?= $p['id']; ?></td>
            <td><?= $p['produto']; ?></td>
            <td><?= number_format($p['preco'], 2); ?>€</td>
            <td><?= $p['quantidade']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    
    <hr>

    <pre>
    <?php foreach($produto as $p): ?>
    <?=   print_r($p); ?>
    <?php endforeach; ?>
    </pre>


</body>
</html>