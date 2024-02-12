<?php
require_once("importacoes.php");
verificarEstaLogado();

$form = isset($_GET["vender"]);
$form2 = isset($_GET["nova_quantidade"]);

if ($form) {
    $id = $_GET["vender"];
    $produto_selecionado = selectSQLUnico("SELECT id, nome, preco, quantidade FROM produtos WHERE id='$id'");

    if ($form2) {
        $quantidade_antiga = $produto_selecionado["quantidade"];
        $nova_quantidade = $quantidade_antiga - $_GET["nova_quantidade"];


        if($nova_quantidade > 0 && $nova_quantidade <= $quantidade_antiga){
        iduSQL("UPDATE produtos SET quantidade='$nova_quantidade' WHERE id='$id'");

        header("Location: registar_venda.php");
        exit();
        }else{
            header("Location: erro.php");
            exit();
        }
    }
} else {
    header("Location: registar_venda.php");
    exit();
}

$resultados = [$produto_selecionado];
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
        <?php if (!empty($resultados)): ?>
        <?php $chaves = array_keys($resultados[0]); ?>
        <div class="div-css">
            <table>
                <tr>
                <?php foreach($chaves as $c): ?>
                    <th class="uppercase bold"><?= $c; ?></th>
                <?php endforeach; ?>
                <th>ACÇÕES</th>
                </tr>

                <?php foreach($resultados as $r): ?>
                <tr>
                    <?php foreach($chaves as $c): ?>
                        <td class="bold"><?= $r[$c]; ?></td>
                    <?php endforeach; ?>
                    <td class="vender-input">
                        <form action="" method="get" style="display: inline-block;">
                            <input type="number" name="nova_quantidade" min="1" required="required" placeholder="Total a vender">
                            <input type="hidden" name="quantidade_id" value="<?= $r["id"] ?>">
                            <input type="hidden" name="vender"  value="<?= $r["id"] ?>">
                            <input class="venda-button" type="submit" value="VENDER">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </main>

    <?php require("components/footer.php"); ?>

</body>
</html>
