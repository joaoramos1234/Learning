<?php
require_once("Foto.php");
require_once("globais.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $movieId = (int)$_GET['id'];

    if (isset($fotos[$movieId])) {
        $selectedMovie = $fotos[$movieId];
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $fotos[$movieId]->titulo; ?></title>
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
    <div class="wrapper">
        <main>
            <div class="mt-5 text-center">
                <h1 class="mt-5"><?= $fotos[$movieId]->titulo; ?></h1>
                <img class="mt-5" src="<?= $fotos[$movieId]->imagem; ?>" alt="<?= $fotos[$movieId]->titulo; ?>">
                    <p class="mt-5 p-filmes">
                        <span class='filme-span'><?=  $fotos[$movieId]->texto; ?> </span>
                        <br><br>
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur labore iure alias hic mollitia consectetur facilis enim earum ea dignissimos molestias incidunt, aspernatur natus, molestiae accusamus sequi ipsum recusandae. Repudiandae, voluptate a, sunt numquam rerum possimus ratione delectus, similique sequi porro quaerat optio molestias molestiae obcaecati eligendi dolores aliquid laboriosam minima doloribus quam vitae fuga enim! Dolorum sed numquam eaque eum eligendi at ex corrupti modi tenetur. Obcaecati mollitia sint suscipit, perferendis quo neque eum a quia minima blanditiis necessitatibus fugit incidunt quisquam illo? Blanditiis nulla, esse mollitia reiciendis nobis maiores voluptatem nostrum voluptatibus dolorem veniam, ratione, non illum? Voluptatibus perferendis necessitatibus eos dicta reiciendis ipsam nobis, a repellendus ratione enim fugit, nisi, cumque libero. Praesentium totam autem, itaque cupiditate placeat voluptatibus fugiat minus ipsum? Error delectus deleniti alias sunt velit, saepe atque veritatis pariatur laboriosam ipsum quisquam dignissimos facere, quod explicabo et.
                    </p>
                    <a href="index.php" class="btn btn-outline-danger my-5">Voltar</a>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <!-- Your footer content goes here -->
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
