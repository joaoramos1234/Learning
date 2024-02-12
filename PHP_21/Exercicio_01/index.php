<?php require("componentes/header.php")?>

<main class="container-fluid my-5 py-4">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-5">Home</h1>
            <div class="wrapper">
                <?php foreach ($viagens as $i => $v): ?>
                <div class="card" style="width: 18rem;">
                    <a href="viagens.php?viagens=<?= $i; ?>">
                        <img src="<?= $v->imagem; ?>" class="card-img-top" alt="<?= $v->titulo; ?>">
                    </a>
                    <div class="card-body">
                        <h2 class="card-title"><?=  $v->titulo; ?></h2>
                        <p class="card-text text-center"><?= $v->texto; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php require("componentes/footer.php")?>

