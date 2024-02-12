<?php

require_once("funcoes.php");

$mes = date('n');
$mes_traduzido = traduzirMes($mes, 'pt');

$valor = $_GET["valor"] ?? [];
$data = $_GET["data"] ?? [];

$form = !empty($valor) && !empty($data);

$total_recebido = array_sum($valor);
$iva = array_sum($valor) * 0.23;
$valor_pos_iva = array_sum($valor) - $iva;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1><?= $mes_traduzido ?></h1>

    <?php if ($form): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($valor as $index => $v): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= number_format($v, 2) . " €" ?></td>
                        <td><?= date("D/M/Y", strtotime($data[$index])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No receipts were submitted.</p>
    <?php endif; ?>

    <div class="wrapper2">
        <p>Total recebido: <?= number_format($total_recebido, 2) . "€"?></p>
        <p>Iva: <?= number_format($iva, 2) . "€"?></p>
        <p>Valor após iva: <?= number_format($valor_pos_iva, 2) . "€"?> </p>
    </div>
    <button class="button"><a href="index.php">Reset</a></button>
    
</body>
</html>
