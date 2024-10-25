<?php 
include('../layout/header.php');
?>
        
        <section class="header_net">        <!--Seção de apresentação internet--> 
            <div id="title_net">
                <img src="../IMG/Icone-rede-infra.png" alt="ícone de servidor">
                <h1>Internet</h1>
            </div>
            <p>Soluções de internet em fibra de <br> altíssima velocidade.</p>
            <button>contrate aqui</button>
        </section>
        
        <section class="content_net">       <!--Seção de serviços internet--> 
            <h2>Serviços de Internet</h2>
            <hr>
            
            <div id="content_net">
                <div class="box_net">
                    <i class="fa-solid fa-signal"></i>     <!--Box 1-->  
                    <h3>Internet Dedicada</h3>
                    <p>Internet dedicada de máxima qualidade, disponibilidade e segurança.</p>
                    <button>Saiba Mais</button>
                </div>

                <div class="box_net">
                    <i class="fa-solid fa-globe"></i>
                    <h3>Banda Larga</h3>                                       
                    <p>Internet em fibra ótica de alta qualidade e velocidade.</p>   <!--Box 2-->  
                    <button>Saiba Mais</button>
                </div>

                <div class="box_net">
                    <i class="fa-solid fa-wifi"></i>
                    <h3>Wi-Fi</h3>
                    <p>Internet sem fio de alta qualidade e velocidade.</p>     <!--Box 3-->  
                    <button>Saiba Mais</button>
                </div>

            </div>
        </section>
        
        <section class="content_net" id="content2">      <!--Serviços para eventos-->  
            <h2>Serviços para Eventos</h2>
            <hr>
            
            <div id="content_net">
                <div class="box_net">
                    <i class="fa-solid fa-signal"></i>
                    <h3>Link Dedicado Temporário com Wi-fi</h3>
                    <p>Internet dedicada temporária para evento de todos os tamanhos.</p>        <!--Box 1-->  
                    <button>Saiba Mais</button>
                </div>
                <div class="box_net">
                    <i class="fa-solid fa-signal"></i>
                    <h3>Hotspot</h3>
                    <p>Transforme o WIFI da sua empesa em uma ferramenta de marketing e vendas</p>       <!--Box 2-->  
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