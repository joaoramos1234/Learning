<?php

require_once("Pessoa.php");

$joao = new Pessoa("João", 25, "Entroncamento");
$maria = new Pessoa("Maria", 52, "Lisboa");

$joao->exibirFicha();
$maria->exibirFicha();
echo '<hr size="1" width="50%">';
$maria->getSaldo();


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