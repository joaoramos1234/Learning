<?php

$nomes = ["João, Maria, Pedro, Bruna, Alice"];
$form = isset($_GET["nome"]);
$resultado;

if($form){
    $nome = $_GET["nome"];
    if(in_array($nome, $nomes)){
        $resultado = "<h3 class='verde'>ENCONTRADO </h3>";
    }else{
        $resultado = "<h3 class='vermelho'>NÃO ENCONTRADO </h3>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
<body>
    <div class="wrapper">
        <h1>Procurar nome:</h1>
        <input type="text" name="nome" placeholder="Inserir nome..." required="required">
        <br><br>
        <input type="submit" value="Procurar Nome">
    </div>

    <?php if($form): ?>
        <br><br>
        <div>
            <?= $resultado; ?>
        </div>

    <?php endif; ?>
    
    
    
        
   
</body>
</html>