<?php

require_once("config.php");
require_once("base_dados.php");

$pagina_atual = 1;

if(isset($_GET["pagina"])){
    $pagina_atual = intval($_GET["pagina"]);
}

$elementos_por_pagina = 3;
$offset = ($pagina_atual - 1) * $elementos_por_pagina;

$resultados = selectSQLUnico("SELECT COUNT(id) AS total FROM produtos");

$total_elementos = $resultados["total"];
$total_de_paginas = ceil($total_elementos / $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $offset");

?>