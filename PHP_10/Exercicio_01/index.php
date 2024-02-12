<?php

saudar();
saudar();
echo "<hr>";
saudar_2("João");
saudar_2("Pedro");
echo "<hr>";
saudar_3("Carlos", 6);
saudar_3("Maria", 14);
saudar_3("Bruno", 21);
echo "<hr>";
echo saudar_4();
echo saudar_4();
echo saudar_4();
echo "<hr>";
echo saudar_5("João");
echo saudar_5("Maria");
echo saudar_5("Carlos");

function saudar(){

    echo "Bom dia!<br>";

}

function saudar_2($valor_1){

    echo "Boa tarde $valor_1!<br>";

}

function saudar_3($nome, $hora){

    if($hora > 4 && $hora < 12){
        echo ("Bom dia $nome!<br>");
    }elseif($hora >= 12 && $hora < 19){
        echo ("Boa tarde $nome!<br>");
    }else{
        echo "Boa noite $nome!<br>";        
    }
    
}

function saudar_4(){

    return "Bom dia!<br>";
    
}

function saudar_5($nome){

    return "Bom dia $nome!<br>";
    
}

function calc_media($a, $b){

    

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