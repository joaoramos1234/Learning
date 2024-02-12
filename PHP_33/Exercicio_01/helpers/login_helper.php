<?php



function fazerLogin($login, $senha){
    $colaborador = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
    if(!empty($colaborador)){
        session_start();
        $_SESSION["usuario"] = $colaborador;
        unset($_SESSION["usuario"]["senha"]);
        return true;
    }
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

function verificarLogado(){

    session_start();
    if(!empty($_SESSION["usuario"])){
        return true;
    }else{
        return false;
    }


}

function logout(){

    session_start();
    session_destroy();

}

?>