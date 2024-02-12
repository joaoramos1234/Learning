<?php

require_once("importacoes.php");
verificarEstaLogado();

$form = isset($_GET["nome"]);

if($form){
    $nome = $_GET["nome"];
    $resultados = selectSQL("SELECT id, nome, preco, quantidade from produtos WHERE nome LIKE '%$nome%'");
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
    
    <div class="div-css">
        <?php require("components/nav.php") ?>
    </div>

<main>
    <div class="div-css">
        <form action="">
            <h2>Pesquisar</h2>
            <input type="text" name="nome" placeholder="Nome a pesquisar..." required="required" autofocus>
            <br><br>
            <input type="submit" value="Pesquisar">
            <br><br><br>
            <a class="button-css" href="pesquisar_nome.php">Reset</a>
        </form>
        <?php if(!empty($resultados)): ?>

            <?php $chaves = array_keys($resultados[0]); ?>
            <div class="table-div">
                <table>
                    <tr>
                    <?php foreach($chaves as $c): ?>
                        <th class="uppercase bold"><?= $c; ?></th>
                    <?php endforeach; ?>
                    </tr>

                    <?php foreach($resultados as $r): ?>
                    <tr>
                        <?php foreach($chaves as $c): ?>
                            <td class="bold"><?= $r[$c]; ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </table>
        <?php else: ?>
                <?php if($form): ?>
                    <br><br>
                    <h2 class="erro">Pesquisa não encontrou resultados, tente novamente.</h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php require("components/footer.php"); ?>

</body>
</html>