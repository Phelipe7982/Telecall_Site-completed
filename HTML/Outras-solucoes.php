<?php 
include('../layout/header.php');
?>

        <section class="header_sol">        <!--Apresentação Soluções-->
            <div id="title_sol">
                <img src="../IMG/icone-outras.png" alt="logo de quebra-cabeça">
                <h1>Outras Soluções</h1>
            </div>
            <p>Serviços inteligentes sob medidas.</p>
            <button>contrate aqui</button>
        </section>

        <section class="content_sol">       <!--Serviços de soluções telecall-->
            <h2>Outras Soluções</h2>
            <hr>
            
            <div id="content_sol">
                <div class="box_sol">
                    <i class="fa-solid fa-desktop"></i>
                    <h3>Outsourcing de Hardware</h3>        <!--Box 1-->
                    <p>Locação de equipamentos de TI.</p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_sol">
                    <i class="fa-solid fa-champagne-glasses"></i>       <!--Box 2-->
                    <h3>Eventos</h3>
                    <p>Soluções de internet e telefonia temporárias para seu evento.</p>        
                    <a href="eventos.php"><button>Saiba Mais</button></a>
                </div>
            </div>
        </section>
        
        <?php 
            include('../layout/footer.php');
        ?>
        <script src="../js/darkmode.js" defer></script>
    </body>
</html>