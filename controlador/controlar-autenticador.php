<?php
session_start();

require_once('../basededados/conexao.php');
require_once('../basededados/repositorio-usuarios.php');
require_once('../validacao/validar-login-senha.php');

$login = $_POST['user'];
$senha = $_POST['senha'];

$conn = new mysqli("localhost", "root", "", "sislogin");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE user = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $login, $senha);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    header('Location: ../HTML/home.php');
    exit;
} else {
    header('Location: ../HTML/loginTele.php');
    exit;
}

if (isset($_POST['user'])) {
    if ($_POST['user'] == 'login') {
        login($_POST);
    }

    if ($_POST['user'] == 'logout') {
        logout();
    }
}

function login($requisicao) {
    $dados = validarLogin($requisicao);
    $valido = verificaErros($dados, $requisicao);

    if ($valido) {
        $dados = validarSenha($dados);
    }

    $usuario = verificaErros($dados, $requisicao);

    if ($usuario) {
        fazerLogin($dados);
    }
}

function verificaErros($dados, $requisicao) {
    if (isset($dados['invalido'])) {
        $_SESSION['erros'] = $dados['invalido'];
        $params = '?' . http_build_query($requisicao);
        header('location: ../HTML/loginTele.php' . $params);
        return false;
    }

    unset($_SESSION['erros']);
    return true;
}

function fazerLogin($dados) {
    $_SESSION['id'] = $dados['id'];
    $_SESSION['login'] = $dados['login'];
    setcookie('id', $dados['id'], strtotime('+1 day'));
    setcookie('login', $dados['login'], strtotime('+1 day'));
    header('location: ../HTML/home.php');
}

function logout() {
    if (isset($_SESSION['id'])) {
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600);
        }
        session_destroy();
    }

    setcookie('id', '', time() - 3600);
    setcookie('nome', '', time() - 3600);

    header('location: ../HTML/loginTele.php');
}

$conn->close();
?>
