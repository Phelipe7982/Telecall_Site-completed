<?php

function validarRegistro($requisicao) {

    foreach ($requisicao as $key => $value) {
        $requisicao[$key] = trim($requisicao[$key]);
    }

    if(empty($requisicao['nome']) || strlen($requisicao['nome']) < 3 || strlen($requisicao['nome']) > 255) {
        $erros['nome'] = 'O campo nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }

    if (!filter_var($requisicao['login'], FILTER_VALIDATE_EMAIL)) {
        $erros['login'] = 'O campo login não pode estar vazio e deve ter 6 caracteres';
    }

    if (lerUsuarioPorLogin($requisicao['login'])) {
        $erros['login'] = 'Login já registrado em nosso sistema.';
        return ['invalido' => $erros];
    }

    if (empty($requisicao['senha']) && strlen($requisicao['senha']) < 8) {
        $erros['senha'] = 'O campo senha não pode estar vazio e deve ter somente letras.';
    }

    if ($requisicao['conf_senha'] != $requisicao['senha']) {
        $erros['conf_senha'] = 'O campo confirmar senha deve ser igual a senha.';
    }

    if (isset($erros)) {
        return['invalido' => $erros];
    }

    return $requisicao;
}
?>