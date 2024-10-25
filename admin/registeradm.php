<?php 
if(isset($_POST['cadastrarUser'])){

    include_once('../php/config.php');

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

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, nomeMaterno, dataNasc, sexo, cpf, celular, telefoneFixo, endereco, login, senha)
    VALUES ('$nome', '$nomeMat', '$dataNasc', '$sexo', '$cpf', '$celular', '$telefone', '$endereco', '$login', '$senha')");

    header('location: indexadm.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="telecall, comunicação, internet, telefonia, celular, plano" />
    <title> Site oficial - Registro Telecall</title>
    <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/register.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script type="text/javascript" src="../js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
</head>

<body>
    <script type="text/javascript" src="../js/register.js"></script>

    <header class="cabeçalho_registro">
        <a href="../HTML/home.php"><img src="../IMG/logotelecall.png" alt="logo da telecall" /></a>
    </header>

    <form action="../php/newUser.php" method="post" autocomplete="on" id="form">        <!--Formulário-->
        <h1>Cadastro Telecall</h1>

        <div>       <!--Nome-->
            <label for="nome" class="lbl-tittle">Nome Completo</label>
            <input type="text" id="nome" class="inputs required" name="nome" placeholder="Digite aqui seu nome"
                maxlength="60" autofocus oninput="nameValidate()">
            <span class="span-required">Nome deve ter no mínimo 15 caracteres. </span>
            <span class="span-right">Nome Válido ✓</span>
        </div>

        <div>       <!--Nome Materno-->
            <label for="nome-mat" class="lbl-tittle">Nome Materno</label>
            <input type="text" id="nome-mat" class="inputs required" name="nome-mat" placeholder="Digite aqui o nome materno"
            maxlength="60" oninput="nameMatValidate()">
            <span class="span-required">Nome materno deve ter no mínimo 15 caracteres. </span>
            <span class="span-right">Nome Válido ✓</span>
        </div>

        <div>       <!--Data de Nascimento-->
            <label for="dataNasc" class="lbl-tittle">Data de nascimento</label>
            <input type="date" id="dataNasc" name="dataNasc" class="inputs required" oninput="validarData()">
            <span class="span-required">Preencha sua data de nascimento neste campo. </span>
            <span class="span-right">Data Válida ✓</span>
        </div>

        <div>       <!--Sexo-->
            <label class="lbl-tittle">Sexo</label> <br />

            <input type="radio" id="rad_m" name="sexo" value="Masculino">
            <label for="rad_m">Masculino</label>

            <input type="radio" id="rad_f" name="sexo" value="Feminino">
            <label for="rad_f">Feminino</label>

            <input type="radio" id="rad_o" name="sexo" value="Outros">
            <label for="rad_o">Outros</label>
        </div>

        <div>       <!--CPF-->
            <label for="cpf" class="lbl-tittle">CPF</label> <br />
            <input type="text" id="cpf" class="inputs required" name="cpf" placeholder="Somente números"
                autocomplete="off" maxlength="14" oninput="cpfValidate()">
            <span class="span-required">Insira um CPF válido. </span>
            <span class="span-right">CPF Válido ✓</span>
        </div>

        <div>       <!--Número de celular-->
            <label for="celular" class="lbl-tittle">Celular (com DDD)</label>
            <input type="text" placeholder="(xx) xxxxxxxxx" id="celular" class="inputs required" name="celular"
                maxlength="11" oninput="number1Validate()">
            <span class="span-required">O número precisa conter o DDD com algum número válido. </span>
            <span class="span-right">Celular Válido ✓</span>
        </div>

        <div>       <!--Número de telefone fixo-->
            <label for="telefone" class="lbl-tittle">Telefone fixo</label>
            <input type="text" placeholder="(xx) xxxxxxxxx" id="telefone" class="inputs required" name="telefone"
                maxlength="10" oninput="number2Validate()">
            <span class="span-required">O número precisa conter o DDD com algum número válido. </span>
            <span class="span-right">Telefone Válido ✓</span>
        </div>

        <div>       <!--Endereço-->
            <label for="endereco" class="lbl-tittle">Endereço</label>
            <input type="text" placeholder="Endereço Completo" id="endereco" class="inputs required" name="endereco"
                maxlength="50" oninput="enderecoValidate()">
            <span class="span-required">O campo endereço precisa ser preenchido. </span>
            <span class="span-right">Endereço Válido ✓</span>
        </div>

        <div>       <!--Nome de login-->
            <label for="login" class="lbl-tittle">Nome login</label>
            <input type="text" id="login" class="inputs required" name="login" placeholder="Digite seu nome de login"
                minlength="6" oninput="loginValidate()">
            <span class="span-required">Este campo Login deve possuir 6 caracteres alfabéticos. </span>
            <span class="span-right">Login Válido ✓</span>
        </div>

        <div>       <!--Senha-->
            <label for="senha" class="lbl-tittle">Senha</label>
            <input type="password" id="senha" class="inputs required" name="senha" placeholder="Digite sua senha"
                autocomplete="off" oninput="senhaValidate()" onkeypress="return ApenasLetras(event,this);">
            <div id="icon-eye" onclick="showHide()"></div>
            <span class="span-required">Este campo deve possuir 8 caracteres alfabéticos. </span>
            <span class="span-right">De acordo ✓</span>
        </div>

        <div>       <!--Confirmação de senha-->
            <label for="conf_senha" class="lbl-tittle">Confirme sua senha</label>
            <input type="password" id="conf_senha" class="inputs required" name="senha" autocomplete="off"
                placeholder="Digite sua senha novamente" oninput="senhaComparar()">
            <div id="icon-eye2" onclick="showHide2()"></div>
            <span class="span-required">Este campo precisa corresponder com o campo senha. </span>
            <span class="span-right">✓</span>
        </div>

        <div>
        <label for="isAdmin">Administrador:</label>
        <input type="checkbox" id="isAdmin" name="isAdmin"">
        </div>

        <button type="submit" name="cadastrarUser">Criar Usuário</button>

        <div style="text-align: center;"><span id="span_cad">Cadastrando Usuário...</span></div>
    </form>


    <!--JavaScript com as validaçõs dos campos do register-->
    <script>

        let nome = document.querySelector('#nome');
        let login = document.querySelector('#login')
        let senha = document.querySelector('#senha');
        let conf_senha = document.querySelector('#conf_senha');


        const form = document.getElementById('form');
        const lbl = document.querySelectorAll('label');
        const campos = document.querySelectorAll('.required');
        const spans = document.querySelectorAll('.span-required');
        const spanright = document.querySelectorAll('.span-right');
        const spancad = document.querySelector('#span_cad');
        const nomeMat = document.querySelector('#nome-mat');
        const cpf = document.querySelector('#cpf');
        const dataNasc = document.querySelector('#dataNasc');
        const celular = document.querySelector("#celular");
        const telefone = document.querySelector("#telefone");
        const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        /* Função para configurar o erro dos campos */
        function setError(index) {
            campos[index].style.border = '2px solid #e63636';
            spanright[index].style.display = '';
            spans[index].style.display = 'block';
        }

        /* Função para retirar a config de erro dos campos */
        function removeError(index) {
            campos[index].style.border = '2px solid #42BB33';
            spans[index].style.display = '';
            spanright[index].style.display = 'block';
        }


        /* Validação dos campos do formulário */
        function nameValidate() {   /*Validando nome*/
            if (campos[0].value.length < 15) {
                setError(0);
            }
            else {
                removeError(0);
            }
        }

        function nameMatValidate() {   /*Validando nome materno*/
            if (campos[1].value.length < 15) {
                setError(1);
            }
            else {
                removeError(1);
            }
        }

        function validarData(){   /*Validando data de nascimento*/
    	    if(dataNasc.value == ''){
    		    setError(2);
    	    }
            else {
                removeError(2);
            }
        }

        function cpfValidate() {   /*Validando cpf*/
            if (campos[3].value.length != 14) {
                setError(3);
            }
            else {
                removeError(3);
            }
        }

        function number1Validate() {   /*Validando número de celular*/
            if (campos[4].value.length != 15) {
                setError(4);
            }
            else {
                removeError(4);
            }
        }

        function number2Validate() {   /*Validando número de telefone*/
            if (campos[5].value.length != 14) {
                setError(5);
            }
            else {
                removeError(5);
            }
        }

        function enderecoValidate() { /*Validando endereço*/
            if (campos[6].value.length < 8) {
                setError(6);
            }
            else {
                removeError(6);
            }
        }

        function loginValidate() {   /*Validando nome de login*/
            if (campos[7].value.length < 6) {
                setError(7);
            }
            else {
                removeError(7);
            }
        }

        function senhaValidate() {   /*Validando senha*/
            if (campos[8].value.length < 8) {
                setError(8);
            }
            else {
                removeError(8);
                senhaComparar();
            }
        }

        function ApenasLetras(e, t) {   /* Validação para aceitar apenas caracteres alfabéticos no campo senha */
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}

        function senhaComparar() {   /*Validando a confirmação de senha*/
            if (campos[8].value == campos[9].value && campos[9].value.length >= 8) {
                removeError(9);
            }
            else {
                setError(9);
            }
        }


        /* Evento para a validação do campo de cpf */
        cpf.addEventListener('keypress', () => {
            let cpflength = cpf.value.length;

            if (cpflength == 3 || cpflength == 7) {
                cpf.value += '.'
            }
            else if (cpflength == 11) {
                cpf.value += '-'
            }
        })

        /* Função para verificar se todas as validações anteriores estão corretas para cadastrar usuário */
        form.onsubmit = evento => {

            if (nome.value == '' && nome.value.length < 15) {
                evento.preventDefault();
                setError(0);
                campos[0].focus();
            }
            else if (nomeMat.value == '' && nomeMat.value.length < 15) {
                evento.preventDefault();
                setError(1);
                campos[1].focus();
            }
            else if (dataNasc.value == '') {
                evento.preventDefault();
                setError(2);
                campos[2].focus();
            }
            else if (cpf.value.length != 14) {
                evento.preventDefault();
                setError(3);
                campos[3].focus();
            }
            else if (campos[4].value.length != 15) {
                evento.preventDefault();
                setError(4);
                campos[4].focus();
            }
            else if (campos[5].value.length != 14) {
                evento.preventDefault();
                setError(5);
                campos[5].focus();
            }
            else if (campos[6].value.length < 8) {
                evento.preventDefault();
                setError(6);
                campos[6].focus();
            }
            else if (campos[7].value.length < 6) {
                evento.preventDefault();
                setError(7);
                campos[7].focus();
            }
            else if (campos[8].value.length < 8) {
                evento.preventDefault();
                setError(8);
                campos[8].focus();
            }
            else if (campos[9].value == '' && campos[9] != campos[7]) {
                evento.preventDefault();
                setError(9);
                campos[9].focus();
            }
            else {
                cadastrar();
            }
            

        }

        /*JQuery para validação do campo celular*/
        $(document).ready(function () {
            $('body').on('focus', '#celular', function () {
                var maskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                    options = {
                        onKeyPress: function (val, e, field, options) {
                            field.mask(maskBehavior.apply({}, arguments), options);

                            if (field[0].value.length >= 14) {
                                var val = field[0].value.replace(/\D/g, '');
                                if (/\d\d(\d)\1{7,8}/.test(val)) {
                                    field[0].value = '';
                                    alert('Telefone Invalido');
                                }
                            }
                        }
                    };
                $(this).mask(maskBehavior, options);
            });
        });


        /* JQuery para validação do campo telefone */
        $(document).ready(function () {
            $('body').on('focus', '#telefone', function () {
                var maskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 0000-0000' : '(00) 0000-0000';
                },
                    options = {
                        onKeyPress: function (val, e, field, options) {
                            field.mask(maskBehavior.apply({}, arguments), options);

                            if (field[0].value.length >= 14) {
                                var val = field[0].value.replace(/\D/g, '');
                                if (/\d\d(\d)\1{7,8}/.test(val)) {
                                    field[0].value = '';
                                    alert('Telefone Invalido');
                                }
                            }
                        }
                    };
                $(this).mask(maskBehavior, options);
            });
        });
        

        /* script para a função de mostrar/ocultar os dados do campo senha */
        const password = document.getElementById('senha');
        const icon = document.getElementById('icon-eye');
        const icon2 = document.getElementById('icon-eye2');

        function showHide() {
            if(password.type === 'password') {
                password.setAttribute('type', 'text');
                icon.classList.add('hide');
            }
            else {
                password.setAttribute('type', 'password');
                icon.classList.remove('hide');
            }
        }

        function showHide2() {
            if(conf_senha.type === 'password') {
                conf_senha.setAttribute('type', 'text');
                icon2.classList.add('hide');
            }
            else {
                conf_senha.setAttribute('type', 'password');
                icon2.classList.remove('hide');
            }
        }
    </script>
</body>

</html>