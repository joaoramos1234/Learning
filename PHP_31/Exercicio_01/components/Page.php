<?php 

$inicio = $pagina_atual - 2;
$fim = $pagina_atual + 2;


?> 
    
<form class="form-2" action="">
    
    <?php if($inicio > 1): ?>
        <button name="pagina" value="<?= $pagina-1 ?>"> << </button>
        ...
    <?php endif; ?>

    <?php for($i = $inicio; $i <= $fim; $i++): ?>
        <button name="pagina" value="<?= $i ?>" class="<?= $i == $pagina_atual ? "active" : "" ?>"> <?=$i?> </button>
    <?php endfor; ?>

    <?php if($fim < $total_de_paginas): ?>
        <button name="pagina" value="<?= $pagina_atual + 1 ?>"> >> </button>
    <?php endif;?>
    
</form>