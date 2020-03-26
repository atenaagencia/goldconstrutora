<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <link href="{{asset('css/blog.css')}}" rel='stylesheet' type='text/css' />
    @include('site.layouts.imports')
</head>

<body>
    <header>
        <div class="header_top" id="home">
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
        <li class="breadcrumb-item active">Single Page</li>
    </ol>
    <!--//banner-->
    <!--/Blog-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Single Page</h3>

            <div class="row inner-sec-wthree">
                <div class="col-lg-8 blog-sp" data-aos="fade-right">
                    <article class="blog-x row">
                        <div class="blog-img">
                            <a href="single.html">
								<img src="{{asset('images/banner4.jpg')}}" alt="" class="img-fluid" />
							</a>
                        </div>
                        <div class="blog_info">
                            <h5>
                                <a href="single.html">Sadipisci velit sed quia non nuuam.</a>
                            </h5>
                            <p>By
                                <a href="#" class="user-blog">James</a>
                            </p>

                            <p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
                            <ul class="blog_list_info">
                                <li>
                                    <a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
                                    <i>|</i>
                                </li>
                                <li>
                                    <a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
                                </li>
                            </ul>
                            <h4>July 30,2018</h4>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                                </div>
                <aside class="col-lg-4 single-left" data-aos="fade-left">
                    
                        <div class="single-gd-wthree-agileits tech-btm" data-aos="fade-down">
                        <h4>Top stories of the week </h4>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="single.html">
									<img src="{{asset('images/b1.jpg')}}" class="img-fluid" alt="">
								</a>
                            </div>
                            <div class="blog-grid-right">

                                <h5>
                                    <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="single.html">
									<img src="{{asset('images/b2.jpg')}}" class="img-fluid" alt="">
								</a>
                            </div>
                            <div class="blog-grid-right">

                                <h5>
                                    <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="single.html">
									<img src="{{asset('images/b3.jpg')}}" class="img-fluid" alt="">
								</a>
                            </div>
                            <div class="blog-grid-right">

                                <h5>
                                    <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </aside>

            </div>


        </div>


    </section>

    <!--//Blog-->
    <!--footer-->
    @include('site.layouts.footer')
</body>

</html>