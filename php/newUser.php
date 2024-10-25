<?php 
    if(isset($_POST['cadastrarUser'])){

        $nome = $_POST['nome'];
        $nomeMat = $_POST['nome-mat'];
        $dataNasc = $_POST['dataNasc'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
    }

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'sislogin';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        header('Location: ../HTML/erro.php');
    }

    if(!$conexao){
        die("Conexão falhou!" . mysqli_connect_error());
    }

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, nomeMaterno, dataNasc, sexo, cpf, celular, telefoneFixo, endereco, login, senha, adm)
    VALUES ('$nome', '$nomeMat', '$dataNasc', '$sexo', '$cpf', '$celular', '$telefone', '$endereco', '$login', '$senha', '$isAdmin')");

header('Location: ../admin/indexadm.php');
?>