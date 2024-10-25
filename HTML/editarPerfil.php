<?php

session_start();

if (isset($_SESSION['login'])) 
    {
        include_once('../php/config.php');
        $login_usuario = $_SESSION['login'];

        // Usando prepared statement para evitar SQL injection
        $sqlSelect = "SELECT * FROM usuarios WHERE login = ?";
        $stmt = $conexao->prepare($sqlSelect);
        $stmt->bind_param("s", $login_usuario); // "s" indica que $login_usuario é uma string
        $stmt->execute();
        $result = mysqli_stmt_get_result($stmt);


        if($result->num_rows > 0)
        {
            $user_perfil = $result->fetch_assoc();

            $nome_atual = $user_perfil['nome'];
            $dataNasc_atual = $user_perfil['dataNasc'];
            $sexo_atual = $user_perfil['sexo'];
            $cpf_atual = $user_perfil['cpf'];
            $celular_atual = $user_perfil['celular'];
            $endereco_atual = $user_perfil['endereco'];
            $login_atual = $user_perfil['login'];
            $senha_atual = $user_perfil['senha'];

            $stmt->close(); // Fechar a declaração preparada
        } else {
            echo "Erro ao obter dados do perfil";
            exit();
        }

        if(isset($_POST['update_dados']))
        {
            $novo_nome = $_POST['novo_nome'];
            $novo_login = $_POST['novo_login'];
            $novo_senha = $_POST['novo_senha'];
            $novo_celular = $_POST['novo_celular'];
            $novo_sexo = $_POST['novo_sexo'];
            $novo_dataNasc = $_POST['novo_dataNasc'];
            $novo_endereco = $_POST['novo_endereco'];
            
            $sqlUpdate = "UPDATE usuarios SET nome= ?, senha= ? ,celular= ? ,sexo= ? ,dataNasc= ? ,endereco= ?, login= ?";
            $stmt = $conexao->prepare($sqlUpdate);
            $stmt->bind_param("sssssss", $novo_nome, $novo_senha, $novo_celular, $novo_sexo, $novo_dataNasc, $novo_endereco, $novo_login);
            $stmt->execute();
    
            $stmt->close();
    
            header('Location: ../HTML/home.php');
            exit();
        }

    }

?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site oficial - Editar dados</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            margin: 30px 0 30px 0;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid #ca1c2a;
        }
        legend{
            border: 1px solid #ca1c2a;
            padding: 10px;
            text-align: center;
            background-color: #ca1c2a;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #ca1c2a;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,#ca1c2a, #70000E);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,#70000E,#ca1c2a);
        }
    </style>
</head>
<body>
    <a href="../html/home.php">Voltar</a>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="novo_nome" id="novo_nome" class="inputUser" value="<?php echo $nome_atual;?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="novo_dataNasc" id="novo_dataNasc" value="<?php echo $dataNasc_atual;?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="novo_senha" id="novo_senha" class="inputUser" value="<?php echo $senha_atual;?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="novo_login" id="novo_login" class="inputUser" value="<?php echo $login_atual;?>" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="novo_celular" id="novo_celular" class="inputUser" value="<?php echo $celular_atual;?>">
                    <label for="celular" class="labelInput">Celular</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="novo_sexo" value="feminino" <?php echo ($sexo_atual == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="novo_sexo" value="masculino" <?php echo ($sexo_atual == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="novo_sexo" value="outro" <?php echo ($sexo_atual == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="novo_endereco" id="novo_endereco" class="inputUser" value="<?php echo $endereco_atual;?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
				<input type="hidden">
                <input type="submit" name="update_dados" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>