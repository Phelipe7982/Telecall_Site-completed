<?php 

require_once('../basededados/repositorio-usuarios.php');

function validarLogin($requisicao) {
    foreach ($requisicao as $key => $value) {
        $requisicao[$key] = trim($requisicao[$key]);
    }

    if (!filter_var($requisicao['login'], FILTER_VALIDATE_EMAIL)) {
        $erros['login'] = 'O campo login não pode estar vazio e deve ter 8 caracteres';
    }

    if (empty($requisicao['senha']) || strlen($requisicao['senha']) < 8) {
        $erros['senha'] = 'O campo senha não pode estar vazio';
    }

    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    return $requisicao;
}

function validarSenha($requisicao) {
    
    if (!isset($_SESSION['id'])) {

        $usuarios = lerUsuarioPorLogin($requisicao['login']);

        if (!$usuarios) {
            $erros['login'] = 'Verifique seu login';
        }

        if (!password_verify($requisicao['senha'], $usuarios['senha'])) {
            $erros['senha'] = 'Verifique seu login ou senha.';
        }

        if (isset($erros)) {
            return ['invalido' => $erros];
        }

        return $usuarios;
    }
}
?>