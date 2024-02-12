<?php

require_once("config.php");
require_once("base_dados.php");

$form = isset($_GET["editar"]);

if($form){
   $id = $_GET["editar"];
   $produto = selectSQLUnico("SELECT * FROM produtos WHERE id = $id;");

}else{
    header("Location: index.php");
    exit();
}

require_once("update.php");

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

    <h1>Editar</h1>

    <div class="div-css">

        <form class="form-none" action="">
            <input type="hidden" name="editar" value="<?= $_GET["editar"] ?>">
            <label for="produto">Produto: </label>
            <input type="text" name="produto" required="required" value="<?=$produto["produto"];?>">
            <br>
            <label for="preco">Preço: </label>
            <input type="number" step="0.01" min="0.01" name="preco" required="required" value="<?=$produto["preco"];?>">
            <br>
            <label for="produto">Quantidade: </label>
            <input type="number" name="quantidade" min="0" required="required" value="<?=$produto["quantidade"];?>">
            <br>
            <input class="voltar" type="submit" value="Editar">
        </form>
    </div>


</body>
</html>