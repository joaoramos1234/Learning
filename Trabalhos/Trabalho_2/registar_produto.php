<?php

require_once("importacoes.php");

verificarEstaLogado();

$form = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form){

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];
    $criador = $_SESSION["usuario"]["nome"];

    date_default_timezone_set("Europe/Lisbon");
    $data_criacao = date("h:i:s - d/m/Y");
    
    iduSQL("INSERT INTO produtos (nome, preco, quantidade, data_criacao, criador) VALUES ('$nome', '$preco', '$quantidade','$data_criacao','$criador')");
    header("Location: registar_produto.php");
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
            <h2 class="lista-h2">Registar</h2>
            <br><br>
            <input type="text" name="nome" autofocus required="required" placeholder="Nome">
            <br><br>
            <input type="number" name="preco" step="0.01" required="required" placeholder="Preco">
            <br><br>
            <input type="number" name="quantidade" required="required" placeholder="Quantidade">
            <br><br>
            <input type="submit" value="Registar">

        </form>
    </div>

    
    <?php require("components/table_automatica.php");?>
</main>

<?php require("components/footer.php"); ?>

</body>
</html>