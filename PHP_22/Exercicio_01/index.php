<?php

$pdo = new PDO("mysql:dbname=pingo_doce;host=localhost", "root", "" );

$query = $pdo->query("SELECT * FROM produtos");

$produtos = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->query("SELECT * FROM colaboradores");

$colaboradores = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Base de dados</h1>

    <?php foreach($produtos as $p): ?>

        <p>
           <?= $p['id']; ?> -  <?= $p ['produto']; ?> - <?= $p ['preco']; ?>€ - <?= $p ['quantidade']; ?>
        </p>
    
    <?php endforeach; ?>
        <hr>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Nif</th>
                <th>Morada</th>
            </tr>
        <?php foreach($colaboradores as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['nome'] ?></td>
                <td><?= $c['apelido'] ?></td>
                <td><?= $c['nif'] ?></td>
                <td><?= $c['morada'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>

    
</body>
</html>