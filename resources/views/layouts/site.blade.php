<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="Trucking And Logistics Multipurpose Website Template" />
    <meta name="description" content="Trucking And Logistics Multipurpose Website Template" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Site All Style Sheet Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/icofont.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" />
    <!-- Site Main Style Sheet Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    @yield('codeHead')

</head>

<body>

    <!-- Start Header Navbar Area -->
    <header class="header-navber-area">
        <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
            <div class="container top-menu">
                <a class="navbar-brand js-scroll" href="index.html">
                    <img src="{{ asset('assets/img/logo.png')}}" class="white-logo" alt="logo">
                    <img src="{{ asset('assets/img/logo.png')}}" class="black-logo" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"> <span></span> <span></span> <span></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link js-scroll {{ $menu == 'inicio' ? 'active' : '' }}" href="/">Início</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ $menu == 'sobre' ? 'active' : '' }}" href="sobre">Institucional</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ $menu == 'servico' ? 'active' : '' }}" href="servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ $menu == 'contato' ? 'active' : '' }}" href="contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Navbar Area -->

    @yield('content')

    <!-- Start Partner Logo Section -->
    <div class="partner-area bg-gray">
        <div class="container">
            <div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/1.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/2.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/3.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/4.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/5.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/6.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/7.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/8.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/9.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/10.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/11.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/12.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/13.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/14.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/15.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/16.jpg')}}" alt="partner-image">
                </div>
                <div class="partner-item align-middle">
                    <img src="{{ asset('assets/img/client/17.jpg')}}" alt="partner-image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section -->

    <!-- Start Footer Section -->
    <div class="book-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-copyright-text f-30">
                        <h3>Mais informações</h3>
                    </div>
                </div>
                <div class="col-md-4 text-right text-white f-30">
                    <p><i class="fas fa-phone-square"></i> +55 48 3263 0391</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Section -->

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p class="pb-2"><img src="{{ asset('assets/img/logo-black.png') }}" alt="" style="width: 200px;"></p>
                    <p class="pb-2"><img src="{{ asset('assets/img/logo-unica-black.png') }}" alt="" style="width: 200px;"></p>
                    <p class="text-justify"> A matriz da TCA Transportes está localizada no Vale do Rio Tijucas, ao sul de Balneário Camboriú e ao norte de Florianópolis, distante 42km. Estamos estrategicamente posicionados às margens da BR 101, isso nos dá o privilégio de estarmos muito próximos aos grandes centros, como a capital do estado, aos portos de Itajaí, Imbituba e São Francisco do Sul e cidades importantes como Blumenau e Brusque.</p>
                    <div class="contact-store-location-box">
                        <div class="single-store-location">
                            <h3>TCA Transportes</h3>
                            <p><i class="fas fa-envelope"></i> <a href="mailto:contato@tcatransportes.com.br"> contato@tcatransportes.com.br</a></p>
                            <p><i class="fas fa-phone"></i> <a href="tel:+554832630391"> +55 48 3263 0391</a></p>
                            <p><i class="fas fa-map"></i> Rua Marechal Deodoro da Fonseca, 1235 - Tijucas - SC</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <h2>Cobertura</h2>
                    <p><i class="fas fa-map-marker-alt"></i> Rio Grande do Sul</p>
                    <p><i class="fas fa-map-marker-alt"></i> Santa Catarina</p>
                    <p><i class="fas fa-map-marker-alt"></i> Paraná</p>
                    <p><i class="fas fa-map-marker-alt"></i> São Paulo</p>
                    <p><i class="fas fa-map-marker-alt"></i> Minas Gerais</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2>Nossa redes</h2>
                    <div class="track-package">
                        <p><a href="https://www.facebook.com/profile.php?id=100064090654786"><i class="fab fa-facebook"></i> TCA Transportes</a></p>
                        <p><a href="https://www.instagram.com/tcatransporte/"><i class="fab fa-instagram"></i> TCA Transportes</a></p>
                        <p><a href="https://www.instagram.com/unicamineracao/"><i class="fab fa-instagram"></i> ÚNICA Mineração</a></p>
                    </div>

                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">TCA Transportes | Única Mineração - 2022 - Desenvolvimento <a href="https://jornalrazao.com">Agência JR</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100064090654786"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/tcatransporte/"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/unicamineracao/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Start Back to Top -->
    <div class="back-to-top">
        <i class="fas fa-caret-up"></i><i class="fas fa-caret-up"></i>
    </div>
    <!-- End Back to Top -->

    <!-- Site All Jquery Js -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!--validator js-->
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <!-- Site Main Custom Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
