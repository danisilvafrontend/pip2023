<?php
// header
include 'app/views/header.php';
?>
<!--  content -->
<main>
    <section class="fullbanner"> 
        <div class="carrossel-banner">
            <div class="banner-item item-01">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt, harum quia, et, excepturi nihil laboriosam veniam.</p>
                    <div class="read-more">
                        <a class="btn bg-gray" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="banner-item item-02">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt.</p>
                    <div class="read-more">
                        <a class="btn bg-black" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="banner-item item-03">
                <div class="container center">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt.</p>
                    <div class="read-more">
                        <a class="btn bg-gray" href="#" title="">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>       
        
        <div class="nav-fullbanner">
            <a id="prev-fullbanner" class="icon arrow-left">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a id="next-fullbanner" class="icon arrow-right">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>

    <section class="welcome">
        <div class="container flex-container">
            <div class="text-welcome">
                <div class="title black">
                    <h1>Prêmio Impactos Positivos</h1>
                </div>
                <div class="content-welcome">
                    <p>Somos uma grande vitrine de iniciativas que impactam positivamente nosso país e o mundo.</p>
                    <div class="read-more">
                        <a class="btn bg-gray" href="#" title="">Sobre o Prêmio</a>
                    </div>
                </div>
            </div>
            <div class="counter-welcome flex-container">
                <div class="col-counter">                    
                    <div class="counter-item">
                        <span class="counter-up gray">+ 400</span>
                        <p>Projetos Inscritos</p>
                    </div>
                    <div class="counter-item">
                        <span class="counter-up gray">2.5 milhões</span>
                        <p>de Interações</p>
                    </div>   
                </div> 
                <div class="col-counter">                      
                    <div class="counter-item">
                        <span class="counter-up gray">R$15 milhões</span>
                        <p>de exposição em midias</p>
                    </div>
                    <div class="counter-item">
                        <span class="counter-up gray">59</span>
                        <p>Países acessam a plataforma</p>
                    </div>     
                </div>     
            </div>
        </div>
    </section>

    <!-- <section class="vencedores">
        <div class="container">
            <div class="title">
                <h2>Encontro Prêmio Impactos Positivos 2022</h2>
            </div>
            <div class="flex-container colunas">
                <div class="col-archives video-premio">
                    <div class="video-premiacao">
                        <div class="container-iframe">
                            <iframe  class="responsive-iframe" src="https://www.youtube.com/embed/pZUhcbI27hY?autoplay=1&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>                         
                    <div class="galeria-evento">                    
                        <div class="carrossel-evento">
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/02.jpg"/>
                                <div class="legenda">
                                Os vencedores do Prêmio 2022 receberam trófeus personalizados pelo artista Ciro Schu
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/03.jpg"/>
                                <div class="legenda">
                                Cada um dos troféus foram criados com materias reutilizados pelo artista plástico Ciro Schu
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/04.jpg"/>
                                <div class="legenda">
                                Equipe da Muri, marca de roupa patrocinadora do Encontro Impactos Positivos 2022
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/08.jpg"/>
                                <div class="legenda">
                                Gisele Abrahão (Impactos Positivos), Dani Garcia (Capitalismo Consciente, Francisco Vicente (Yunus Social Brasil), Rachel Karam (Grupo Jurídico B - Sistema B) e Roberta Coutinho (Cèdre Consultoria)
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/09.jpg"/>
                                <div class="legenda">
                                Sandra Pinheiro, da Pinho Pinheiro, membra do board de conselheiros da edição 2022 do Prêmio Impactos Positivos
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/12.jpg"/>
                                <div class="legenda">
                                Gisele Abrahão apresentou o Encontro Impactos Positivos 2022 no Cubo Itaú SP
                                </div>
                            </div>
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/15.jpg"/>
                                <div class="legenda">
                                Gisele Abrahão (Impactos Positivos), Ricardo Fortes (Fiap), Daniela Maia (GoNew) e Alexandre Uehara (Innov8)
                                </div>
                            </div>                            
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/17.jpg"/>
                                <div class="legenda">
                                Filipe Guimarães, representante do Cubo Itaú durante o Encontro Impactos Positivos 2022
                                </div>
                            </div>                     
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/18.jpg"/>
                                <div class="legenda">
                                Renata Troncoso, do Portal Telemedicina, durante seu Painel Escalando o Impacto
                                </div>
                            </div>                  
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/20.jpg"/>
                                <div class="legenda">
                                Gisele Abrahão (Impactos Positivos), Luciana Miranda (Coordenadora Geral de Empreendedorismo Feminino e Impacto), Marcel Fukayama (Sistema B) e Aron Belinky (ABC Associados)
                                </div>
                            </div>             
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/23.jpg"/>
                                <div class="legenda">
                                Ciro Schu (artista plástico), Gisele Abrahão (Impactos Positivos) e Daniel Cady (Muri) apresentaram os vencedores do Prêmio Impactos Positivos 2022
                                </div>
                            </div>                                         
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/26.jpg"/>
                                <div class="legenda">
                                Central da Visão esteve presente no Encontro e foi o vencedor da categoria Negócios de Impacto - Tração
                                </div>
                            </div>                                        
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/28.jpg"/>
                                <div class="legenda">
                                Departamento de Educação Social de Itanhanhém esteve presente no Encontro e foi o vencedor da categoria Ecossistema de Impacto - Dinamizadores
                                </div>
                            </div>                                       
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/30.jpg"/>
                                <div class="legenda">
                                Ajinomoto do Brasil esteve presente no Encontro e foi o vencedore da categoria Ecossistema de Impacto - Médias e Grandes Empresas
                                </div>
                            </div>                                       
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/32.jpg"/>
                                <div class="legenda">
                                Alexandre Uehara (Innov8), Sandra Pinheiro (Pinho Pinheiro), Gisele Abrahão (Impactos Positivos), Philippe Figueiredo (Sebrae Nacional) e Roberta Coutinho (Cèdre Consultoria)
                                </div>
                            </div>                                       
                            <div class="card_img">
                                <img src="app/assets/images/fotos-evento/36.jpg"/>
                                <div class="legenda">
                                Mais de 100 pessoas compareceram ao Encontro Impactos Positivos no Cubo Itaú SP
                                </div>
                            </div>
                        </div>                   
                        <div class="nav-evento">
                            <a id="prev-gal-evento" class="icon arrow-left">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a id="next-gal-evento" class="icon arrow-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-archives card-vencedores">
                    <div class=" categorias">
                        <div class="col-categoria">
                            <h3 class="blue">Vencedores Negócios de Impacto</h3>
                            <div class="flex-container projetos">
                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Ideação</h3>
                                    </div>
                                    <div class="logo-project">
                                    <a href="https://impactospositivos.com/project/mocambo-avicultura-naturalizada2022"><img src="https://impactospositivos.com/storage/projeto/zEsjJE4niDAULfr3oTZ2L0jQbaiAgJ7oaPA4PSMo.png" alt=""/></a>
                                    </div>
                                    <h4>Mocambo Avicultura Naturalizada</h4>
                                    <p><span>João Pessoa | Paraíba</span></p>                                                          
                                    <div class="read-more">
                                        <p><a href="https://impactospositivos.com/project/mocambo-avicultura-naturalizada2022" class="btn bg-blue">Ver Projeto</a></p> 
                                    </div>                          
                                    
                                </div>
                                
                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Operação</h3>
                                    </div>
                                    <div class="logo-project">
                                        
                                    <a href="https://impactospositivos.com/project/acmella-beauty2022"><img src="https://impactospositivos.com/storage/projeto/rC0cyrQ3VI14bwnfJ85gAGKWbyCH33QjyMYEAPMd.png" alt=""/></a>
                                    </div>
                                    <h4>Acmella Beauty</h4>
                                    <p><span>Macapá | Amapá</span></p>                                               
                                    <div class="read-more">                        
                                        <p><a href="https://impactospositivos.com/project/acmella-beauty2022" class="btn bg-blue">Ver Projeto</a></p> 
                                    </div>
                                </div>

                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Tração</h3>
                                    </div>
                                    <div class="logo-project">
                                    <a href="https://impactospositivos.com/project/central-da-visao2022"><img src="https://impactospositivos.com/storage/projeto/BYSF0CedKqz4s9aiEY1ZfeiXn8Bf5PZmZspc0sii.jpg" alt=""/></a>
                                    </div>
                                    <h4>Central da Visão</h4>
                                    <p><span>São Paulo | São Paulo</span></p>                                                                                 
                                    <div class="read-more">                                                  
                                        <p><a href="https://impactospositivos.com/project/central-da-visao2022" class="btn bg-blue">Ver Projeto</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-categoria">
                            <h3 class="blue">Vencedores Ecossistemas de Impacto</h3>
                            <div class="flex-container projetos">
                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Dinamizadores</h3>
                                    </div>
                                    <div class="logo-project">
                                        <a href="https://impactospositivos.com/project/departamento-de-educacao-social-de-itanhaem2022"><img src="https://impactospositivos.com/storage/projeto/arULWiR3QZUc9okqiEsYsng9WKhDMCLLvwC5OBYY.png" alt=""/></a>
                                    </div>
                                    <h4>Departamento de Educação Social de Itanhaém</h4>
                                    <p><span>Itanhaém | São Paulo</span></p>                                                        
                                    <div class="read-more">                                             
                                        <p><a href="https://impactospositivos.com/project/departamento-de-educacao-social-de-itanhaem2022" class="btn bg-blue">Ver Projeto</a></p>
                                    </div>
                                </div>
                                
                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Comunidades</h3>
                                    </div>
                                    <div class="logo-project">
                                        <a href="https://impactospositivos.com/project/passos-da-crianca2022"><img src="https://impactospositivos.com/storage/projeto/ZDX4L8MTKmkrogXWAvZgPewv4N8IHRFRJZhJP1nq.png" alt=""/></a>
                                    </div>
                                    <h4>Passos da Criança</h4>
                                    <p><span>Curitiba | Paraná</span></p>                             
                                    <div class="read-more">                                                 
                                        <p><a href="https://impactospositivos.com/project/passos-da-crianca2022" class="btn bg-blue">Ver Projeto</a></p>
                                    </div>
                                </div>
                                
                                <div class="item-projeto">
                                    <div class="titulo-subcategoria">
                                        <h3>Médias e grandes empresas</h3>
                                    </div>
                                    <div class="logo-project">
                                        <a href="https://impactospositivos.com/project/ajinomoto-do-brasil-industria-e-comercio-de-alimentos-ltda2022"><img src="https://impactospositivos.com/storage/projeto/zGrDmyaU96PKtLjWJSYbiXB9O00E2LFlWOr4GthV.png" alt=""/></a>
                                    </div>
                                    <h4>Ajinomoto do Brasil</h4>
                                    <p><span>São Paulo | São Paulo</span></p>                          
                                    <div class="read-more">                                                  
                                        <p><a href="https://impactospositivos.com/project/ajinomoto-do-brasil-industria-e-comercio-de-alimentos-ltda2022" class="btn bg-blue">Ver Projeto</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <section class="sponsors">
        <div class="container flex-container">
            <div class="col-sponsors">
                <div class="title">
                    <h3>Parceiros Institucionais</h3>
                </div>    
                <div class="logo-sponsors">
                    <!-- <div class="img-sponsors">
                        <img src="app/assets/images/enimpactos.png" alt="Enimpacto"/>
                    </div>
                    <div class="img-sponsors">
                        <img src="app/assets/images/pnud.png" alt="PNUD"/>
                    </div> -->
                    <div class="img-sponsors">
                        <img src="app/assets/images/logo-virada-ods-2023.png" alt="Virada ODS São Paulo"/>
                    </div>
                </div> 
            </div> 

            <div class="col-sponsors">                
                <div class="title">
                    <h3>Patrocinadores</h3>
                </div>    
                <div class="logo-sponsors">
                    <div class="img-sponsors">
                        <img src="app/assets/images/sebrae-nacional.png" alt=""/>
                    </div>
                    <div class="img-sponsors">
                        <img src="app/assets/images/cubo-esg.jpg" alt=""/>
                    </div>
                </div> 
            </div> 
        </div>
    </section>

    <section class="showcases">
        <div class="container">
            <div class="title">
                <h2>Vitrine Prêmio Impactos Positivos 2023</h2>
                <p>Encontre empresas e organizações cadastradas no Prêmio Impactos Positivos que desenvolvem projetos, iniciativas e negócios inovadores que impactam positivamente nosso país</p>
            </div>

            <article class="showcase-flex">
                <div class="col-showcase">
                    <div class="line bussines">                    
                        <div class="title">
                            <h3><a href="#">Negócio de Impacto</a></h3>                        
                        </div>                        
                        <div class="nav-project">
                            <ul class="inline">
                                <li><a class="tooltip" href="#">Ideação
                                    <span class="tooltiptext">Dando os primeiros passos na formação da empresa, ainda sem formalização, mas com MVP sendo testado.</span>
                                </a></li>
                                <li><a class="tooltip" href="#">Operação
                                    <span class="tooltiptext">Empresa já formalizada, com faturamento e modelo de negócios validados.</span>
                                </a></li>
                                <li><a class="tooltip" href="#">Tração
                                    <span class="tooltiptext">Empresa já formalizada, atuando no mercado há mais de uma ano, com ou não entrada de investimento, e com escala de vendas em crescimento.</span>
                                </a></li>
                            </ul>
                        </div>
                        <div class="box-carrossel-bussiness">
                            <div class="carrossel-bussiness">
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/denario.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                            <p class="eixo">Cidades</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">TRÊS COROAS | RS</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade.</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/denario.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="read-more">
                                <a href="#" class="bg-gray btn">Acessar todos os Negócios de Impacto</a>
                            </div>    
                        </div>
                    </div>

                    <div class="separate"></div>

                    <div class="line ecosystem">                    
                        <div class="title">
                            <h3><a href="#">Ecossistema de Impacto</a></h3>                        
                        </div>
                        <div class="nav-project">
                            <ul class="inline">
                                <!-- <li><a class="tooltip" href="#">Investimento</a></li> -->
                                <!-- <li><a class="tooltip" href="#">Setor Público</a></li> -->
                                <li><a class="tooltip" href="#">Dinamizadores</a></li>
                                <li><a class="tooltip" href="#">Comunidades</a></li>
                                <li><a class="tooltip" href="#">Grandes Empresas</a></li>
                            </ul>
                        </div>
                        <div class="box-carrossel-ecosystem">
                            <div class="carrossel-ecosystem">
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/logo-global-s-fundo.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>ECOPONTO DE ENTREGA VOLUNTÁRIA</h4></a>
                                            <p class="eixo">Cidades</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">TRÊS COROAS | RS</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade.</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>Promover a coleta seletiva nas escolas e entidades com foco na educação ambiental, através do incentivo da reciclagem, economia solidária e sustentabilidade</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-project">
                                    <div class="title-project flex-container">
                                        <div class="logo-project">
                                            <img src="app/assets/images/gva.png" alt=""/>
                                        </div>
                                        <div class="title">                                        
                                            <a href="" title=""><h4>PROJETO CAPOEIRA UM MEIO DE TIRA AS CRIANCAS DAS RUAS E FAZER ATIVIDADES</h4></a>
                                            <p class="eixo">Cidadania</p>
                                        </div>
                                    </div>
                                    <div class="description-project">
                                        <p class="city-uf">SAO PAULO JD MARCELO | SP</p>
                                        <p>ajuda as criancas no dia a dia atividades fisicas</p>
                                        <div class="img-ods">
                                            <ul>
                                                <li><img src="app/assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/09.png" alt=""/></li>
                                                <li><img src="app/assets/images/img-ods/16.png" alt=""/></li>
                                            </ul>
                                        </div>
                                        <div class="list-tags">
                                            <ul>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                                <li>categoria</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="read-more">
                                <a href="#" class="bg-gray btn">Acessar todos os Ecossistemas de Impacto</a>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="publi-muri"> 
                    <div class="banner-desktop">
                        <a href="https://www.somosmuri.com.br/somosmuri?collection=IMPACTOS+POSITIVOS" target="_blank"><img src="app/assets/images/banner-muri.jpg" /></a>
                    </div>
                    <div class="banner-mobile">
                        <a href="https://www.somosmuri.com.br/somosmuri?collection=IMPACTOS+POSITIVOS" target="_blank"><img src="app/assets/images/MURI-Impactos-Positivos-Banner-02.webp" /></a>
                    </div>
                </div> 
            </article>
        </div>
    </section>
    
    <section class="apoiadores">
        <div class="container">
            <div class="title">
                <h2>Apoiadores</h2>
                <p>Os apoiadores do <strong>Prêmio Impactos Positivos</strong> são empresas, empreendedores e profissionais que já atuam e acreditam na importância de fomentar o ecossistema de impacto no Brasil e seus negócios. <strong>Todas as premiações ofertadas aos vencedores no final da edição 2023, são fornecidas pelas empresas apoiadoras do Prêmio.</strong></p>
                <p>Esses apoiadores contribuem compartilhando além de muita informação e tendências do setor, seus conhecimentos para os participantes em formato de mentorias, cursos e consultorias personalizadas para cada ganhador do Prêmio.</p>
            </div>
            <div class="link-logos">
                <div class="flex-container">
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Sistema B - Apoaidor copiar.webp" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Capitalismo Consciente - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Yunus Negócios Sociais - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/FIAP - Apoiador.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Gonew.co - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Somos Muri - Apoiador.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Caetê - Victor Verardo - Apoiador.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/GVA - Apoiador.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Assis_Mendes - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Soul Finance - Apoaidor.jpg.webp" alt=""/></a>
                        </div>
                    </div>                    
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Cèdre Consultoria - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>                    
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Innov8 - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>                   
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/Pinho Pinheiro - Apoaidor.png" alt=""/></a>
                        </div>
                    </div>            
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/LOGO LG CONSULTORIA.png" alt=""/></a>
                        </div>
                    </div>           
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/valiant.webp" alt=""/></a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section> 

    <!-- <section class="enimpacto-parceiro">
        <div class="container flex-container">
            <div class="col-title">
                <div class="title">
                    <h2>Parceiros Institucionais</h2>
                </div>
            </div>
            <div class="col-articles flex-container">
                <div class="img-parceiro">
                    <img src="app/assets/images/enimpactos.png" alt="Enimpacto"/>
                </div>
                <div class="img-parceiro">
                    <img src="app/assets/images/logo-pnud.png" alt="pnud"/>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="ads-home">
        <div class="container">
            <div class="flex-container">
                <div class="img-ads">
                    <img class="ads-img" src="app/assets/images/ads-home.jpg" />
                </div> 
                <div class="img-ads">
                    <img class="ads-img" src="app/assets/images/ads-home.jpg" />
                </div> 
            </div>
        </div>
    </section> -->


    <section class="latest-news">
        <div class="container">
            <div class="title">
                <h2>Portal de Conteúdo</h2>
            </div>
            <!-- COL NEWS ACCENT -->
            <div class="col-archives news-posts">
                
                <div class="card-news accent">
                    <div class="card-img news-accent">
                        <div class="category">
                            <a href="trend-news.php" title=""><span>Notícias</span></a>
                        </div>
                    </div>
                    <div class="title">
                        <h2><a href="post-single.php" title="">Semear educação financeira e colher realizações</a></h2>
                    </div>
                    <ul class="list-tags">
                        <li><a href="#">Impacto</a></li>
                        <li><a href="#">Economia</a></li>
                        <li><a href="#">Ecosistema</a></li>
                    </ul>
                </div>
                <div class="card-news accent">
                    <div class="card-img news-accent">
                        <div class="category">
                            <a href="medias.php" title=""><span>Vídeo</span></a>
                        </div>
                    </div>
                    <div class="title">
                        <h2><a href="media-single.php" title="">Noruega e o luxo inusitado IV com Liliana Calisto e Maria Alarcon de V.O.S.</a></h2>
                    </div>
                    <ul class="list-tags">
                        <li><a href="#">Impacto</a></li>
                        <li><a href="#">Economia</a></li>
                        <li><a href="#">Ecosistema</a></li>
                    </ul>
                </div>
                <div class="card-news accent">
                    <div class="card-img news-accent">
                        <div class="category">
                            <a href="podcast.php" title=""><span>Podcast</span></a>
                        </div>
                    </div>
                    <div class="title">
                        <h2><a href="podcast-single.php" title="">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
                    </div>
                    <ul class="list-tags">
                        <li><a href="#">Impacto</a></li>
                        <li><a href="#">Economia</a></li>
                        <li><a href="#">Ecosistema</a></li>
                    </ul>
                </div>
                <div class="card-news accent">
                    <div class="card-img news-accent">
                        <div class="category">
                            <a href="podcast.php" title=""><span>Podcast</span></a>
                        </div>
                    </div>
                    <div class="title">
                        <h2><a href="podcast-single.php" title="">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
                    </div>
                    <ul class="list-tags">
                        <li><a href="#">Impacto</a></li>
                        <li><a href="#">Economia</a></li>
                        <li><a href="#">Ecosistema</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="read-more">
                <a href="#" class="bg-gray btn">Acessar portal</a>
            </div>
            <!-- COL NEWS -->
            <!-- <div class="col-archives">
                <div class="card-news flex-container">
                    <div class="list-news">
                        <div class="category">
                            <a href="medias.php" title=""><span>Video</span></a>
                        </div>
                        <div class="title">
                            <a href="media-single.php" title=""><h2>Noruega e o luxo inusitado IV com Liliana Calisto e Maria Alarcon de V.O.S.</h2></a>
                        </div>
                        <ul class="list-tags">
                            <li><a href="#">Impacto</a></li>
                            <li><a href="#">Economia</a></li>
                            <li><a href="#">Ecosistema</a></li>
                        </ul>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="podcast.php" title=""><span>Podcast</span></a>
                        </div>
                        <div class="title">
                            <a href="podcast-single.php" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                        <ul class="list-tags">
                            <li><a href="#">Impacto</a></li>
                            <li><a href="#">Economia</a></li>
                            <li><a href="#">Ecosistema</a></li>
                        </ul>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Categoria</span></a>
                        </div>
                        <div class="title">
                            <a href="" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                        <ul class="list-tags">
                            <li><a href="#">Impacto</a></li>
                            <li><a href="#">Economia</a></li>
                            <li><a href="#">Ecosistema</a></li>
                        </ul>
                    </div>
                    <div class="list-news">
                        <div class="category">
                            <a href="" title=""><span>Categoria</span></a>
                        </div>
                        <div class="title">
                            <a href="" title=""><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2></a>
                        </div>
                        <ul class="list-tags">
                            <li><a href="#">Impacto</a></li>
                            <li><a href="#">Economia</a></li>
                            <li><a href="#">Ecosistema</a></li>
                        </ul>
                    </div>
                </div>
                <div class="read-more">
                    <a href="posts.php" class="btn bg-gray">Ver todos</a>
                </div>
            </div> -->
        </div>
    </section>    

    <section class="further">
        <div class="container flex-container">
            <div class="col-further-content">
                <div class="title">
                    <h2>Corrente do bem</h2>
                </div>
            </div>
            <div class="link-logos">
                <div class="carrossel-logos">
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/innov8.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/assis-mendes.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/humanizadas.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/instituto da transformaco digital.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/capitalismo-consciente.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/comunidade-cuidadoria.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="logo-item">
                        <div class="img-logo">
                            <a href=""><img src="app/assets/images/logo-further/gonew.png" alt=""/></a>
                        </div>
                    </div>
                </div>                   
                <div class="nav-further">
                    <a id="prev-link-logos" class="icon arrow-left">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a id="next-link-logos" class="icon arrow-right">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section> 

    <section class="materias"> 
        <div class="container">
            <div class="flex-container">
                <div class="col-materia">
                    <div class="img-materia">
                        <a href=""><img src="app/assets/images/bg-ods.png" alt=""/></a>
                    </div>
                    <div class="txt-content">
                        <h2><a href="">Objetivos de Desenvolvimento Sustentável no Brasil</a></h2>
                        <p>Os Objetivos de Desenvolvimento Sustentável, chamados de ODS, foram desenvolvidos em 2015 com a participação de 193 nações membros da Organização das Nações Unidas durante a Cúpula das Nações Unidas sobre o Desenvolvimento Sustentável.</p>
                    </div>
                    <div class="read-more">
                        <a href="#" class="btn bg-black">Saiba mais</a> 
                    </div>       
                </div>        
                <div class="col-materia">
                    <div class="img-materia">
                        <a href=""><img src="app/assets/images/materia-esg.png" alt=""/></a>
                    </div>
                    <div class="txt-content">
                        <h2><a href="">Fique por dentro das ESG</a></h2>
                        <p>Conheça mais sobre o ECOSSISTEMA DE IMPACTO e se engaje com iniciativas e projetos que impactam positivamente nosso país e nosso mundo.</p>
                    </div>
                    <div class="read-more">
                        <a href="#" class="btn bg-black">Saiba mais</a> 
                    </div>         
                </div>   
                <div class="col-materia">
                    <div class="img-materia">
                        <a href=""><img src="app/assets/images/bg-eco.png" alt=""/></a>
                    </div>
                    <div class="txt-content">
                        <h2><a href="">Ecossistema de Impacto, o que é e como funciona?</a></h2>
                        <p>Conheça mais sobre o ECOSSISTEMA DE IMPACTO e se engaje com iniciativas e projetos que impactam positivamente nosso país e nosso mundo.</p>
                    </div>   
                    <div class="read-more">
                        <a href="#" class="btn bg-black">Saiba mais</a> 
                    </div>      
                </div>                                 
                <div class="col-materia">
                    <div class="img-materia">
                        <a href=""><img src="app/assets/images/materia-negocio-impacto.png" alt=""/></a>
                    </div>
                    <div class="txt-content">
                        <h2><a href="">Negócios de Impacto – O que são?</a></h2>
                        <p>Conheça mais sobre o ECOSSISTEMA DE IMPACTO e se engaje com iniciativas e projetos que impactam positivamente nosso país e nosso mundo.</p>
                    </div>     
                    <div class="read-more">
                        <a href="#" class="btn bg-black">Saiba mais</a> 
                    </div>    
                </div>
            </div>
        </div>              
    </section>   


    <!-- <section class="honor">
        <div class="container">
            <div class="title">
                <h3>Homenagens</h3>
                <p>Confira abaixo a lista de homenageados na edição 2022 do Prêmio Impactos Positivos</p>
            </div>

            <div class="flex-container">
                <div class="col-impacts">                            
                    <img src="app/assets/images/impact-citizen.svg" alt=""/>
                    <p><a href="#" title="">Cidadão<br>de impacto</a></p>                            
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Cidadão de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="read-more">
                        <a href="" class="btn bg-black">Ver todos</a>
                    </div>
                </div>
                <div class="col-impacts">
                    <img src="app/assets/images/impact-institutions.svg" alt=""/>
                    <p><a href="#" title="">Instituição<br>de impacto</a></p>
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Insituições de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>                      
                    <div class="read-more">
                        <a href="" class="btn bg-black">Ver todos</a>
                    </div>                          
                </div>
                <div class="col-impacts">                            
                    <img src="app/assets/images/impact-communicator.svg" alt=""/>
                    <p><a href="#" title="">Comunicador<br>de impacto</a></p>
                    <div class="list-impacts">
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <p class="name">Nome Comunicador de Impacto</p>
                            <ul class="list-social">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="read-more">
                        <a href="" class="btn bg-black">Ver todos</a>
                    </div>
                </div>
            </div>
        </div>
        
    </section> -->

    <section class="depoimentos">
        <div class="container">
            <div class="title">
                <h2>Depoimentos dos negócios vencedores da edição 2022</h2>
            </div>
            <div class="carrossel-depoimentos">
                
                <div class="item depoimento">
                    <div class="flex-container">
                        <div class="imagem">
                            <img src="https://impactospositivos.com/storage/projeto/zEsjJE4niDAULfr3oTZ2L0jQbaiAgJ7oaPA4PSMo.png" alt="Departamento de Educação Social da Secretaria de Educação de Intanhaém" />
                        </div>
                        <div class="conteudo-depoimento">
                                <p>"Nós não sabíamos que poderíamos ir tão longe! Quando participamos do prêmio Impactos Positivos 2022. O nosso projeto - Mocambo Avicultura Naturalizada,  estava somente na ideia, no papel e no nosso coração. Fomos apoiados por amigos que quando conheceram a nossa proposta, nos deram muita força para ir mais longe. Através do Prêmio Impactos Positivos, começamos a ter maior visibilidade, fomos convidados para apresentar o nosso projeto em vários espaços, como programas, e universidades aqui na Paraíba. Fizemos muitas articulações a partir da campanha para conseguir votos. Fomos selecionados para o Rio Innovation Week e fomos aprovados no Centelha PB. Em abril 2023, vamos dar início ao nosso protótipo na comunidade quilombola Sr. Do Bonfim , em Areia na Paraíba. Estamos sendo assessorados com as mentorias e os apoiadores, um pessoal que tem uma grande bagagem, e comprometimento. Temos aprendido muito e tudo isso tem nos tornado mais fortes. Estamos muito felizes com tudo o que aconteceu e agora, diferente do começo, temos certeza que ainda teremos uma grande história. O Projeto Mocambo - Sistema Sustentável de Avicultura Naturalizada só tem a agradecer a toda a equipe do Prêmio Impactos Positivos por esta rica oportunidade."</p>
                                <div class="nome">
                                    <p><strong>Mocambo Avicultura Naturalizada</strong></p>
                                    <p><span><strong>Vencedor de 2022</strong> | Negócio de Impacto - Ideação</span></p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="item depoimento">
                    <div class="flex-container">
                        <div class="imagem">
                            <img src="https://impactospositivos.com/storage/projeto/rC0cyrQ3VI14bwnfJ85gAGKWbyCH33QjyMYEAPMd.png" alt="Acmella Beauty" />
                        </div>
                        <div class="conteudo-depoimento">
                                <p>"A importância de participar do Prêmio Impactos Positivos, é um reconhecimento que nossa marca, nosso propósito e visão realmente tem gerado impactos positivos. Todo processo de premiação, como foi feito a seleção, os processos de votação e o próprio dia do encontro foi uma alegria para a gente. O Prêmio precisa ter mais divulgação e reconhecimento pelo Ecossistema, nosso próprio ecossistema do estado Pará não conhecia o prêmio. E ficamos muito gratos em como foram distribuídos os prêmios, por capacitação em mentorias. Que é o momento que a Acmella está hoje, justamente criando e estabelecendo um modelo de negócios pronto para investidores. Então estamos iniciando a produção em larga escala e ao mesmo tempo, trabalhando com investidores no Brasil e criando parcerias internacionais."</p>
                                <div class="nome">
                                    <p><strong>Acmella Beauty</strong></p>
                                    <p><span><strong>Vencedor de 2022</strong> | Negócio de Impacto - Operação</span></p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="item depoimento">
                    <div class="flex-container">
                        <div class="imagem">
                            <img src="https://impactospositivos.com/storage/projeto/BYSF0CedKqz4s9aiEY1ZfeiXn8Bf5PZmZspc0sii.jpg" alt="Central da Visão" />
                        </div>
                        <div class="conteudo-depoimento">
                                <p>"Vencer o Prêmio Impactos Positivos foi muito importante para reconhecer o trabalho de toda nossa equipe e, também, dar visibilidade para o trabalho que a Central da Visão faz. Como negócio de impacto, sabemos o quanto nosso trabalho muda a vida das pessoas. Mas, para o público externo, muitas vezes o impacto não é tão claro. Por isso, é fundamental uma comunicação constante e o Prêmio Impactos Positivos contribui para chamar atenção para o que fazemos."</p>
                                <div class="nome">
                                    <p><strong>Central da Visão</strong></p>
                                    <p><span><strong>Vencedor de 2022</strong> | Negócio de Impacto - Tração</span></p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="item depoimento">
                    <div class="flex-container">
                        <div class="imagem">
                            <img src="https://impactospositivos.com/storage/projeto/arULWiR3QZUc9okqiEsYsng9WKhDMCLLvwC5OBYY.png" alt="Departamento de Educação Social da Secretaria de Educação de Intanhaém" />
                        </div>
                        <div class="conteudo-depoimento">
                                <p>"Para o Departamento de Educação Social  da Secretaria de Educação de Itanhaém, participar e ganhar o Prêmio Impactos Positivos, principalmente a votação popular, é a certeza que nosso propósito está sendo atingido que é transformar a vida de nossos jovens em situação de vulnerabilidade através da aprendizagem profissional no Programa Inclusão Produtiva Jovem."</p>
                                <div class="nome">
                                    <p><strong>Departamento de Educação Social da Secretaria de Educação de Intanhaém</strong></p>
                                    <p><span><strong>Vencedor de 2022</strong> | Ecossistema de Impacto - Dinamizador</span></p>
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
            <div class="nav-depoimentos">
                <a id="prev-depoimentos" class="icon arrow-left">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a id="next-depoimentos" class="icon arrow-right">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="trends"> 
        <article class="trend-news">
            <div class="container flex-container">
                <div class="col-title">
                    <div class="title">
                        <h2>Na Mídia</h2>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>                
                        <div class="read-more">
                            <a class="btn bg-black" href="#" title="">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-articles">
                    <div class="flex-container">
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. 
                                </p>
                            </div>
                        </div>
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum
                                </p>
                            </div>
                        </div>
                        <div class="item trend">
                            <div class="img-trend"></div>
                            <div class="title">
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                            </div>
                            <div class="content-trend">
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipis. Lorem ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>    

        <article class="midias">
            <div class="container">                
                <div class="content-midia">
                    <div class="title">
                        <h2>Lives e Vídeos</h2>
                    </div>
                    <div class="content-carrossel-midia">
                        <div class="carrossel-midia">                        
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube.png" onclick="openModal();currentSlide(1)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>                  
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-vimeo.png" onclick="openModal();currentSlide(2)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>   
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(3)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>   
                            </div>
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(3)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>   
                            </div>                                   
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-vimeo.png" onclick="openModal();currentSlide(4)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>   
                            </div>                        
                            <div class="item midia">
                                <div class="img-midia">
                                    <img src="app/assets/images/video-youtube-02.png" onclick="openModal();currentSlide(5)" class="hover-shadow" />
                                </div>
                                <div class="txt-midia">
                                    <h3><a href="media-single.php">Título do vídeo Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                                </div>   
                            </div>    
                        </div>
                        <div class="nav-midia">
                            <a id="prev-midia" class="icon arrow-left">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a id="next-midia" class="icon arrow-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="read-more">
                        <a class="btn bg-gray" href="">Ver Todos</a>
                    </div>
                </div>
            </div>            
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://player.vimeo.com/video/589115579?h=b2e18a66b2&color=ef0004"></iframe>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/vNumRTHEIqE"></iframe>
                        </div>
                    </div>      
                    <div class="mySlides">
                        <div class="container-iframe">
                        <iframe class="responsive-iframe" src="https://player.vimeo.com/video/589115579?h=b2e18a66b2&color=ef0004"></iframe>
                        </div>
                    </div>      
                    <div class="mySlides">
                        <div class="container-iframe">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                    </div>                          
                </div>
            </div>        
        </article>
    
        <article class="podcast">
            <div class="container flex-container">
                <div class="col-title">
                    <div class="title">
                        <h2>Podcast</h2>
                    </div>
                    <div class="read-more">
                        <a class="btn bg-gray" href="podcast.php" title="">Ver todos</a>
                    </div>
                </div>
                <div class="col-articles">
                    <div class="carrossel-podcast">
                        <div class="item podcast">
                            <div class="title">
                                <a href="podcast-single.php" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn"><i class="fas fa-podcast"></i> Ouvir agora</a>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="podcast-single.php" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="read-more">
                                <a class="btn"><i class="fas fa-podcast"></i> Ouvir agora</a>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="podcast-single.php" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="read-more">
                                <a class="btn"><i class="fas fa-podcast"></i> Ouvir agora</a>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="podcast-single.php" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="read-more">
                                <a class="btn"><i class="fas fa-podcast"></i> Ouvir agora</a>
                            </div>
                        </div>
                        <div class="item podcast">
                            <div class="title">
                                <a href="podcast-single.php" class="black"><h3><i class="fas fa-podcast"></i> Título do Podcast</h3></a>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus possimus aliquid recusandae repellendus cupiditate nesciunt</p>
                            </div>
                            <div class="read-more">
                                <a class="btn"><i class="fas fa-podcast"></i> Ouvir agora</a>
                            </div>
                        </div>
                    </div>
                        
                    <div class="nav-podcast">
                        <a id="prev-podcast" class="icon arrow-left">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a id="next-podcast" class="icon arrow-right">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </article>        
    </section> -->

</main>


<?php
// footer
include 'app/views/footer.php';
?>