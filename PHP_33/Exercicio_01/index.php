<?php

require_once("importacoes.php");

if(verificarLogado()){

    header("Location: lista.php");
    exit();
    
}

$form = isset($_GET["login"]) && isset($_GET["senha"]);

if($form){
    $login = $_GET["login"];
    $senha = $_GET["senha"];
    $esta_logado = fazerLogin($login, $senha);
    if($esta_logado){
        header("Location: lista.php");
        exit();
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
</head>
<body>
    <h1>Login</h1>
    <div class="div-css">
        <form class="form-none" action="">
            <input type="text" name="login" required="required" placeholder="Login...">
            <br>
            <input type="password" name="senha" required="required" placeholder="Password...">
            <br>
            <input class="voltar" type="submit" value="Login">
        </form>
    </div>

    <?php if($form): ?>

        <?php if(!$esta_logado):?>

            <h3 style="color: red";>Login Inválido.</h3>

        <?php endif; ?>

    <?php endif;?>
    
</body>
</html>