<?php

require_once("importacoes.php");
verificarEstaLogado();

$resultados = selectSQL("SELECT id, nome, preco, quantidade FROM produtos");

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
    <div class="div-css">
        <?php require("components/nav.php") ?>
    </div>

    <main>

        <div class="div-css">
            <form action="" class="form-css">
                <h2 class="lista-h2">Apagar Produto</h2>

            </form>
            <?php $chaves = array_keys($resultados[0]); ?>
            <div class="table-div">
                <table>

                    <tr>
                    <?php foreach($chaves as $c): ?>
                        <th class="uppercase bold"><?= $c; ?></th>
                    <?php endforeach; ?>
                    <th>Ações</th>
                    </tr>

                    <?php foreach($resultados as $r): ?>

                    <tr>
                        <?php foreach($chaves as $c): ?>
                            <td class="bold"><?= $r[$c]; ?></td>
                        <?php endforeach; ?>
                            <td>
                                <form action="apagar.php" style="display: inline-block;">
                                    <button class="button-css" name="apagar" value="<?= $r["id"] ?>">APAGAR</button>
                                </form>
                            </td>
                    </tr>

                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </main>
    
    <?php require("components/footer.php"); ?>
    
</body>
</html>