<?php 
    session_start();
    
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['id']);
        unset($_SESSION['adm']);
        unset($_SESSION['nome']);
        unset($_SESSION['celular']);
        header('location: loginTele.php');

    } else{
        $logado = $_SESSION['login'];
        $senha = $_SESSION['senha'];
    }
?>