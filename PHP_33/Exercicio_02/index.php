<?php


require_once("config.php");
require_once("base_dados.php");
require("helpers/login_helper.php");


$esta_logado = false;

$form = isset($_GET["login"]) && isset($_GET["senha"]);

if($form){

    $login = $_GET["login"];
    $senha = $_GET["senha"];
    $esta_logado = logar($login, $senha);
    if($esta_logado){
        header("Location: servicos.php");
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

    <?php require("nav.php"); ?>

    <form action="">
        <h2>Login</h2>
        <br><br>
        <label for="login">Login:</label>
        <input type="text" name="login" required="required" autofocus>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required="required">
        <br>
        <input type="submit" value="Entrar">
    </form>
    <?php if($form): ?>
        <br>
        <?php if(!$esta_logado): ?>
            <h3 style="color: red;">Login inválido.</h3>
        <?php endif; ?>
    <?php endif; ?>

    <!-- <?php 

        $teste = "code";
        $cifra = password_hash($teste, PASSWORD_DEFAULT);

        $verificado = password_verify("code", $cifra);
        
        var_dump($verificado);
        echo $teste . "<br>";
        echo $cifra;

        
    
    ?> -->

    
    <hr>

    <form action="novo_usuario.php">
        <h2>Novo usuário</h2>
        <br><br>
        <input type="text" name="nome" required="required" placeholder="Nome...">
        <br>
        <input type="text" name="login" required="required" placeholder="Login...">
        <br>
        <input type="password" name="senha" required="required" placeholder="Password...">
        <br>
        <input class="voltar" type="submit" value="Registar">
    </form>

</body>
</html>

