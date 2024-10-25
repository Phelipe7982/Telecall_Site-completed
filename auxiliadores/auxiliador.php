<?php 

require_once('../basedados/repositorio-usuario.php');

# Função para informar se usuário está autenticado

function autenticado() {
    return isset($_SESSION['id']) ? true : false;
}

# Função qu retorna os dados do usuário

function usuario() {
    if (autenticado()) {
        return lerUsuario($_SESSION['id']);
    } else {
        return false;
    }
}

# Função que retorna o id do usuário logado

function usuarioId() {
    return $_SESSION['id'];
}

# Função para informar se usuário é administrador

function administrador() {
    $usuario = usuario();
    return $usuario['adm'] ? true : false;
}

# Função para informar se usuário é o dono do sistema

function dono() {
    $usuario = usuario();
    return $usuario['dono'] ? true : false;
}

?>