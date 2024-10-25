<?php
session_start();

# DEPENDÊNCIAS
require_once('../basedados/conexao.php');
require_once('../basedados/repositorio-usuario.php');
require_once('../validacao/validar-usuarios.php');
require_once('../validacao/validar-senha.php');
require_once('../auxiliadores/auxiliador.php');

$conn = estabelecerConexao();

# VERBOS Post
# Controla a rota para criação e atualização de um usuário na página usuario
if (isset($_POST['usuario'])) {

    # controla a criação de novos usuarios
    if ($_POST['usuario'] == 'criar') {

        criar($_POST, $conn);
    }

    # controla a atualização de dados dos usuarios
    if ($_POST['usuario'] == 'atualizar') {

        atualizar($_POST, $conn);
    }

    # controla a atualização de dados de perfil dos usuarios
    if ($_POST['usuario'] == 'perfil') {

        atualizarPerfil($conn, $dados);
    }

    # controla a atualização da senha de usuarios
    if ($_POST['usuario'] == 'senha') {

        alterarSenha($conn, $idUsuario, $novaSenha);
    }
}

# VERBOS get
# Controla a rota para o carregamento de um usuário na página atualizar-usuario
if (isset($_GET['usuario'])) {

    # Controla a rota para a criação de novos usuários
    if ($_GET['usuario'] == 'atualizar') {

        # Recupera dados do usuario pelo id recebido
        $usuario = lerUsuario($_GET['id'], $conn);

        # Cria a sessão ação atualizar para manipular o botão de envio do formulário usuário
        $usuario['acao'] = 'atualizar';

        # Envia parâmetros com dados do usuário para a página usuário recuperar dados para manipular a alteração
        $params = '?' . http_build_query($usuario);
        header('Location: ../admin/usuarios.php' . $params);
    }

    # Controla a rota para a exclusão de usuários
    if ($_GET['usuarios'] == 'deletar') {

        $usuario = lerUsuario($_GET['id'], $conn);

        # Validação para não permitir deletar usuário se ele for dono do sistema
        if ($usuario['dono']) {

            # Define mensagem específica de erro e retorno para painel adm
            $_SESSION['erros'] = ['Este usuário é proprietário do sistema e não pode ser apagado.'];

            # Redireciona usuário com dados do formulário anteriormente preenchido
            header('location: ../admin/indexadm.php');

            return false;
        }
    }

    # Deleta usuário
    $sucesso = deletar($usuario, $conn);

    # Redireciona usuário para página admin com mensagem de sucesso
    if ($sucesso) {
        $_SESSION['sucesso'] = 'Usuário deletado com sucesso!';

        header('location: ../admin/indexadm.php');
    }
}

# FUNÇÕES

function atualizar($requisicao, $conn)
{
    global $conn; // Adicionado para utilizar a conexão global

    # Valida dados do usuário
    $dados = usuarioValido($requisicao);

    # Verifica se existe erros de validação
    if (isset($dados['invalido'])) {

        # Recupera mensagem de erro, caso exista
        $_SESSION['erros'] = $dados['invalido'];

        # Cria a sessão ação atualizar para manipular o botão de envio do formulário
        $_SESSION['acao'] = 'atualizar';

        $parms = '?' . http_build_query($requisicao);

        header('location: ../admin/usuarios.php' . $parms);

        return false;
    }

    $usuario = lerUsuario($dados['id'], $conn);

    # Validação para não permitir deletar usuário se ele for o dono do sistema
    if ($usuario['dono'] && $dados['adm'] == false) {
        #  Define mensagem específica de erro e retorno para painel de adm
        $_SESSION['erros'] = ['Este usuário é proprietário do sistema e não pode deixar de ser administrador.'];

        header('location: ../admin/indexadm.php');

        return false;
    }

    $sucesso = atualizarUsuario($conn, $dados);

    # Redireciona usuário para página de alteração com mensagem de sucesso
    if ($sucesso) {

        $_SESSION['sucesso'] = 'Usuário alterado com sucesso';

        $dados['acao'] = 'atualizar';

        $params = '?' . http_build_query($dados);

        header('location: ../admin/usuarios.php' . $params);
    }
}

# Função deletar usuário
function deletar($usuario, $conn)
{
    global $conn; // Adicionado para utilizar a conexão global

    $retorno = deletarUsuario($conn, $usuario['id']);

    return $retorno;
}

function criar($requisicao, $conn)
{
    global $conn; // Adicionado para utilizar a conexão global

    # Valida dados do usuario
    $dados = usuarioValido($requisicao);

    if (isset($dados['invalido'])) {

        # Recupera mensagem de erro, caso exista, e coloca em sessao para recuperação do formulario
        $_SESSION['erros'] = $dados['invalido'];

        # Recupera dados do formulario para recuperar preenchimento anterior
        $params = '?' . http_build_query($requisicao);

        header('location: ../admin/usuarios.php' . $params);

        return false;
    }

   
}

function atualizarPerfil($conn, $dados)
{
    $sql = "UPDATE usuarios SET nome = ?, dataNasc = ?, cpf = ?, celular = ?, endereco = ?, login = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da query: " . $conn->error);
    }

    $stmt->bind_param(
        "ssssssi",
        $dados['nome'],
        $dados['dataNasc'],
        $dados['cpf'],
        $dados['celular'],
        $dados['endereco'],
        $dados['login'],
        $dados['id']
    );

    $sucesso = $stmt->execute();

    $stmt->close();

    return $sucesso;
}

function alterarSenha($conn, $idUsuario, $novaSenha)
{
    // Criptografa a nova senha
    $senhaCriptografada = password_hash($novaSenha, PASSWORD_DEFAULT);

    $sql = "UPDATE usuarios SET senha = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da query: " . $conn->error);
    }

    $stmt->bind_param("si", $senhaCriptografada, $idUsuario);

    $sucesso = $stmt->execute();

    $stmt->close();

    return $sucesso;
}

function estabelecerConexao()
{
    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(!$conn){
        die("Conexão falhou!" . mysqli_connect_error());
    }

    return $conn;
}