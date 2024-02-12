<?php

require_once("importacoes.php");

$resultados = selectSQL("SELECT * FROM produtos");

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 132.1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php require("componentes/header.php"); ?>

    

    <main class="caixa">

        <h2>Editar Produtos</h2>
        <br>
        <?php if(!empty($resultados)): ?>

            <?php $chaves = array_keys($resultados[0]); ?>

                <table>

                    <!-- Titulo das colunas -->
                    <tr>
                        <?php foreach($chaves as $c): ?>
                            <th><?= $c; ?></th>
                        <?php endforeach; ?>
                        <th>Ações</th>
                    </tr>

                    <!-- Elementos/Linhas -->
                    <?php foreach($resultados as $r): ?>

                        <tr>
                            <?php foreach($chaves as $c): ?>
                                <td><?= $r[$c]; ?></td>
                            <?php endforeach; ?>
                            <td>
                                <form action="delete.php" style="display: inline-block;">
                                    <button name="apagar" value="<?= $r["id"] ?>">X</button>
                                </form>
                                <form action="update.php" style="display: inline-block;">
                                    <button name="editar" value="<?= $r["id"] ?>">E</button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </table>

        <?php endif; ?>
        
    </main>

    <?php require("componentes/footer.php"); ?>
    
</body>
</html>