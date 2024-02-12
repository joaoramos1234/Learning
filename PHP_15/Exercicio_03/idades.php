<?php

$form = isset($_GET["quantidade"]) || (isset($_GET["homens"]) && isset($_GET["mulheres"]));
$soma = 0;
$homem_min = 0;
$homem_max = 0;
$mulher_min = 0;
$mulher_max = 0;

if($form){

    $quantidade = isset($_GET["quantidade"]) ? $_GET["quantidade"] : count($_GET["homens"]);

    if (isset($_GET["homens"])) {
        $homens = $_GET["homens"];
        $homem_min = min($homens);
        $homem_max = max($homens);
    
    }

    if (isset($_GET["mulheres"])) {
        $mulheres = $_GET["mulheres"];
        $mulher_min = min($mulheres);
        $mulher_max = max($mulheres);
    }

    if(isset($mulher_min, $homem_max)){
        $soma = $mulher_min + $homem_max;
        $mult = $homem_min * $mulher_max;
    }

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

    <h1>Cálculo de Idades</h1>

    <form action="" method="get">
        <h3>Homens</h3>
        <div class="input_wrapper">
            <?php for($i = 1; $i <= $quantidade; $i++): ?>
            <input type="number" name="homens[]" placeholder="Idade Homem <?= $i?>">
            <br><br>
            <?php endfor; ?>
        </div>
        
        <br>
        <h3>Mulheres</h3>
        <div class="input_wrapper">
            <?php for($i = 1; $i <= $quantidade; $i++): ?>
            <input type="number" name="mulheres[]" placeholder="Idade Mulher <?= $i?>">
            <br><br>
            <?php endfor; ?>
        </div>
        <br><br>
        <input type="submit" value="Enviar!">
    </form>

    <div id="wrapper_output">
        <?php if($form && ($homem_max !== 0 || $mulher_min !== 0)): ?>

            <div class="input_wrapper">
                <h2><?= "Homem mais velho(" . ($homem_max) . ") + Mulher Mais nova (" . ($mulher_min) . ") = " . $soma ?></h2>
                <h2><?= "Mulher mais velha(" . ($mulher_max) . ") * Homem Mais novo (" . ($homem_min) . ") = " . $mult ?></h2>
            </div>
            <button id="button_css"><a href="http://localhost/codemaster/PHP_15/Exercicio_03/"></a>Reset</button>
        <?php endif; ?>

            

    </div>
    

    <div id="wrapper_idades">
        <?php if($form && !empty($homens)): ?>

    
            <h3 class="idade"><?= "Idades Masculinas " ?></h3>
            <div class="output_wrapper">
                
                <?php foreach($homens as $h):?>
                    <?php $lastKey = array_key_last($homens); ?>
                    <h3 class="age"><?= $h . ($h !== end($homens) ? " - " : "") ?>  </h3>
                <?php endforeach; ?> 
            </div>
        
        <?php endif; ?>

        <?php if($form && !empty($mulheres)): ?>

            <h3 class="idade"><?= "Idades Femininas " ?></h3>
            <div class="output_wrapper">
                
                <?php foreach($mulheres as $m):?>
                    <?php $lastKey = array_key_last($mulheres); ?>
                    <h3 class="age"><?= $m . ($m !== end($mulheres) ? " - " : "") ?>  </h3>
                <?php endforeach; ?> 
            </div>

        <?php endif; ?>
    </div>
            
        
   
</body>
</html>