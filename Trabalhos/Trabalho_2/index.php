<?php

require_once("importacoes.php");

$esta_logado = false;

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $esta_logado = logar($login, $senha);

    if($esta_logado){

        header("Location: home.php");
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

    <main>
        
        <div class="div-css">
            <h1>SISTEMA DA PAPELARIA <?= date("Y")?></h1>
        </div>
        <div class="div-css">
            <form action="" method="post">
                <h2>LOGIN</h2>
                <?php if($form): ?>
                    <br>
                    <?php if(!$esta_logado): ?>
                        <h3 class="login-invalido">Login inválido, tente novamente.</h3>
                    <?php endif; ?>
                <?php endif; ?>
                <input type="text" name="login" placeholder="Nome...">
                <br><br>
                <input type="password" name="senha" placeholder="Senha...">
                <br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
        

    </main>
    
    <?php require("components/footer.php"); ?>
    
</body>
</html>