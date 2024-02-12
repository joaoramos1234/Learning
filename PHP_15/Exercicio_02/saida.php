<?php
$form = isset($_GET["movimentacoes"]);

$movimentacoes;
$soma;
$media;
if($form){
    $movimentacoes = $_GET["movimentacoes"];
    $soma = array_sum($movimentacoes);
    $media = $soma / count($movimentacoes);
}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    
    <h1>Saída</h1>
    
   <ol>
    <?php foreach($movimentacoes as $m): ?>
        <li><?="" . number_format($m, 2) . " €"?></li>

    <?php endforeach; ?>
   </ol>

   <h3>Soma total: (<?= number_format($soma, 2);?> €)</h3>
   <h3>Média: (<?= number_format($media, 2);?> €)</h3>
   <br>
   <button class="button"><a href="http://localhost/codemaster/PHP_15/Exercicio_02/">Reset</a></button>
</body>
</html>