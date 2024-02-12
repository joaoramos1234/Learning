<?php

echo calc_media1(5, 2);
echo "<hr>";
calc_media2(5, 2);


function calc_media1($a, $b){

    $media = ($a + $b) / 2;

    return "Média (1): " . $media;

}

function calc_media2($a, $b){

    $media = ($a + $b) / 2;

    echo "Média (2): " . $media;

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