<?php

$rota_completa = $_SERVER["REQUEST_URI"];

$rota = str_replace("/codemaster/PHP_35/Exercicio_01/", "", "$rota_completa");
$rota = explode("/", $rota);

switch($rota[0]){

    case "":
    case "home":
        require_once("models/home_model.php");
        break;
    case "contactos":
        require_once("models/contactos_model.php");
        break;
    case "produtos":
        require_once("models/produtos_model.php");
        break;
    default:
        require_once("models/erro_model.php");
        break;
}   

?>