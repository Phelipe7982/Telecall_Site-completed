<?php 
include('../layout/header.php');
?>

        <section class="header_rede">      <!--Apresentação Rede-->
            <div id="title_rede">
                <img src="../IMG/Icone-rede-infra.png" alt="ícone de servidor">
                <h1>Rede e Infraestrutura</h1>
            </div>
            <p>Soluções de conectividade sob <br> medida parar sua empresa.</p>
            <button>contrate aqui</button>
        </section>

        <section class="content_rede">      <!--Seção serviços rede-->
            <h2>Serviços de Rede e Infraestrutura</h2>
            <hr>
            
            <div id="content_rede">     <!--Box 1-->
                <div class="box_rede">
                    <i class="fa-solid fa-circle-nodes"></i>
                    <h3>Ponto-a-Ponto</h3>
                    <p>Acesso dedicado para ligação entre dois pontos</p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_rede">      <!--Box 2-->
                    <i class="fa-solid fa-cloud-arrow-down"></i>
                    <h3>MPLS</h3>
                    <p>Formação de rede com protocolo MPLS.</p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_rede">      <!--Box 3-->
                    <i class="fa-solid fa-tower-broadcast"></i>
                    <h3>FIbra Apagada e Dutos</h3>
                    <p>Locação privada de fibra apagada e dutos.</p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_rede">      <!--Box 4-->
                    <i class="fa-solid fa-server"></i>
                    <h3>Co-locations</h3>
                    <p>Locação de espaço em rack no Data Center da Telecall.</p>
                    <button>Saiba Mais</button>
                </div>

            </div>
        </section>

        <?php 
            include('../layout/footer.php');
        ?>
        <script src="../js/darkmode.js" defer></script>
    </body>
</html>