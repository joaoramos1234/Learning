<?php

calc_cubo1(4);
calc_cubo1(5);
calc_cubo1(10);
echo "<hr>";
echo calc_cubo2(4);
echo calc_cubo2(5);
echo calc_cubo2(10);

function calc_cubo1($numero){

    $cubo = $numero * $numero * $numero;

    echo "Cubo ($numero): " . $cubo . "<br>";

}

function calc_cubo2($numero){

    $cubo = $numero * $numero * $numero;

    return "Cubo ($numero): " . $cubo . "<br>";
    
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
    
</body>
</html>