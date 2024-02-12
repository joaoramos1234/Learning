<div class="div-css ">

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