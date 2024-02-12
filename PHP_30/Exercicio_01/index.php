<?php

require_once("config.php");
require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");
$chaves = array_keys($produtos[0]);

require_once("pagina.php");

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

    <h1>Pingo Doce - Update</h1>
    
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
                    <form class="form-none" action="editar.php">
                        <input type="hidden" name="editar" value="<?= $p["id"]; ?>">
                        <button type="submit" class="voltar">Editar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

        </table>

    </div>

    <form class="form-2" action="">
       <?php if($pagina_atual > 1): ?>
            <button name="pagina" value="<?= $pagina_atual - 1 ?>"> << </button>
        <?php endif; ?>

        <?php for($i = 1; $i <= $total_de_paginas; $i++): ?>
            <button name="pagina" value="<?= $i?>" class="<?= $i == $pagina_atual ? "active" : "" ?>"> <?=$i?> </button>
        <?php endfor; ?>

        <?php if($pagina_atual < $total_de_paginas): ?>
            <button name="pagina" value="<?= $pagina_atual + 1 ?>"> >> </button>
        <?php endif;?>
    </form>

</body>
</html>