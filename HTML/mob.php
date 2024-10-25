<?php 
include('../layout/header.php');
?>

        <section class="header_mob">         <!--Apresentação mobilidade-->
            <div id="title_mob">
                <img src="../IMG/logo-mob.png" alt="logo de celular">
                <h1>Mobilidade</h1>
            </div>
            <p>As melhores soluções em <br> mobilidade para sua empresa.</p>
            <button>contrate aqui</button>
        </section>

        <section class="content_mob">        <!--Serviços mobilidade-->
            <h2>Serviços de Mobilidade</h2>
            <hr>
            
            <div id="content_box">

                <div class="box_mob">
                    <i class="fa-solid fa-mobile"></i>      
                    <h3>Celular Empresarial</h3>
                    <p>Monte planos de celular personalizados para a sua empresa.</p>        <!--Box 1-->
                    <button>Saiba Mais</button>
                </div>

                <div class="box_mob">
                    <i class="fa-solid fa-microchip"></i>
                    <h3>MVNA/E</h3>
                    <p>Sua empresa operando no mercado móvel com a melhor cobertura do Brasil.</p>      <!--Box 2-->
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