<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>

<head>
    <title>Smelter Industrial Category Bootstrap responsive WebTemplate | Blog :: w3layouts</title>
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
    <section class="partners">
        <div class="container">
            <h3 class="tittle gold-color">Parceiros</h3>
            <h4 class="text-center mt-2">Empresas que confiam e acredita no nosso trabalho.</h4>
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
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc9.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc10.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc11.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc12.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc13.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc14.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ asset('images/partners/parc15.jpg')}}" alt="">
                    </div>
                </div>
                
            </div>
          
        </div>
    </section>

    <!--footer-->
    @include('site.layouts.footer')
   
</body>

</html>