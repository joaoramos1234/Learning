<?php

$teste_1 = [];
$teste_2 = ["João", "Maria", "Carlos"];

$teste_1[] = "bolo";
$teste_1[] = "torta";
$teste_1[] = "caramelo";
$teste_1[] = "pao";

$teste_1[1] = "Torta de Chocolate";

array_pop($teste_1);

echo "<pre>";
var_dump($teste_1);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_dump($teste_2);
echo "</pre>";


$teste_3 = array();
$teste_4 = array("Almada", "Lisboa", "Porto");

array_push($teste_3, "Nazaré");

//$teste_3[1] = "Covilhã";

echo "<hr>";
echo "<pre>";
print_r($teste_3);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($teste_4);
echo "</pre>";

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