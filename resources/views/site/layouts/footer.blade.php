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
                                <a href="mailto:engenharia@construtoragold.com.br">engenharia@construtoragold.com.br</a>
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
            <div class="copyrighttop">
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
            <div class="copyrightbottom" id="contato">
                <p>© 2019 Gold Construtora.
                    Todos os direitos reservados. | Design por
                    <a class="text-primary" href="http://atenaagencia.com.br/">Atena Agência</a>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- //js -->
    <!-- simpleLightbox -->
    <script src="{{ asset('js/simpleLightbox.js') }}"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();

    </script>
    <!-- //simpleLightbox -->
	 <!-- /js files -->
	<link href="{{ asset('css/aos.css') }}" rel='stylesheet prefetch' type="text/css" media="all" />
	<link href="{{ asset('css/aos-animation.css') }}" rel='stylesheet prefetch' type="text/css" media="all" />
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/aosindex.js') }}"></script>
	<!-- //js files -->
    <!-- flexSlider -->
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
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
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- start-smoth-scrolling -->
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
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
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- //js -->