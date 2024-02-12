<?php

require_once("classes/Produto.php");
require_once("classes/Carousel.php");
require_once("global.php");


$carouseis = [

    new Carousel("https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395", "Iphone 14", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1199.99, 1000 ),
    new Carousel("https://www.apple.com/v/iphone/home/bo/images/meta/iphone__ky2k6x5u6vue_og.png", "Iphone 14 Pro Max", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1699.99, 1000  ),
    new Carousel("https://loja.iservices.pt/7906-large_default/iphone-13.jpg", "Iphone 14 Pro", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1299.99, 1000  )

];

$produtos = [
    new Produto("https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395", "Iphone 14", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1199.99, 1000 ),
    new Produto("https://www.apple.com/v/iphone/home/bo/images/meta/iphone__ky2k6x5u6vue_og.png", "Iphone 14 Pro Max", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1699.99, 1000  ),
    new Produto("https://loja.iservices.pt/7906-large_default/iphone-13.jpg", "Iphone 14 Pro", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore omnis suscipit vel qui obcaecati, reprehenderit quibusdam excepturi maxime accusamus, laboriosam quia libero nesciunt ipsum itaque odio laudantium possimus officia, veniam distinctio?", 1299.99, 1000 )
];

?>