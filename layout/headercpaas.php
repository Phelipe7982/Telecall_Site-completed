<?php 
include('../php/start.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="telecall, comunicação, internet, telefonia, celular, plano, cpaas"/>
        <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon"/>
        <link rel="stylesheet" href="../CSS/home.css"/>
        <script src="../js/script.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <title>Cpaas - Telecall</title>

        <style>
            ::-webkit-scrollbar {
            width: 7px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(0, 167, 218);
        }

        </style>
    </head>
    <body>
        <header class="cabeçalho_cpaas">
            <a href="../HTML/home.php" id="logo"><img src="../IMG/icontelecall.png" alt="logo da telecall"/></a>
            <nav id="menucp">
                <ul id="item-menu-cpaas">

                    <li class="dropdown">
                        <a href="../HTML/Internet.php">Internet</a>    <!--item do menu-->
                        
                        <div class="drop-menu">
                            <a href="">Internet Dedicada</a>
                            <a href="">Banda Larga</a>          <!--Dropdown de itens do menu-->
                            <a href="">Wi-Fi</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/telefonia.php">Telefonia</a>   <!--item do menu-->

                        <div class="drop-menu">
                            <a href="">PABX IP Virtual</a>
                            <a href="">E1 / SIP Trunk</a>       <!--Dropdown de itens do menu-->
                            <a href="">Números 0800/40xx</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/Rede-infra.php">Rede e infraestrutura</a>  <!--item do menu-->

                        <div class="drop-menu">
                            <a href="">Ponto-a-Ponto</a>
                            <a href="">MPLS</a>     
                            <a href="">FIbra Apagada e Dutos</a>        <!--Dropdown de itens do menu-->
                            <a href="">Co-locations</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/mob.php">Mobilidade</a>    <!--item do menu-->

                        <div class="drop-menu">
                            <a href="">Celular Empresarial</a>      <!--Dropdown de itens do menu-->
                            <a href="">MVNA/E</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/cpaas.php">CPaas</a>   <!--item do menu-->

                        <div class="drop-menu">
                            <a href="../HTML/2fa.php">2FA</a>
                            <a href="../HTML/numero-mask.php">Número Máscara</a>
                            <a href="../HTML/google-verified.php">Google Verified Calls</a>        <!--Dropdown de itens do menu-->
                            <a href="../HTML/SMS.php">SMS Programável</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="../HTML/Outras-solucoes.php">Outras soluções</a>   <!--item do menu-->

                        <div class="drop-menu">
                            <a href="">Outsourcing de Hardware</a>      <!--Dropdown de itens do menu-->
                            <a href="../HTML/eventos.php">Eventos</a>
                        </div>
                    </li>

                </ul>
                <button id="btn-mobile-cpaas"><i class="fa-solid fa-bars"></i></button>  <!--Botão de menu para celular-->
            </nav>

                <button id="btn-cliente" name="btn-cliente"><i class="fa-solid fa-user"></i><p>
                    <?php
                     echo "$logado";
                    ?>
                    </p>
                </button>
        </header>