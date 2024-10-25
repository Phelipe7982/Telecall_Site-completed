<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',login='$login',celular='$celular',sexo='$sexo',dataNasc='$dataNasc',endereco='$endereco'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../HTML/home.php');

?>