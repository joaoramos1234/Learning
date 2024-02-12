<?php

require_once ("config.php");
require_once ("base_dados.php");

$id_inserido = 0;

$form = isset($_GET['procurar']);

if($form){
    $id_inserido = isset($_GET['procurar']) ? $_GET['procurar'] : 0;
}else{
    header("Location: index.php");
    exit;
}

$p = selectSQLUnico("SELECT * FROM produtos WHERE id = $id_inserido");


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

<?php if($p): ?>
    <?php if($form): ?>
    <h1>Papelaria 2</h1>
    <div class="div-css">
        <h2>Produto</h2>
        <h2>Código: <?= $p['id'] ?></h2>
        <h2>Name: <?= $p['produto'] ?></h2>
        <br>
        <table>
            <tr>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
            <tr>
                <td><?= $p['preco'] ?> €</td>
                <td><?= $p['quantidade'] ?></td>
            </tr>
        </table>
    </div>
    <div class="div-css">
        <h2>Print_r do produto</h2>
        <br>
        <?php print_r($p) ?>
    </div>
    <a class="voltar" href="index.php">Nova Pesquisa</a>
    <?php endif; ?>
<?php else: ?>
    <h1>Papelaria 2</h1>
    <div class="div-css">
        <p>Produto não encontrado... (id: <?= $id_inserido ?>)</p>
        <br><br>
    </div>
    <a class="voltar" href="index.php">Nova Pesquisa</a>	
<?php endif; ?>
    
</body>
</html>