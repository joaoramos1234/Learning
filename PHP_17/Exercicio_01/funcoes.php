<?php

function traduzirMes($mes, $locale){

    $meses = [
        'en' => [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July'
        ],
        'pt' => [
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho'
        ]
        
    ];

    if(isset($meses[$locale][$mes])){
        return $meses[$locale][$mes];
    }else{
        return $meses['en'][$mes];
    }
    


}


?>