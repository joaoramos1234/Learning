<?php

require_once("config.php");
require_once("base_dados.php");

$pagina_atual = 1;

if(isset($_GET["pagina"])){
    $pagina_atual = intval($_GET["pagina"]);
}

$numero_elementos_por_pagina = 2;
$offset = ($pagina_atual - 1) * $numero_elementos_por_pagina;

$resultados = selectSQLUnico("SELECT COUNT(id) AS total FROM produtos");

$total_elementos = $resultados["total"];

$total_de_paginas = ceil($total_elementos / $numero_elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $numero_elementos_por_pagina OFFSET $offset");

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
    
    <h1>Tabela Automática</h1>


        <div class="div-css">

            <?php if(!empty($produtos)): ?>
                <?php $chaves = array_keys($produtos[0]);?>

            <table>

                <tr>
                    <?php foreach($chaves as $c): ?>
                        <th><?= $c; ?></th>
                    <?php endforeach; ?>
                </tr>

            <?php foreach($produtos as $p): ?>
                <tr>
                    <?php foreach($chaves as $c): ?>
                        <td><?= $p[$c]; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>

            </table>
                    
        </div>
        
    <?php endif; ?>
        <form class="form-2" action="">
            
            <?php if($pagina_atual > 1): ?>
                <button name="pagina" value="<?= $pagina_atual - 1; ?>"> < </button>
            <?php endif; ?>

            <?php for($i = 1;$i<=$total_de_paginas; $i++ ): ?>
                <button name="pagina" value="<?=$i?>" class="<?= $i == $pagina_atual ? "active" : "" ?>"><?=$i?></button>
            <?php endfor; ?>

            <?php if($pagina_atual < $total_de_paginas): ?>
                <button name="pagina" value="<?= $pagina_atual + 1; ?>"> > </button>
            <?php endif;?>
        </form>
</body>
</html>