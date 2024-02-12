<?php if(!empty($resultados)): ?>

<?php $chaves = array_keys($resultados[0]); ?>
<div class="table-div">
    <table>

        <tr>
        <?php foreach($chaves as $c): ?>
            <th class="uppercase bold"><?= $c; ?></th>
        <?php endforeach; ?>
        </tr>

        <?php foreach($resultados as $r): ?>

        <tr>
            <?php foreach($chaves as $c): ?>
                <td class="bold"><?= $r[$c]; ?></td>
            <?php endforeach; ?>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<?php endif; ?>