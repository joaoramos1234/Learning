<?php
if (isset($_GET['viagens'])) {
    $viagem_id = $_GET['viagens'];

    if (is_numeric($viagem_id) && $viagem_id >= 0 && isset($viagens[$viagem_id])) {
        $viagem_selecionada = $viagens[$viagem_id];
        
    }
}
?>

<?php require_once("componentes/header.php"); ?>

<main class="container my-5 py-4">
    <div class="row">
        <?php if (isset($viagens[$viagem_id])): ?>
        <div class="col-12 text-center mb-4 d-flex flex-column justify-content-center align-items-center">
            <img class="img" src="<?= $viagens[$viagem_id]->imagem; ?>" alt="<?= $viagens[$viagem_id]->titulo; ?>">
            <h1 class="my-5"><?= $viagens[$viagem_id]->titulo; ?></h1>
            <p class="my-3">
                <?= $viagens[$viagem_id]->texto; ?>
                <?= $viagens[$viagem_id]->texto; ?>
                <?= $viagens[$viagem_id]->texto; ?>
            </p>
        </div>
        
        <?php else: ?>
        <div class="col-12">
            <h2 class="text-center">VIAGEM NÃO ENCONTRADA!</h2>
            
        </div>
        <?php endif; ?>
    </div>
</main>

<?php require("componentes/footer.php"); ?>
