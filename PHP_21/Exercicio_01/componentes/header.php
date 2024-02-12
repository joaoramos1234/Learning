<?php

require_once("classes/Viagem.php");
require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
         <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-danger ">
                        <div class="container-fluid px-3">
                            <a class="navbar-brand text-light" href="#">Agência de Viagens 2.0</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                    <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Viagens
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <?php foreach($viagens as $i => $v): ?>
                                        <li><a class="dropdown-item" href="viagens.php?viagens=<?= $i;?>"><?= $v->titulo; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Destino..." aria-label="Search">
                                    <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div id="carouselExampleIndicators" class="carousel slide">
                    
                            <div class="carousel-indicators">

                            <?php for($i=0; $i<count($viagens); $i++): ?>

                                <?php if($i == 0): ?>

                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                                <?php else: ?>

                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" aria-label="Slide 2"></button>

                                <?php endif; ?>

                            <?php endfor; ?>
                            </div>

                            <div class="carousel-inner">
                                <?php foreach($viagens as $i => $v): ?>
                                    <?php $active = $i === 0 ? 'active' : ''; ?>
                                    
                                    <div class="carousel-item <?= $active; ?>">
                                        <img src="<?= $v->imagem; ?>" class="d-block w-100" alt="<?= $v->titulo ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1><?= $v->titulo; ?></h1>
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
                        </div>
                </div>
            </div>
    </header>