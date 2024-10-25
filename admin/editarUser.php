<?php

    if(!empty($_GET['id']))
    {
        include_once('../php/config.php');
        
        $id = $_GET['id'];

        // Usando prepared statement para evitar SQL injection
        $sqlSelect = "SELECT * FROM usuarios WHERE id=?";
        $stmt = $conexao->prepare($sqlSelect);
        $stmt->bind_param("i", $id); // "i" indica que $id é um inteiro
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $dataNasc = $user_data['dataNasc'];
                $sexo = $user_data['sexo'];
                $cpf = $user_data['cpf'];
                $celular = $user_data['celular'];
                $endereco = $user_data['endereco'];
                $login = $user_data['login'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            header('Location: ../admin/indexadm.php');
        }

        $stmt->close(); // Fechar a declaração preparada
    }
    else
    {
        header('Location: ../admin/indexadm.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site oficial - Criar Usuário</title>
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
    <a href="../admin/indexadm.php">Voltar</a>
    <div class="box">
        <form action="../php/saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome;?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNasc" id="dataNasc" value="<?php echo $dataNasc;?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha;?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" value="<?php echo $login;?>" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="celular" id="celular" class="inputUser" value="<?php echo $celular;?>">
                    <label for="celular" class="labelInput">Celular</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco;?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>