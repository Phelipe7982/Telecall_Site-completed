<?php 
include('../php/start.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="keywords" content="telecall, comunicação, internet, telefonia, celular, plano"/>
        <link rel="shortcut icon" href="../IMG/icontelecall.png" type="image/x-icon"/>
        <link rel="stylesheet" href="../CSS/home.css"/>
        <script src="../js/script.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <title>Eventos - Telecall</title>
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
                <button id="btn-mobile" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>        <!--Butão mobile telecall-->
            </nav>

            <button id="btn-cliente" name="btn-cliente"><i class="fa-solid fa-user"></i><p>
                    <?php
                     echo "$logado";
                    ?>
                    </p>
            </button>

        </header>

        <section class="header_event">  <!--Parte inicial de apresentação da página-->
            <div id="title_event">
                <img src="../IMG/icone-enventos.png" alt="ícone de prédios de eventos">
                <h1>Eventos</h1>
            </div>
            <p>Soluções de internet e telefonia <br> temporárias para seu evento.</p>
            <button>contrate aqui</button>
        </section>

        <section class="content_event">     <!--Seção apresentando serviços para eventos-->
            <h2>Serviços Para Eventos</h2>
            <hr>
            
            <div id="content_event">        

                <div class="box_event">     <!--Box 1 de eventos-->
                    <i class="fa-solid fa-chart-simple"></i>
                    <h3>Internet Dedicada</h3>
                    <p>
                        Acesso de internet dedicado com o máximo de qualidade, 
                        disponibilidade e segurança. Possui garantia de velocidade 
                        contratada e simetria de banda para Download e Upload. Inclui conexão Wi-Fi.
                    </p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_event">     <!--Box 2 de eventos-->
                    <i class="fa-solid fa-chart-simple"></i>
                    <h3>Hotspot</h3>
                    <p>
                        Hotspot Disponibilize acesso grátis à internet através de login social 
                        ou cadastro de e-mail e transforme o WiFi do seu evento em uma 
                        ferramenta de marketing e vendas.
                    </p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_event">     <!--Box 3 de eventos-->
                    <i class="fa-solid fa-phone"></i>
                    <h3>PABX IP Virtual Temporário</h3>
                    <p>
                        Todos os benefícios de uma solução de telefonia inteligente 
                        na nuvem para o seu evento. Contempla o fornecimento de aparelhos.
                    </p>
                    <button>Saiba Mais</button>
                </div>
            </div>

        </section>

        <footer>         <!--Rodapé da página-->
            <div id="footer_content">

                <div id="footer_contacts">
                    <a href="../HTML/home.php"><img src="../IMG/logotelecall.png" alt="logo telecall"></a>
                    
                    <div id="footer_socialmedia">   <!--Parte das mídias no footer-->
                        <a href="https://www.instagram.com/telecallbr/" class="footer-link" id="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>

                        <a href="https://www.facebook.com/TelecallBr" class="footer-link" id="facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>

                        <a href="https://www.linkedin.com/company/telecall/" class="footer-link" id="Linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

                        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial" class="footer-link" id="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div id="darkmode">
                        <input type="checkbox" class="checkbox" id="chk" onclick="toggleDarkMode()">

                        <label class="btn-dark" for="chk">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                </div>

                <ul class="footer-list">    <!--Parte de colunas do footer 1-->
                    <li><a href="#">Institucional</a></li>
                    <li><a href="../HTML/home.php">Depoimentos</a></li>
                    <li><a href="#">Wholesale</a></li>
                    <li><a href="#">empresas</a></li>
                    <li><a href="https://carreirastelecall.solides.jobs/" target="_blank">Carreiras</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Vendas</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Política e Privacidade</a></li>
                </ul>

                <ul class="footer-list">     <!--Parte de colunas do footer 2-->
                    <li><h3>Contratos</h3></li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/manual-dos-telefones.pdf"
                       target="_blank" >Manual dos Telefones</a>
                    </li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/TELECALL-Contrato-Prestacao-STFC.pdf"
                       target="_blank" >Prestação STFC</a>
                    </li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/TELECALL-Contrato-de-Adesao-e-Prestacao-do-SCM-BL.pdf"
                       target="_blank" >Adesão e Prestação do SCM BL</a>
                    </li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/TELECALL-Contrato-de-Adesao-e-Prestacao-do-SCM-IP.pdf"
                       target="_blank" >Adesão e Prestação do SCM IP</a>
                    </li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/TELECALL-Contrato-de-prestacao-do-servico-movel-pessoal.pdf"
                       target="_blank" >Prestação SMP</a>
                    </li>
                    <li><a href="https://www.telecall.com/wp-content/uploads/2023/01/Lista-de-Municipios-por-Estado-Atendidos-por-SMP-pela-Telecall.pdf"
                       target="_blank" >Cobertura SMP</a>
                    </li>
                </ul>
            </div>

            <div id="footer_copyright">
                <p>Copyright &#169 2018 Telecall. Todos os direitos reservados.</p>
            </div>
        </footer>
        <script src="../js/darkmode.js" defer></script>
    </body>
</html>