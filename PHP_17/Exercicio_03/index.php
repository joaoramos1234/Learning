<?php

$form = isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["altura"]);

if ($form) {
    $pessoa = [
        [
        "nome" => "Carlos",
        "idade" => 26,
        "altura" => 1.79,
        "genero" => "masculino"
        ],
        [
        "nome" => "Pedro",
        "idade" => 22,
        "altura" => 1.70,
        "genero" => "masculino"
        ],
        [
        "nome" => "Maria",
        "idade" => 19,
        "altura" => 1.65,
        "genero" => "feminino"
        ],
        
        [
        "nome" => $_GET["nome"],
        "idade" => $_GET["idade"],
        "altura" => $_GET["altura"],
        "genero" => $_GET["genero"]
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
<body>
    
    <h1>Array com Chaves</h1>  
    <?php if(!$form): ?>
    <div class="wrapper">
        <h2>Registo de Pessoa</h2>
        <form action="" method="get">
            <input type="text" name="nome" placeholder="Nome" required="required">
            <br>
            <input type="number" name="idade" placeholder="Idade" required="required">
            <br>
            <input type="number" step="0.01" name="altura" placeholder="Altura" required="required">
            <br>
            <h4>Género</h4>
            <select name="genero">
                Género
                <option value="masculino">Masculino</option>
                <option value="feminino">feminino</option>
            </select>
            <br>
            <input type="submit" value="Registar">
        </form>
    </div>
    <br><br>
    <?php else: ?>
    <div class="wrapper">
    <table>
            <thead>
                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                    <th>Gênero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoa as $chave => $p): ?>
                <tr>
                    <td><?= $chave+1; ?></td>
                    <td><?= $p["nome"]; ?></td>
                    <td><?= $p["idade"] . " anos"; ?></td>
                    <td><?= number_format($p["altura"], 2) . " m"; ?></td>
                    <td><?= $p["genero"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <button class="button"><a href="index.php">Reset</a></button>
    </div>
    <br><br>
    <div class="wrapper">
        <pre><?php print_r($pessoa) ?></pre>
    </div>
    <?php endif; ?>
    
</body>
</html>