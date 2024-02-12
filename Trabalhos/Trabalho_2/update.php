<?php

require_once("importacoes.php");

verificarEstaLogado();

$id = null;

$form = isset($_GET["editar"]);
$form2 = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form){
    $id = $_GET["editar"];
    $produto_selecionado = selectSQLUnico("SELECT * FROM produtos WHERE id='$id'");
    if($form2){
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $quantidade = $_GET["quantidade"];
        $editor = $_SESSION["usuario"]["nome"];

        date_default_timezone_set("Europe/Lisbon");
        $data_edicao = date("h:i:s - d/m/Y");

        iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade', data_edicao='$data_edicao', editor='$editor' WHERE id='$id'");
        header("Location: sucesso.php");
        exit();
    }
}else{
    header("Location: editar_produto.php");
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
    
    <div class="div-css">
        <?php require("components/nav.php") ?>
    </div>
    
<main>

    <div class="div-css">
        <form action="" class="form-css">
            <h2 class="lista-h2">EDITAR PRODUTO (<?= $id ?>) </h2>
            <br><br>
            <input type="hidden" name="editar" value="<?= $id; ?>">
            <input type="text" name="nome" autofocus required="required" placeholder="Nome">
            <br><br>
            <input type="number" name="preco" step="0.01" required="required" placeholder="Preco">
            <br><br>
            <input type="number" name="quantidade" required="required" placeholder="Quantidade">
            <br><br>
            <input type="submit" value="Registar">
        </form>
       
    </div>

</main>

<?php require("components/footer.php"); ?>

</body>
</html>