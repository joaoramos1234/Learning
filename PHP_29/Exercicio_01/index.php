<?php

require_once("config.php");
require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");
$chaves = array_keys($produtos[0]);
$form = isset($_GET['apagar']);
if($form){
    $id = $_GET['apagar'];
    iduSQL("DELETE FROM produtos WHERE id = $id");
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

    <h1>Pingo Doce - Delete</h1>
    
    

    <div class="div-css ">

        <table>

            <tr>
                <?php foreach($chaves as $c): ?>
                    <th><?= $c; ?></th>
                <?php endforeach; ?>
                    <th>Ações</th>
            </tr>

            <?php foreach($produtos as $p): ?>
            <tr>
                <?php foreach($chaves as $c): ?>
                    <td><?= $p[$c]; ?></td>
                <?php endforeach; ?>
                <td>
                    <form class="form-none" action="">
                        <input type="hidden" name="apagar" value="<?= $p["id"]; ?>">
                        <button type="submit" class="voltar">APAGAR</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>

        </table>

    </div>
    
</body>
</html>