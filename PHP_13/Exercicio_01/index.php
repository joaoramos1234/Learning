<?php

$pessoas = [];
const TOTAL = 3;

$form = false;

for($i = 1; $i <= TOTAL; $i++){
    $form = true;
    $form = $form && isset($_GET["nome_$i"]);
    if(!$form){ break; }
}

if($form){
    for($i = 1; $i <= TOTAL; $i++){
        $pessoas = $_GET["nome_$i"];

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Arrays</h1>
        <div class="form-wrapper">
            <form action="">
                <?php for($i = 1; $i <= TOTAL; $i++): ?>
                <input type="text" name="nome_<?=$i?>" placeholder="Nome <?=$i?>">
                <?php endfor; ?>
                <input type="submit"  value="Salvar">
            </form>
            <br>
        </div>
        <button id="reset_css"><a href="http://localhost/Codemaster/PHP_13/Exercicio_01/">Reset</a></button>

        <div class="div2_wrapper">
            <?php

            if($form){
                for($i = 0; $i < count($pessoas); $i++){
                    echo ($i + 1) . " - " . $pessoas[$i] . "<br>";
                 }
                 echo "<br>";
                 var_export($pessoas);
            }
            ?>
            
        </div>
    </main>
   
</body>
</html>