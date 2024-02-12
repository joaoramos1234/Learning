<?php

require_once("Foto.php");
require_once("globais.php");

/* var_dump($_SERVER["REQUEST_URI"]);

$teste = (str_contains($_SERVER["REQUEST_URI"], "index")); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
         <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-danger ">
                        <div class="container-fluid px-3">
                            <a class="navbar-brand text-light" href="#">Filmes</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                    <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Filmes
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <?php foreach($fotos as $index => $f): ?>
                                        <li><a class="dropdown-item" href="filme.php?id=<?= $index;?>"><?= $f->titulo; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-light" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="my-5 filmes-titulo text-center">Filmes</h1>
                    <div class="wrapper">
                        <?php foreach ($fotos as $index => $f): ?>
                            <div class="card" style="width: 18rem;">
                                <a href="filme.php?id=<?= $index; ?>">
                                    <img src="<?= $f->imagem; ?>" class="card-img-top" alt="<?= $f->titulo; ?>">
                                </a>
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $f->titulo; ?></h2>
                                    <p class="card-text"><?= $f->texto; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <br>
                    <div class="wrapper-footer text-center bg-danger"> <h1>JOÃO RAMOS &copy; 2023</h1> </div>
                </div>
            </div>
        </div>
    </footer> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>