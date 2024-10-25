<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="telecall, comunicação, internet, telefonia, celular, plano"/>
        <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="stylesheet" href="../CSS/login.css"/>
        <script src="../js/script.js" defer></script>
        <title>Telecall - Tela de Login</title>
    </head>
    <body>

        <header class="cabeçalho_login">
            <a href="../HTML/home.php"><img src="../IMG/logotelecall.png" alt="logo da telecall"/></a>
        </header>

        <main class="container">    <!--Toda a box login-->

        

            <section class="cont1">

                <!--Primeira Coluna-->

                <div class="coluna1">
                    <h2 class="titulo" id="primario">Não possui uma conta?</h2>
                    <p class="descricao" id="descricao-primaria">Realize seu cadastro de forma simples</p>
                    <p class="descricao" id="descricao-primaria">e rápida para poder ter acesso ao nosso site</p>
                    <a href="register.php"><button class="btn" id="cadastrar">CADASTRAR</button></a>
                </div>


                <!--Segunda Coluna-->

                <div class="coluna2">
                    <h2 class="titulo" id="secundario">Logue-se com a Telecall</h2>
                    <p class="descricao" id="descricao-secundaria">De forma rápida e segura:</p>
                    <form action="../php/login.php" class="form" method="post" autocomplete="on">
                        <p id="msgError">Usuário ou senha inválidos</p>

                        <label class="label-input" id="userLabel" for=""><i class="fa-solid fa-user"></i><input type="text" placeholder="Login" id="user" name="login"></label>

                        <label class="label-input" id="senhaLabel" for=""><i class="fa-solid fa-lock"></i><input type="password" placeholder="Senha" id="senha" name="senha"></label>

                        <button id="entrar" class="btn" name="submit" type="submit">ENTRAR</button>
                    </form>
                </div>
            </section>
        </main>
        <script>

            var user = document.getElementById('user');
            var senha = document.getElementById('senha');
            var error = document.getElementById('msgError');

            form.onsubmit = evento => {

                if (user.value == '') {
                    evento.preventDefault();
                    error.style.display = 'block';
                }
                else if (senha.value == '') {
                    evento.preventDefault();
                    error.style.display = 'block';
                }
                else {
                    cadastrar();
                }
            }
        </script>
    </body>
</html>