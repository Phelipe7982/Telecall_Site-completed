<?php 
include('../layout/header.php');
?>

        <main class="conteudo_principal">       
            <section class="slider">    <!--Slide principal-->
                
                <div class="slides">
                    <input type="radio" name="radio_btn" id="radio1">
                    <input type="radio" name="radio_btn" id="radio2">       <!--Butões radio com funções do slide-->
                    <input type="radio" name="radio_btn" id="radio3">
                    <input type="radio" name="radio_btn" id="radio4">
                
                
                    <div class="slide primeiro">
                        <img src="../IMG/PABX2.png" alt="imagem telecall">  <!--Slide 1-->
                    </div>
                    
                    <div class="slide">
                        <img src="../IMG/banner-cel-empresarial-telecall-min.png" alt="imagem telecall">    <!--Slide 2-->
                    </div>
                    
                    <div class="slide">
                        <img src="../IMG/CEL-EMPRESARIAL-2-1.png" alt="imagem telecall">    <!--Slide 3-->
                    </div>
                    
                    <div class="slide">
                        <img src="../IMG/INTERNET-DEDICADA.png" alt="imagem telecall">  <!--Slide 4-->
                    </div>  

                    <div class="nav_auto">
                        <div class="auto_btn1"></div>
                        <div class="auto_btn2"></div>       <!--Função temporizada-->
                        <div class="auto_btn3"></div>
                        <div class="auto_btn4"></div>
                    </div>

                    <div class="nav_manual">
                        <label for="radio1" class="manual_btn"></label>
                        <label for="radio2" class="manual_btn"></label>     <!--Função manual de click-->
                        <label for="radio3" class="manual_btn"></label>
                        <label for="radio4" class="manual_btn"></label>
                    </div>

                </div>
            </section>

            <section class="serviços_telecall">     <!--Serviços da telecall -->
                <h1>Soluções inteligentes para sua empresa</h1>
                    
                <div class="contain_serviços" name="internet">
                    <div class="contain_box">
                        <i class="fa-solid fa-globe"></i>
                        <h2>Internet</h2>
                        <p>Solução de internet em fibra e alta qualidade e disponibilidade.</p>     <!--Box 1-->
                        <a href="Internet.php"><button>Saiba mais</button></a>
                    </div>
                    
                    <div class="contain_box" name="Telefonia">
                        <i class="fa-solid fa-network-wired"></i>
                        <h2>Telefonia</h2>
                        <p>Solução inteligente de PABX IP na núvem para sua telefonia fixa.</p>     <!--Box 2-->
                        <a href="telefonia.php"><button>Saiba mais</button></a>
                    </div>
                    
                    <div class="contain_box" name="Mobilidade">
                        <i class="fa-solid fa-mobile"></i>
                        <h2>Mobilidade</h2>
                        <p>Monte planos de celular personalizados para a sua empresa e pague apenas pelo o que precisa.</p>     <!--Box 3-->
                        <a href="mob.php"><button>Saiba mais</button></a>
                    
                    </div>

                    <div class="contain_box" name="cpaas">
                        <i class="fa-solid fa-cloud"></i>
                        <h2>CPaaS</h2>
                        <p>Solução de software de comunicação que atua como uma base sobre a qual desenvolvedores podem integrar.</p>       <!--Box 4-->
                        <a href="cpaas.php"><button>Saiba mais</button></a>
                    </div>

                </div>
            </section>

            <section class="planos_mob">        <!--Seção de planos de celulares-->
                <h1>Conheça nossos planos de mobilidade</h1>
                
                <div class="contain_plano">
                    <img src="../IMG/Planos-de-celular-empresarial.png" alt="imagem de plano de celular">
                    
                    <div class="all_contain">
                        <div class="topico_contain"><i class="fa-solid fa-list-check"></i> <h3>PLANOS CUSTOMIZÁVEIS</h3> </div>
                        <div class="topico_contain"><i class="fa-regular fa-building"></i> <h3>RECEBA SEU CHIP NA SUA EMPRESA</h3></div>
                        <div class="topico_contain"><i class="fa-sharp fa-solid fa-chart-simple"></i><h3>MAIOR REDE MÓVEL DO BRASIL</h3></div>
                        <div class="topico_contain"><i class="fa-solid fa-headset"></i> <h3>ATENDIMENTO DIFERENCIADO</h3></div>
                    </div>
                </div>
            </section>

            <section class="eventos">       <!--Seção de eventos-->
                <h1>Eventos</h1>
                <div class="contain_evento">

                    <div class="box_evento">        <!--Evento 1-->
                        <div class="event-title">
                            <h2>ITW international Telecoms Week 2023</h2>
                            <h3>14 a 17 de Maio</h3>
                        </div>
                        <a href="https://event.internationaltelecomsweek.com/event/106d28e1-c9ae-41ee-a1ed-a6e26e7a50cb/summary" target="_blank">
                            <img src="../IMG/ITW-14-a-17.05.png" alt="imagem evento ITW"></a>
                    </div>
                    
                    <div class="box_evento">         <!--Evento 2-->
                        <div class="event-title">
                            <h2>Abrint Encontro Nacional 2023</h2>
                            <h3>24 a 25 de Maio</h3>
                        </div>
                        <a href="https://www.eventonacional.abrint.com.br/" target="_blank"><img src="../IMG/Abrint-24-a-26.05.png" alt="imagem evento Abrint"></a>
                    </div>

                    <div class="box_evento">         <!--Evento 3-->
                        <div class="event-title">
                            <h2>GCCM Rio de Jnaeiro</h2>
                            <h3>30 a 31 de Agosto</h3>
                        </div>
                        <a href="https://carriercommunity.com/#/cc-events/174/media" target="_blank"><img src="../IMG/thumb-evento-11.png" alt="imagem evento GCCM"></a>
                    </div>
                </div>

            </section>

            <section class="slide-feed" id="slide_testimonial">      <!--Slide de depoimentos-->
                <h1>Nossos Clientes Que Acreditam Nos Nossos Serviços</h1>
                <div class="testimonial mySwiper">
                    <div class="testi-content swiper-wrapper">

                        <!--Primeiro Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/mcdonalds-logo-footer-bg-white.png" alt="logo mc donalds" class="img-slide">
                            <p>
                                O Mc Donald conheceu a Telecall durante os Jogos Olímpicos Rio 2016 para um pedido urgente 
                                de um evento de mídia ao vivo, quatro dias mais tarde. A Telecall foi extremamente proﬁssional... 
                                "Nós simplesmente não teríamos conseguido sem a parceria da equipe Telecall. Só usaremos eles em eventos no Rio.”
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Kathy Whalen</span>
                                <span class="title_cliente">Project Manager, Consumer Events | Creative &amp; Event Solutions | Global Business Services</span>
                            </div>
                        </div>


                        <!--Segundo Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/logo-rock-in-rio.png" alt="logo rock in rio" class="img-slide">
                            <p>
                                “É com o coração transbordando de orgulho e gratidão que concluímos uma edição do Rock in Rio. Toda a magia que 
                                vivemos nesses 7 dias de festival jamais seria possível sem a participação de marcas e profissionais 
                                como vocês que acreditaram na gente e ajudaram a tornar esse sonho realidade. A edição 2017 ficará para a 
                                história e agora nosso desafio é ainda maior. Fica aqui mais uma vez, o nosso muito obrigada e que venha 2019!!” 	
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Laila Dias</span>
                                <span class="title_cliente">Account Executive - Brasil</span>
                            </div>
                        </div>

                        <!--Terceiro Slide-->


                        <div class="slide swiper-slide">
                            <img src="../IMG/logo-comite-australiano.png" alt="logo comitê australiano" class="img-slide">
                            <p>
                                : “..durante as Olímpiadas 2016 a Telecall nos ajudou muito com serviços de Internet Dedicada de 200MB, 
                                ponto a ponto, 0800, siga-me , WIFI... para suportar todas as necessidades do nosso Comitê. Telecall foi 100%.”					
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Diego Mendes</span>
                                <span class="title_cliente">Operations Manager | Australian Olympic Committee</span>
                            </div>
                        </div>

                            <!--Quarto Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/logo-sls.png" alt="logo do campeonato sls" class="img-slide">
                            <p>
                                " Fantástico trabalho da equipe Telecall. Profissionais completamente comprometidos. Uma entrega perfeita. "									
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Leonardo Cohen</span>
                                <span class="title_cliente">SLS World Championship Finals 2018</span> 
                            </div>
                        </div>

                            <!--Quinto Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/strauss-design-20.png" alt="logo da strauss" class="img-slide">
                            <p>
                                 “A Telecall trabalhou com a Strauss Estratégias de Mídia na instalação de linhas telefônicas padrão tipo 
                                POTS e conexões de Internet… Uma vez que somos uma empresa com sede nos EUA, quando se viaja, você nunca 
                                sabe o que você vai encontrar. Esta empresa foi tão boa ou melhor do que qualquer empresa com sede 
                                nos EUA e eu recomendo a Telecall!”					
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Richard Strauss</span>
                                <span class="title_cliente">President, Strauss Media Strategies, Inc. – USA</span>
                            </div>
                        </div>

                            <!--Sexto Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/czech-design-21.png" alt="logo da czech" class="img-slide">
                            <p>
                                “Equipe e visitantes da casa da República Tcheca durante os Jogos Olímpicos Rio 2016 ﬁcaram muito felizes. 
                                Os serviços prestados pela Telecall foram um sucesso, agradecemos toda a ajuda.”					
                            </p>
                           
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Blanka Konečná</span>
                                <span class="title_cliente">Project manager</span>
                            </div>
                        </div>

                            <!--Sétimo Slide-->


                        <div class="slide swiper-slide">
                            <img src="../IMG/avmedia-design-19.png" alt="logo da avmedia" class="img-slide">
                            <p>
                                “Gostaria de agradecer a Telecall por toda ajuda nos serviços prestados. Tudo funcionou bem 
                                e os técnicos foram muito prestativos.”					
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Michal Matko</span>
                                <span class="title_cliente">AV MEDIA, a.s.</span>
                            </div>
                        </div>

                            <!--Oitavo Slide-->


                        <div class="slide swiper-slide">
                            <img src="../IMG/progolf-design-16.png" alt="logo da progolf" class="img-slide">
                            <p>
                                “Gostaríamos de agradecer a Telecall pelo trabalho maravilhoso que realizaram. O trabalho 
                                da equipe é sensacional, com rapidez e atenção... parabéns a toda equipe da Telecall e muito obrigada.”					
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Suelen Santos</span>
                                <span class="title_cliente">PROGOLF - CAMPO DE GOLFE OLÍMPICO - BARRA DA TIJUCA</span>
                            </div>
                        </div>


                            <!--nono Slide-->

                        <div class="slide swiper-slide">
                            <img src="../IMG/logo-maratona.jpg" alt="logo do rio maratona" class="img-slide">
                            <p>
                                "A operação foi um sucesso, a transmissão correu como desejado, graças à Telecall. 
                                Agradecemos a atenção, o cuidado e o esforço de toda a equipe com o nosso produto... 
                                Muito obrigado e parabéns pelo excelente trabalho. Para nós, foi um novo padrão de entrega e operação excepcional ".					
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">Pedro Pereira </span>
                                <span class="title_cliente">Diretoria de Projetos</span>
                            </div>
                        </div>

                            <!--Décimo Slide-->


                        <div class="slide swiper-slide">
                            <img src="../IMG/logo-woods-sapucai.png" alt="logo da woods sapucaí" class="img-slide">
                            <p>
                                “A Opção pela implementação do sistema de internet no Camarote Wood´s Sapucaí pela Telecall, 
                                foi sem dúvidas um dos maiores acertos dessa empreitada. 
                                 Ter um sistema pleno, funcionando perfeitamente em meio aquele ambiente tumultuado da Marques 
                                 de Sapucaí, proporcionando conforto aos nossos clientes que desejam fazer aquela postagem ao vivo
                                  e ter a tranquilidade de que toda a classe jornalística estava segura e sendo atendida para 
                                  envio de material dentro do nosso espaço, foi um grande diferencial.”
                            </p>
                                
                            <i class="fa-solid fa-quote-left"></i>

                            <div class="details">
                                <span class="nome_cliente">José Carvalho </span>
                                <span class="title_cliente">Sócio</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next nav-btn"></div>
                    <div class="swiper-button-prev nav-btn"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            <section class="rede_telecall">
                <h1>Presença em todo Rio de Janeiro</h1>         <!--Seção de rede no rio da telecall-->
            </section>

            <div class="box-rede">
                <h3>+800 km de rede no Rio de Janeiro</h3>
                <p>Soluções de acesso que possibilitam as empresas a se conectarem a Internet com a máxima qualidade, disponibilidade e segurança.</p>
                <a href="https://www.google.com/maps/place/Telecall/@-22.999505,-43.3543151,14.56z/data=!4m6!3m5!1s0x9bda488eb4a8e5:0xd92e16bc83ef0d07!8m2!3d-22.9980045!4d-43.3463097!16s%2Fg%2F11r8_wr5v?entry=ttu" 
                target="_blank"><button>Saiba Mais</button></a>
            </div>

            <section class="sobre_telecall">         <!--Sobre a empresa telecall-->
                <h1>Quem Somos</h1>
                <div class="contain_sobre">
                    <p>
                        A Telecall é uma operadora de telecomunicações brasileira que oferece a seus clientes o mais alto padrão de qualidade,
                        velocidade e acessibilidade em soluções de comunicação. Serviços que incluem uma ampla gama de valores agregados,
                         oferecendo aos clientes operações mais produtivas, inovadoras e eficazes. Com mais de 20 anos de experiência na
                         indústria global, a Telecall hoje é sinônimo de qualidade e eficiência.
                    </p>
                    <img src="../IMG/cartao-sem-mao-v1.png" alt="imagem cartão telecall">
                </div>
            </section>

<?php 
include('../layout/footer.php');
?>
        </main>
        <script src="../js/swiper-bundle.min.js" defer></script>
        <script src="../js/slider.js" defer></script>
        <script src="../js/darkmode.js" defer></script>
    </body>
</html>