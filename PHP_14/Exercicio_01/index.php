<?php

$nomes = ["João", "Maria", "Pedro", "Bruna", "Alice"];
$passwords = [111, 222, 333, 444, 555];
$form = isset($_GET["nome"]) && isset($_GET["pass"]);

if($form){
    
    $nome = $_GET["nome"];
    $pass = $_GET["pass"];
    $nome_index = array_search($nome, $nomes);
    $pass_index = array_search($pass, $passwords);


    if($nome_index !== false && $pass_index !== false && $nome_index === $pass_index){
        $resultado = "<h3 class='sucesso'>SUCESSO! </h3>";
    }else{
        $resultado = "<h3 class='erro'>LOGIN INVÁLIDO! </h3>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="wrapper">
        <h1>Procurar nome:</h1>
        <form action="" method="get">
            <input type="text" name="nome" placeholder="Inserir nome..." required="required">
            <br>
            <input type="text" name="pass" placeholder="Inserir password..." required="required">
            <br><br>
            <input type="submit" name="submit" value="Procurar Nome">
        </form>
        
    </div>
    <button class="button"><a href="http://localhost/codemaster/PHP_14/Exercicio_01/">Reset</a></button>

    <?php if($form): ?>
        <br><br>
        <div>
            <?= $resultado; ?>
        </div>

    <?php endif; ?>
    
    
    
        
   
</body>
</html>