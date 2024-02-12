<?php

require_once("Banner.php");
require_once("globais.php");


$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);


if($form){

    $banners[] = new Banner($_GET["imagem"], $_GET["titulo"], $_GET["texto"]);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Texto</th>
            </tr>

            <?php foreach($banners as $b){$b->exibirFicha();} ?>

        </table>
        <a href="index.php"><button>Voltar</button></a>
    </div>
    
   
</body>
</html>