<?php
function senhaValida($requisicao) {
    foreach($requisicao as $key => $value) {
        $requisicao[$key] = trim($requisicao[$key]);
    }

    if (empty($requisicao['nome']) || strlen($requisicao['nome']) < 3 || strlen($requisicao['nome']) > 255) {
        $erros['nome'] = 'O campo nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }

    if (!empty($requisicao['senha']) && strlen($requisicao['senha']) < 8) {
        $erros['senha'] = 'O campo senha não pode estar vazio e deve ter somente letras';
    }

    if (!empty($requisicao['conf_senha']) && strlen($requisicao['conf_senha']) != $requisicao['senha']) {
        $erros['conf_senha'] = 'O campo confirmar senha deve ser igual ao senha.';
    }

    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    return $requisicao;
}
?>