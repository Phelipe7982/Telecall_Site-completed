<?php

require_once('../basedados/conexao.php');


function registrarUsuario($usuario) {
    $usuario['senha'] = password_hash($usuario['senha'], PASSWORD_DEFAULT);

    if(isset($_POST['usuario'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $endereco = $_POST['endereco'];
        $login = $_POST['login'];
    }

    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $sqlCreate = "INSERT INTO usuarios (nome, celular, endereco, login)
                  VALUES ('$nome', '$cpf', '$celular', '$endereco', '$login')";

    $stmt = $conn->prepare($sqlCreate);

    if ($stmt === false) {
        die("Erro na preparação da query: " . $conn->error);
    }

    $stmt->bind_param("s", $usuario['nome'], $usuario['celular'], $usuario['endereco'], $usuario['login']);

    $sucesso = $stmt->execute();

    if ($sucesso) {
        $usuario['id'] = $conn->insert_id;
    }

    $stmt->close();
    $conn->close();

    return $sucesso;
}

function lerTodosUsuarios() {
    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $result = $conn->query('SELECT * FROM usuarios;');
    $usuarios = [];

    while ($listaUsuarios = $result->fetch_assoc()) {
        $usuarios[] = $listaUsuarios;
    }

    $conn->close();

    return $usuarios;

}

function deletarUsuario($id) {
    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('DELETE FROM usuarios WHERE id = ?;');
    $stmt->bind_param("s", $id);

    $sucesso = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $sucesso;
}

function lerUsuarioPorLogin($login) {
    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE login = ? LIMIT 1;');
    $stmt->bind_param("s", $login);

    $stmt->execute();
    $result = $stmt->get_result();

    $usuario = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    return $usuario;
}

function atualizarUsuario($usuario) {
    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    if (isset($usuario['senha']) && !empty($usuario['senha'])) {
        $usuario['senha'] = password_hash($usuario['senha'], PASSWORD_DEFAULT);

        if(isset($_POST['usuario'])){
            
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $celular = $_POST['celular'];
            $endereco = $_POST['endereco'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $adm = $_POST['adm'];
        }

        $sqlUpdate = "UPDATE usuarios SET nome = ?, cpf = ?, celular = ?, endereco = ?, login = ?, senha = ?, adm = ? WHERE id = ?";


        $stmt = $conn->prepare($sqlUpdate);

        if ($stmt === false) {
            die("Erro na preparação da query: " . $conn->error);
        }

        $stmt->bind_param("s", $nome, $cpf, $celular, $endereco, $login, $usuario['senha'], $adm, $usuario['id']);

        $sucesso = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $sucesso;
    }
}


function verificarAdm() {
    session_start(); // Inicie a sessão se ainda não estiver iniciada

    if (!isset($_SESSION['id'])) {
        return false; // Se o ID do usuário na sessão não estiver definido, não é um administrador
    }

    $id = $_SESSION['id'];

    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT adm FROM usuarios WHERE id = ?;');
    $stmt->bind_param("i", $id); // "i" representa um parâmetro inteiro

    $stmt->execute();
    $result = $stmt->get_result();

    $dadosUsuario = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    // Se o campo 'adm' existir e for verdadeiro (1), então o usuário é administrador
    return isset($dadosUsuario['adm']) && $dadosUsuario['adm'] == 1;
}

function lerUsuarioLogado() {

    if (!isset($_SESSION['id'])) {
        return null; // Se o ID do usuário na sessão não estiver definido, retorne null
    }

    $id = $_SESSION['id'];

    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = ?;');
    $stmt->bind_param("i", $id); // "i" representa um parâmetro inteiro

    $stmt->execute();
    $result = $stmt->get_result();

    $dadosUsuario = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    return $dadosUsuario;
}

function lerUsuario($id) {
    $conn = new mysqli("localhost", "root", "", "sislogin");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = ?;');
    $stmt->bind_param("i", $id);  // "i" representa o tipo de dado do ID (inteiro)

    $stmt->execute();
    $result = $stmt->get_result();

    $usuario = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    return $usuario;
}
?>
