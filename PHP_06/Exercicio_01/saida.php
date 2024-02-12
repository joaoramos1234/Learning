<?php

$nome = "";
if(isset($_GET["nome"])){
    $nome = $_GET["nome"];

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
    <title>Saída</title>
</head>
<body>

    <h1>Nome: <?= $nome; ?></h1>
    
</body>
</html>