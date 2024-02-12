<?php

    $a = 8;
    $b = 3;

    $soma = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    $resto = $a % $b;
    
    $pot = pow($a, $b);
    $pot2 = $a ** $b;
    

    echo("<h1 style ='font-size: 55px';>=== Testes Matemáticos === </h1>");
    echo("<h1>A = ". $a . "<br><br></h1>");
    echo("<h1>B = " . $b . "</h1><hr>");
    echo("<h1>SOMA = " . $soma . "</h1><br><br>");
    echo("<h1>SUBTRAÇÃO = " . $sub . "</h1><br><br>");
    echo("<h1>MULTIPLICAÇÃO = " . $mult . "</h1><br><br>");
    echo("<h1>DIVISÃO = " . round($div, 2) . "</h1><br><br>");
    echo("<h1>RESTO DA DIVISÃO = " . $resto . "</h1><br><br>");
    echo("<h1>ELEVADO = " . $pot . "</h1><br><br>");


?>