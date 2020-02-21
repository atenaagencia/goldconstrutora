<!DOCTYPE html>
<html>

<head>
    <title>Gold Construtora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Gold Construtora" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="css/newStyle.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header_top" id="home">
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top" style="position: fixed;">
                <div class="logo text-left">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                            <img src="./images/gold-logo.png" alt="Gold Construtora"></a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-lg-auto text-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tooltip-blog" href="blog.html">Blog <span>New</span></a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Dropdown
                                       <i class="fas fa-angle-down"></i>
                                    </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="project.html">Projects</a>
                                <a class="dropdown-item" href="error.html" title="">404</a>
                            </div>
                        </li> -->
                       
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Parceiros</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contato</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto navbar-mobile">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </header>
    <!--//header-->
    <!--/banner-->
    @include('site.components.carrousel')
    <!--/model-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: transparent; border: 0;">
                <div class="modal-body video">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    <iframe src="https://player.vimeo.com/video/13618190" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
    <!--//model-->
    <!--//banner-->
    <section>
        <div class="container">
            <h1 class="text-center p-5 " style="color: #F89C32;">Ultimas postagens</h1>
            <div class="row">
                <div class="col col-md-6 p-2">
                    <div class="news-main">
                        <div class="notice-container">
                            <div class="card text-white">
                              <img class="card-img" src="https://jbcescritoriosvirtuais.com.br/wp-content/uploads/2018/04/diferen%C3%A7a-entre-incorporadora-e-construtora.jpg" alt=""/>
                              <div class="card-img-overlay">
                                <div class="title-container">
                                  <h5 class="card-title font-weight-bold text-white">Nova obra</h5>
                                </div>
                                <div class="bar" ></div>
                                  <h4 class="desc font-weight-bold max-lines-2 text-white" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nesciunt. Quas reprehenderit recusandae, eius suscipit.</h4>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col col-md-6 p-2"> 
                    <div class="news-maker">
                        <div class="notice-container">
                            <div class="card text-white">
                              <img class="card-img" src="http://www.hojeengenharia.com.br/blog/wp-content/uploads/2018/08/construtora-em-bh.jpg" alt=""/>
                              <div class="card-img-overlay">
                                <div class="title-container">
                                  <h5 class="card-title font-weight-bold text-white">Engenharia</h5>
                                </div>
                                <div class="bar" ></div>
                                  <h4 class="desc font-weight-bold max-lines-2 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nesciunt. Quas reprehenderit recusandae, eius suscipit.</h4>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="news-maker">
                        <div class="notice-container">
                            <div class="card text-white">
                              <img class="card-img" src="http://construtoradailha.com.br/file/2017/01/shutterstock_127966451baixa-570x330.jpg" alt=""/>
                              <div class="card-img-overlay">
                                <div class="title-container">
                                  <h5 class="card-title font-weight-bold text-white">Obras Terminadas</h5>
                                </div>
                                <div class="bar" ></div>
                                  <h4 class="desc font-weight-bold max-lines-2 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nesciunt. Quas reprehenderit recusandae, eius suscipit.</h4>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-bottom">
        <div class="container">

            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">
                <div class="col-lg-12" data-aos="fade-left">
                    <h1 class="text-center" style="color: #F89C32;">Bem vindo a Gold Construtora</h1>
                    <p class="text-center mt-3">Nascida em Petrolina, a GOLD CONSTRUTORA LTDA, capacitou-se na execução de Projetos Estruturais, Projetos de Engenharia, Industriais, Comerciais e Prediais, Consultoria e Gerenciamento. Por isso a GOLD vem ganhando cada vez mais espaço no mercado, apresentando produtos competitivos focados em nichos sociais e específicos, através de inovações construtivas.</p>
                </div>
            </div>
            <div class="row inner-sec-wthree">
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="card new-shadow-2 p-4">
                        <div class="bt-icon">
                            <span class="far fa-thumbs-up"></span>
                        </div>
                        <h3 class="card-title mt-2 gold-color">Missão</h3>
                        <p class="text-black-50">Servir a sociedade, concretizando sonhos com qualidade, solidez e inovações tecnologias na engenharia.</p>
                    </div>
                </div>
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="card new-shadow-2 p-4">
                        <div class="bt-icon">
                            <span class="fas fa-trophy"></span>
                        </div>
                        <h3 class="card-title mt-2 gold-color">Valores</h3>
                        <ul class="valores">
                            <li class="text-black-50"><i class="fas fa-check"></i> Ser sempre melhores.</li>
                            <li class="text-black-50"><i class="fas fa-check"></i> Os clientes são a razão de ser.</li class="text-black-50">
                            <li class="text-black-50"><i class="fas fa-check"></i> Todas as pessoas merecem respeito e dignidade.</li>
                            <li class="text-black-50"><i class="fas fa-check"></i> O trabalho em equipe e participativo é essencial.</li>
                            <li class="text-black-50"><i class="fas fa-check"></i> Responsabilidade de incentivar e treinar toda equipe.</li>
                        </ul>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="card new-shadow-2 p-4">
                        <div class="bt-icon">
                            <span class="fas fa-tv"></span>
                        </div>
                        <h3 class="card-title mt-2 gold-color">Visão</h3>
                        <p class="text-black-50">Ser reconhecida como centro de excelência em todas as atividades exercidas.</p>
                        
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!---->
    <!-- /stats -->
    <section class="stats_test container-fluid">
        <div class="container full-height">
                    <div class="row justify-content-md-center margin-top">
                        <div class="col-12 col-sm-6 col-md-3 pt-4">
                            <div class="card new-shadow">
                                <div class="card-content">
                                    <h2 class="text-white card-title">Trabalhadores</h2>
                                    <div class="circle">
                                        <p class="counter counter-style p-4">165</p>
                                    </div>
                                    <i class="mt-4 text-white fas fa-users" style="font-size: 40px;"></i>
                                </div>
                              </div>
                            </div>
                        <div class="col-12 col-sm-6 col-md-3 pt-4">
                            <div class="card new-shadow">
                                <div class="card-content">
                                    <h2 class="text-white card-title">Projetos</h2>
                                    <div class="circle">
                                        <p class="counter counter-style p-4">563</p>
                                    </div>
                                    <i class="mt-4 text-white far fa-edit" style="font-size: 40px;"></i>
                                </div>
                              </div>
                            </div>
                        <div class="col-12 col-sm-6 col-md-3 pt-4">
                            <div class="card new-shadow">
                                <div class="card-content">
                                    <h2 class="text-white card-title">Clientes</h2>
                                    <div class="circle">
                                        <p class="counter counter-style p-4">1045</p>
                                    </div>
                                    <i class="mt-4 text-white far fa-smile" style="font-size: 40px;"></i>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="col-md-6 stats_left counter_grid">
                                <i class="far fa-building"></i>
                                <p class="counter">145</p>
                                <h4>Factories</h4>
                            </div>
                            <div class="col-md-6 stats_left counter_grid1">
                                <i class="fas fa-users"></i>
                                <p class="counter">165</p>
                                <h4>Workers</h4>
                            </div>
                            <div class="col-md-6 stats_left counter_grid2">
                                <i class="far fa-edit"></i>
                                <p class="counter">563</p>
                                <h4>Pojects</h4>
                            </div>
                            <div class="col-md-6 stats_left counter_grid3">
                                <i class="far fa-smile"></i>
                                <p class="counter">1045</p>
                                <h4>Happy Clients</h4>
                            </div> -->
                </div>
                
            </div>

        </div>
    </section>
    <!-- //stats -->
    <!--/services-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Nossos Serviços</h3>
            <div class="row inner-sec-wthree">
                <div class="col-lg-4 grid_info_main" data-aos="flip-left">
                    <div class="grid_info">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="fas fa-laptop"></i>
							</span> -->
                            <h5>Titulo </h5>
                            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="far fa-clone"></i>
							</span> -->
                            <h5>Titulo </h5>
                            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
                    <img src="images/ab.jpg" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-4 grid_info_main" data-aos="flip-right">
                    <div class="grid_info">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="fas fa-sitemap"></i>
							</span> -->
                            <h5>Titulo </h5>
                            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="fab fa-android"></i>
							</span> -->
                            <h5>Titulo </h5>
                            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//services-->
    <!---->
    <section class="grids_sec_2" style="display: none;">
        <div class="row style-grids_main">
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-right">
                    <h3>
                        Turning big ideas into great products.</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi tempora incidunt ut labore .Lorem ipsum dolor sit amet,vehicula vel sapien et.</p>
                    <div class="bnr-button">
                        <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 style-image-2">
            </div>
            <div class="col-md-6 style-image-2 second">
            </div>
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-right">
                    <h3>
                        Turning big ideas into great products.</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi tempora incidunt ut labore .Lorem ipsum dolor sit amet,vehicula vel sapien et</p>
                    <div class="bnr-button">
                        <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--/Projects-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Ultimos projetos
            </h3>
            <div class="row inner-sec-wthree">

                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/conjunto-habitat.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Conjuntos Habitacionais
                                    </h3>
                                    <p>Eunápolis-BA: 740 unidades habitacionais.
                                        Campo Verde-BA: 415 unidades habitacionais.
                                        Jurema-PE: 100 unidades habitacionais.
                                        Senhor do Bonfim-BA: 150 unidades habitacionais.
                                        Conceição do Coité-BA: 250 unidades habitacionais.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/jua-garden.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Jua Garden Shopping - BA</h3>
                                    <p>Execução de Sitema Viário Externo.
                                        Execução e Revitalização de Drenagem Pluvial Externa.
                                        Adequação de Sitema de SPK e Hidrante.
                                        Adequação em Instalações de Água Gelada.
                                        Substação e Aterramento Elétrico/Eletrônico dos Cinemas.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/shopping-recife.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Shopping Recife - PE</h3>
                                    <p>Revitalização do Parques das Esculturas.
                                        Casa Pio Calçados.
                                        Substituição e Modernização de Escadas Rolantes.
                                        Revitalização de C.A.G.
                                        Recuperação de Destino Final de Esgoto.</p>
                                </div>
                            </div>
                        </a>
                    </div>
            
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g6.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Transnordestina</h3>
                                    <p>Trecho da Transnordestina - Serra Talhada - PE</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/Plaza-casa.png" alt="Shopping Plaza" class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Shopping Plaza Casa Forte - CE</h3>
                                    <p>Recuperação de Banheiros Sociais.
                                        Projeto de Estrutura para Ampliação.
                                        Sergio's Calçados.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/metro.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Trensurb</h3>
                                    <p>Ampliação do Metrô de Porto Alegre (Trensurb)</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--//Projects-->
    <!--reviews_sec-->
    <section class="reviews_sec" id="testimonials">
        <h3 class="tittle cen">Depoimentos</h3>
        <div class="inner-sec-wthree">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t3.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>
												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>
												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Gretchen
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t2.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Esmeralda
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t1.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Anamaria
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <!---->
    <!--footer-->
    <footer>
        <div class="container">
            <div class="row footer-top-w3layouts">
                <div class="col-lg-4 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h2>Sobre nós</h2>
                    </div>
                    <div class="footer-text">
                        <p>Nascida em Petrolina, a GOLD CONSTRUTORA LTDA, capacitou-se na execução de Projetos Estruturais, Projetos de Engenharia, Industriais, Comerciais e Prediais, Consultoria e Gerenciamento.</p>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h3>Contato</h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li class="hd">Endereço:</li>
                            <li>Avenida da Integração 855, Vila Eduardo, Petrolina-PE. CEP: 56.328-010.</li>

                        </ul>
                        <ul>
                            <li class="hd">Telefone:
                                <a href="">+55 87 3864-2799</a>
                            </li>
                            <li class="hd">Email:
                                <a href="mailto:info@example.com">adm@construtoragold.com.br</a>
                            </li>
                            <li class="hd">Site:
                                <a href="www.construtoragold.com.br">www.construtoragold.com.br</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h3>Localização</h3>
                        <div style="overflow:hidden;width: 400px;position: relative;"><iframe width="400" height="300" src="https://maps.google.com/maps?width=400&amp;height=300&amp;hl=en&amp;q=gold%20construtora%2C%20petrolina-pe+(Gold%20Construtora)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/de/">embedgooglemaps DE</a> & <a href="https://rechargevodafone.co.uk">www.rechargevodafone.co.uk</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!---->
    <div class="copyright">
        <div class="container">
            <div class="copyrighttop" data-aos="fade-left">
                <ul>
                    <li>
                        <h4>Siga-nos no:</h4>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-instagram"></i>
						</a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-whatsapp"></i>
						</a>
                    </li>
                </ul>
            </div>
            <div class="copyrightbottom" data-aos="fade-right">
                <p>© 2019 Gold Construtora.
                    Todos os direitos reservados. | Design por
                    <a class="text-primary" href="http://atenaagencia.com.br/">Atena Agência</a>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script src="js/scrollbar.js"></script>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- simpleLightbox -->
    <script src="js/simpleLightbox.js"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();

    </script>
    <!-- //simpleLightbox -->
	 <!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>

    <!-- //flexSlider -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <!-- start-smoth-scrolling -->

    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>

    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->


</body>

</html>
