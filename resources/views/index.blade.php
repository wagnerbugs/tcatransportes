@extends('layouts.site')
@section('metaHead')

{{-- Generic meta tags --}}
<title>TCA Transportes | Única Mineradora</title>
<meta name="description" content="Empresa de transporte de cargas rodoviárias, extração de matéria prima para indústria cerâmica e extração de areia para construção civil.">
<meta name="keywords" content="carga. carga rodoviária, extração de areia, extração de matéria prima para cerâmica, argila para cerâmica">

{{-- Og meta tags --}}
<meta property="og:title" content="TCA Transportes" />
<meta property="og:description" content="Empresa de transporte de cargas rodoviárias, extração de matéria prima para indústria cerâmica e extração de areia para construção civil." />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="TCA Transportes" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image" content="https://tcatransportes.com.br/assets/img/logo.png" />
<meta property="og:image:secure_url" content="https://tcatransportes.com.br/assets/img/logo.png" />

{{-- Article meta tags --}}
<meta property="article:publisher" content="https://www.facebook.com/jornalrazao/" />

@endsection

@section('codeHead')
@php
$menu = "inicio";
@endphp
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<!-- Start Slider Area -->
<div id="home" class="slider slider-prlx">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('assets/img/slider-3.webp') }}" data-overlay-dark="10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="caption">
                                    <h1><b style="background: rgba(255, 255, 255, 0.4);"><span>Soluções em</span> Transporte e logísica</b></h1>
                                    <h3><span style="background: rgba(255, 255, 255, 0.4);">Soluções logísticas completas para o seu negócio físico e online. Conectamos empresas e aproximamos pessoas!</span></h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('assets/img/slider-4.jpeg') }}" data-overlay-dark="10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="caption">
                                    <h1><b style="background: rgba(255, 255, 255, 0.4);"><span>Qualidade</span> Pontualidade & Custo</b></h1>
                                    <h3><span style="background: rgba(255, 255, 255, 0.4);">A TCA Transportes possui soluções exclusivas e personalizadas, atendendo desde o pequeno aos gigantes do varejo, oferecendo o melhor custo-benefício!</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider setting -->
        <div class="control-text">
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <span class="arrow prv"></span>
            </div>
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <span class="arrow nxt"></span>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- End Slider Area -->



<!-- Why Chose Us Section Start -->
<div id="why" class="why-chose section-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow why-chose-service fadeInLeft text-center" data-wow-delay="0.2s">
                <img src="{{ asset('assets/img/team.png') }}" alt="chose image" />
                <h2 class="theme-color">Equipe dedicada</h2>
                <p>Nossa equipe de trabalho é formada por profissionais comprometidos, dinâmicos e gabaritados.</p>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow why-chose-service fadeInLeft text-center" data-wow-delay="0.2s">
                <img src="{{ asset('assets/img/experience.png') }}" alt="chose image" />
                <h2 class="theme-color">Experiência excepcional</h2>
                <p>Mais de 30 anos de busca constante pela excelência nos serviços que oferecemos.</p>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow why-chose-service fadeInLeft text-center" data-wow-delay="0.2s">
                <img src="{{ asset('assets/img/reputation.png') }}" alt="chose image" />
                <h2 class="theme-color">Reputação impecável</h2>
                <p>Qualidade de serviço que resultam em relacionamentos duradouros com os nossos clientes.</p>
            </div>
            <!-- single service -->
        </div>
    </div>
</div>
<!-- Why Chose Us Section End -->


<!-- Start Services Section -->
<section id="services" class="services-area bg-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Serviços</h5>
                    <h2>No que somos experts?!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="services-slide0" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="services-content">
                                    <img src="{{ asset('assets/img/services/service-1.png') }}" atl="service image" />
                                    <h5>Extração e preparação da matéria prima</h5>
                                    <p>Extração de matéria prima para o ramo cerâmico.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="services-content">
                                    <img src="{{ asset('assets/img/services/service-2.png') }}" atl="service image" />
                                    <h5>Transporte rodoviário de cargas</h5>
                                    <p>Transporte rodoviário de cargas de pequeno e grande porte.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="services-content">
                                    <img src="{{ asset('assets/img/services/service-3.png') }}" atl="service image" />
                                    <h5>Extração de areia para construção</h5>
                                    <p>Extração de areia para a contrução civil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->


<!-- featured Section Start -->
<section id="featured" class="featured-services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>30+ Anos de história</h5>
                    <h2>
                        Sobre nós
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="text-left">
                    <p>Desde sua fundação em 27 de Setembro de 1991 <br> a TCA têm como principal atividade o transporte rodoviário de cargas. Já são 20 anos operando em toda a região Sul e parte da região Sudeste. Além disso, atuamos também no ramo de extração de argila para indústrias cerâmica e areia para construção civil. A busca constante por novas tecnologias e qualificação profissional, faz com que a TCA ocupe uma posição de destaque no mercado.</p>
                    <div class="row advantages">
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Melhores profissionais</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Conhecimento do mercado</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Excelente reputação</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Flexibilidade</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Pontualidade</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <i class="icofont-check-alt"></i>
                            <h5>Anos de experiência</h5>
                        </div>
                    </div>
                    <a href="#0" class="button home-btn-1 js-scroll">Ligue agora: +55 48 3263 0391</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <img src="{{ asset('assets/img/1.jpg') }}" class="img-thumbnail rounded " atl="Frota TCA Transportes" />
            </div>
        </div>
    </div>
</section>
<!-- featured Section End -->
@endsection
