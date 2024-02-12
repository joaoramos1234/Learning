<?php

    const NOME = "João Ramos";
    const IDADE = 33;
    $idade2;

    if(IDADE <= 11){
        $idade2 = "Criança";
    }elseif(IDADE < 18){
        $idade2 = "ADOLESCENTE";
    }elseif(IDADE < 33){
        $idade2 = "JOVEM ADULTO(A)";
    }elseif(IDADE < 60){
        $idade2 = "ADULTO(A)";
    }else{
        $idade2 = "IDOSO(A)";
    }

    echo "<h1 style = 'font-size: 55px;'>===== Verificação de Idade ====</h1>";

    echo "<h2 style = 'font-size: 40px;'>Nome: " . NOME . "<br></h2>";

    echo "<h2 style = 'font-size: 40px;'>Idade: " . IDADE . "</h2><hr>";

    echo "<marquee style = 'font-size: 35px;' scrollamount='15'>" . 
        "<span style = 'font-weight: bold;'>" . NOME . "</span>" . " possui " .
        "<span style = 'font-weight: bold;'>" . IDADE . "</span>" . " anos de idade, logo é um(a) " . 
        "<span style = 'font-weight: bold;'>" . $idade2 . ".</span>" . "</marquee>";

    



?>