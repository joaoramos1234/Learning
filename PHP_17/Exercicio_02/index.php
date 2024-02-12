<?php


$matriz = [
    [
        "nome" => "João",
        "morada" => "Entroncamento",
        "nif" => 111
    ],
    [
        "nome" => "Pedro",
        "morada" => "Lisboa",
        "nif" => 222
    ],
    [
        "nome" => "Maria",
        "morada" => "Covilhã",
        "nif" => 333
    ]
];

for($i = 0; $i < count($matriz); $i++){
    echo $matriz[$i]["nome"] . " - " . $matriz[$i]["morada"] . " - " . $matriz[$i]["nif"] . "<br>";

}

echo "<br>";

foreach($matriz as $p){

    echo $p["nome"] . " - " . $p["morada"] . " - " . $p["nif"] . "<br>";


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