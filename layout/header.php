<?php 
include('../php/start.php');
include_once('../php/config.php');
require_once('../basedados/repositorio-usuario.php');



if (isset($_SESSION['login'])) {
    $login_usuario = $_SESSION['login'];

    // Consulta para obter o valor do campo 'adm' para o usuário logado
    $query = "SELECT adm FROM usuarios WHERE login = '$login_usuario'";

    $resultado = $conexao->query($query);

    // Verifica se a consulta foi bem-sucedida
    if ($resultado) {
        // Obtém os dados da consulta
        $row = $resultado->fetch_assoc();

     // Libera o resultado da consulta
        $resultado->free();
    } else {
        // Se a consulta falhou, exibe o erro
        echo "Erro na consulta: " . $mysqli->error;
    }
} else {
    echo "Usuário não está logado";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="telecall, comunicação, internet, telefonia, celular, plano"/>
        <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../CSS/home.css"/>
        <link rel="stylesheet" href="../CSS/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <script src="../js/script.js" defer></script>
        <script src="../js/html2pdf.bundle.js"></script>
        <title>Site Oficial - Telecall</title>
    </head>
    <body>
        <header class="cabeçalho_home">     <!--Menu Telecall-->
            <a href="../HTML/home.php" id="logo"><img src="../IMG/icontelecall.png" alt="logo da telecall"/></a>
            <nav id="menu">
                <ul id="item-menu">      <!--Itens do menu telecall-->

                    <li class="dropdown">  
                        <a href="../HTML/Internet.php">Internet</a>     <!--Item principal-->
                        
                        <div class="drop-menu">
                            <a href="">Internet Dedicada</a>
                            <a href="">Banda Larga</a>          <!--Itens dropdown-->
                            <a href="">Wi-Fi</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/telefonia.php">Telefonia</a>      <!--Item principal-->

                        <div class="drop-menu">
                            <a href="">PABX IP Virtual</a>
                            <a href="">E1 / SIP Trunk</a>       <!--Itens dropdown-->
                            <a href="">Números 0800/40xx</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/Rede-infra.php">Rede e infraestrutura</a>     <!--Item principal-->

                        <div class="drop-menu">
                            <a href="">Ponto-a-Ponto</a>
                            <a href="">MPLS</a>                 <!--Itens dropdown-->
                            <a href="">FIbra Apagada e Dutos</a>
                            <a href="">Co-locations</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/mob.php">Mobilidade</a>       <!--Item principal-->

                        <div class="drop-menu">
                            <a href="">Celular Empresarial</a>      <!--Itens dropdown-->
                            <a href="">MVNA/E</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/cpaas.php">CPaas</a>      <!--Item principal-->

                        <div class="drop-menu">
                            <a href="../HTML/2fa.php">2FA</a>
                            <a href="../HTML/numero-mask.php">Número Máscara</a>       <!--Itens dropdown-->
                            <a href="../HTML/google-verified.php">Google Verified Calls</a>
                            <a href="../HTML/SMS.php">SMS Programável</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/Outras-solucoes.php">Outras soluções</a>      <!--Item principal-->

                        <div class="drop-menu">
                            <a href="">Outsourcing de Hardware</a>
                            <a href="../HTML/eventos.php">Eventos</a>      <!--Itens dropdown-->
                        </div>
                    </li>

                </ul>
                <button id="btn-mobile"><i class="fa-solid fa-bars"></i></button>        <!--Butão mobile telecall-->

                <div class="sub-menu-wrap" id="subMenu"> <!--Menu do perfil-->
                    <div class="sub-menu">
                        <div class="user-info">
                        </div>

                        <a href='../HTML/editarPerfil.php' class="sub-menu-link">
                            <i class="fa-solid fa-user"></i>
                            <p>Editar perfil</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-solid fa-gear"></i>
                            <p>Configurções</p>
                            <span>></span>
                        </a>
                        <?php 
                        if ($row['adm'] == 1 ) {
                            echo '<a href="../admin/indexadm.php" class="sub-menu-link">
                            <i class="fa-solid fa-key"></i>
                            <p>Painel administrativo</p>
                            <span>></span>';
                        }
                        ?>
                        </a>
                        <a href="../php/logout.php" class="sub-menu-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Sair</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="btn-user">      <!--Butão da área do cliente-->

                    <button id="btn-cliente" name="btn-cliente"><i class="fa-solid fa-user"></i><p>
                    <?php
                     echo "$logado";
                    ?>
                    </p></button>

            </div>

        </header>