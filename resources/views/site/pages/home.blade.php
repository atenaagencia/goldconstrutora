<!DOCTYPE html>
<html>

<head>
    <title>Gold Construtora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Gold Construtora" />
    @include('site.layouts.imports')
</head>
<body>
    <header>
        <div class="header_top" id="home">
            @include('site.layouts.navbar')
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
    {{-- <section>
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
    </section> --}}
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
    {{-- <section class="stats_test container-fluid">
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
    </section> --}}
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
                            <h5>PROJETOS DE ENGENHARIA</h5>
                            <p>Desenvolvimento de projetos executivos de engenharia.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="far fa-clone"></i>
							</span> -->
                            <h5>LAUDOS E VISTORIAS </h5>
                            <p>Laudos periciais de engenharia para fins de entrega e recebimento de obras, avaliação de risco e necessidades afins</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
                    								<i class="far fa-clone"></i>
                    							</span> -->
                            <h5>LAUDO DE AVALIAÇÃO</h5>
                            <p>Laudo de avaliações de engenharia para mercado imobiliário e financeiro.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
                    								<i class="far fa-clone"></i>
                    							</span> -->
                            <h5>MANUTENÇÃO PREDIAL</h5>
                            <p>Serviços de engenharia relacionados a manutenção predial de edificações.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 grid_info_main mid" data-aos="flip-down" >
                    <img src="images/ab.jpg" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-4 grid_info_main" data-aos="flip-right">
                    <div class="grid_info">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="fas fa-sitemap"></i>
							</span> -->
                            <h5>RECUPERAÇÃO ESTRUTURAL </h5>
                            <p>Serviços relacionados a recuperação de edificações devido a problemas patológicos.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
								<i class="fab fa-android"></i>
							</span> -->
                            <h5>OBRA CIVIL </h5>
                            <p>Obras de engenharia civil, residenciais, comerciais, industriais.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
                    								<i class="fab fa-android"></i>
                    							</span> -->
                            <h5>OBRA DE INSTALAÇÕES </h5>
                            <p>Obras relacionadas a instalações prediais e industriais, elétrica, hidráulica, sistemas de segurança e afins.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <!-- <span class="icon">
                    								<i class="fab fa-android"></i>
                    							</span> -->
                            <h5>  OBRA DE INFRAESTRUTURA</h5>
                            <p>Obras relacionadas a sistemas estruturantes, drenagens, contenções e afins.</p>
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
                    
                                </div>
                            </div>
                        </a>
                    </div>
                   
                    {{-- <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/gold-projects/metro.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Trensurb</h3>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                     --}}
                </div>
            </div>
            <div class="button-wrapper">
                <a href="projetos" class="btn btn-gold">Ver mais</a>
            </div>
        </div>
    </section>
    <!--//Projects-->
    <section class="partners">
        <div class="container">
            <h3 class="tittle">Nossos parceiros</h3>
            <div class="row py-5 mb-4">
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc5.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc6.jpg')}}" alt="">                     
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc7.jpg')}}" alt="">
                    </div>  
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc8.jpg')}}" alt="">
                    </div>
                </div>                           
            </div>
            <div class="button-wrapper">
                <a href="/parceiros" class="btn btn-gold">Ver mais</a>
            </div>
          
        </div>
    </section>
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
    @include('site.layouts.footer')
 


</body>

</html>
