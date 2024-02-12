<?php

$nome = $_GET["nome"];
$sobre = $_GET["sobre"] ;
$perfis_anteriores = intval($_GET["perfis_anteriores"]);
$perfis_posteriores = intval($_GET["perfis_posteriores"]);
$link = $_GET["link"];
$default_image = "perfil.jpg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <main>
        <h1>Perfis</h1>
        <div class="wrapper">
            <?php for($i = 1; $i <= $perfis_anteriores; $i++): ?>
            <div class="">
                <img src="perfil.jpg" alt="foto">
                <h3>Perfil Anterior <?= $i ?></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Reprehenderit recusandae delectus dolores nobis dolorum maxime harum aliquam. 
                    Explicabo adipisci, maiores, minima possimus omnis suscipit impedit itaque non consectetur exercitationem aut.
                </p>
            </div>
            <?php endfor; ?>
            <div class="profile">
                <img src="<?php echo (!empty($_GET["link"]) ? $_GET["link"]: $default_image);?>" alt="foto">
                <h3><?= $nome ?></h3>
                <p>
                    <?= $sobre ?>
                </p>
            </div>
            <?php for($i = 1; $i <= $perfis_posteriores; $i++): ?>
            <div class="">
                <img src="perfil.jpg" alt="foto">
                <h3>Perfil Posterior <?= $i ?></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Reprehenderit recusandae delectus dolores nobis dolorum maxime harum aliquam. 
                    Explicabo adipisci, maiores, minima possimus omnis suscipit impedit itaque non consectetur exercitationem aut.
                </p>
            </div>
            <?php endfor; ?>
        </div>
    </main>
    
</body>
</html>