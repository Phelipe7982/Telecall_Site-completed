<?php 
include('../layout/header.php');
?>

    <section class="header_tele">    <!--Apresentação de telefonia-->
    
        <div id="title_telefonia">
            <img src="../IMG/icone-telefonia.png" alt="ícone de telefonia">
            <h1>Telefonia</h1>
        </div>

        <p>Soluções de telefonia de <br> forma rápida e inteligente.</p>
        <button>contrate aqui</button>

    </section>

    <section class="content_tele">       <!--Serviços de telefonia da telecall-->
        <h2>Serviços de Telefonia</h2>
        <hr>
        
        <div id="content_tele">      <!--Box 1-->
            <div class="box_tele">
                <i class="fa-solid fa-phone-volume" style="color: #c70224;"></i>
                <h3>PABX IP Virtual</h3>
                <p>Telefonia na nuvem de alta qualidade.</p>
                <button>Saiba Mais</button>
            </div>

            <div class="box_tele">      <!--Box 2-->
                <i class="fa-solid fa-network-wired" style="color: #c70224;"></i>
                <h3>E1 / SIP Trunk</h3>
                <p>Soluções de telefonia inteligentes.</p>
                <button>Saiba Mais</button>
            </div>

            <div class="box_tele">      <!--Box 3-->
                <i class="fa-solid fa-arrow-right-to-city" style="color: #c70224;"></i>
                <h3>Números 0800 e 40XX</h3>
                <p>Numeros especiais de acordo com a necessidade de sua empresa.</p>
                <button>Saiba Mais</button>
            </div>

        </div>
    </section>

    <section class="content_tele" id="content_tele2">       <!--Serviços de eventos-->
        <h2>Serviços para Eventos</h2>
        <hr>
        
        <div id="content_tele">
            
            <div class="box_tele">          <!--Box 1-->
                <i class="fa-solid fa-phone-volume" style="color: #c70224;"></i>
                <h3>PABX IP Virtual Temporário</h3>
                <p>Solução de telefonia na nuvem temporária para eventos.</p>
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