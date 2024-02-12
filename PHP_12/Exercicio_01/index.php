<?php

$saldo = 500.00;
$nome = "João";

levantar(50);
levantar(150);
depositar(125);

function levantar($valor){
    global $saldo, $nome;
    $saldo -= $valor;
    echo "Olá $nome<br>";
    echo "Levantor $valor, saldo final: $saldo<br>";
}

function depositar($valor){
    global $saldo, $nome;
    $saldo += $valor;
    echo "Olá $nome<br>";
    echo "Depositou $valor, saldo final: $saldo<br>";
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
   
</body>
</html>