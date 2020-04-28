<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>

<head>
    <title>Gold Construtora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Smelter a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <link href="css/blog.css" rel='stylesheet' type='text/css' />
    @include('site.layouts.imports')
</head>

<body>
    <header>
        <div class="header_top" id="home">
         <!--   Navbar -->
         @include('site.layouts.navbar')
        </div>
    </header>
    <!--//header-->
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Projetos</li>
    </ol>
    <!--//banner-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Projetos
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
          
        </div>
    </section>

    <!--footer-->
    @include('site.layouts.footer')
   
</body>

</html>