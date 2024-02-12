<?php

function logar($login, $senha){

    $colaboradores = selectSQL("SELECT * FROM colaboradores");

    foreach($colaboradores as $c){
        if($c["login"] == $login){
            if($senha == $c["senha"]){
                session_start();
                $_SESSION["usuario"] = $c;
                unset($_SESSION["usuario"]["senha"]);
                setDataUltimoAcesso($c["id"]);
                return true;
            }else{
                return false;
            }
        }
    }
    return false;

}

function verificarEstaLogado(){

    session_start();

    if(!empty($_SESSION["usuario"])){
        return true;
    }else{
        header("Location: index.php");
        exit();
    }

}

function logout(){

    session_start();
    session_destroy();

}

function verificarLogado(){

    session_start();
    if(!empty($_SESSION["usuario"])){
        return true;
    }else{
        return false;
    }


}

function getDataActual(){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("h:i:s - d/m/Y");
    return $data_atual;
}

function setDataUltimoAcesso($id){

    $ultimo_acesso = getDataActual();
    iduSQL("UPDATE colaboradores SET ultimo_acesso='$ultimo_acesso' WHERE id='$id'");

}

?>