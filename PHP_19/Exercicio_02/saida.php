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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide">
           <div class="carousel-inner">
            <?php foreach($viagens as $i => $v): ?>
                <?php $active = $i === 0 ? 'active' : ''; ?>
                <div class="carousel-item <?= $active; ?>">
                    <img src="<?= $v->imagem; ?>" class="d-block w-100" alt="<?= $v->titulo ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?= $v->titulo; ?></h3>
                        <p><?= $v->texto; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <a href="index.php"><button class="button_css">Voltar</button></a>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>