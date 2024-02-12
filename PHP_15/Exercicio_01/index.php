<?php

$nomes = ["João", "Maria", "Pedro", "Bruna", "Alice"];
$passwords = [111, 222, 333, 444, 555];
$form = isset($_POST["nome"]) && isset($_POST["pass"]);

if($form){
    
    $nome = $_POST["nome"];
    $pass = $_POST["pass"];
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
        <h1>LOGIN:</h1>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Inserir username..." required="required">
            <br>
            <input type="password" name="pass" placeholder="Inserir password..." required="required">
            <br><br>
            <input type="submit" name="submit" value="Procurar Nome">
        </form>
        
    </div>
    <button class="button"><a href="http://localhost/codemaster/PHP_15/Exercicio_01/">Reset</a></button>

    <?php if($form): ?>
        <br><br>
        <div>
            <?= $resultado; ?>
        </div>

    <?php endif; ?>
    
    
    
        
   
</body>
</html>