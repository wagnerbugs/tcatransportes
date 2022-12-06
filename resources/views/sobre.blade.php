@extends('layouts.site')
@section('metaHead')

{{-- Generic meta tags --}}
<title>Institucional | Sobre nós | TCA Transportes | Única Mineradora</title>
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
$menu = "sobre";
@endphp
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<!-- Start About Section -->
<section id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Sobre nós</h5>
                    <h2>Uma história de mais de <br>30 anos de sucesso.</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-content">
                    <div class="about-content-text text-left">
                        <p>Toda história de sucesso tem os seus segredos. As nuances de quem, como Uilson Sgrott, não teve medo de empreender. 30 anos após o glamoroso 27 de setembro de 1991, a TCA Transportes e Única Mineração colhe os louros do Jubileu de Pérola.</p>
                        <p>Tudo começou numa época inédita, quando grandes empresas iniciaram o processo de terceirização de muitos serviços. Entre eles o de transporte rodoviário de cargas. Destaca-se desde o início a parceria com o Grupo Portobello. </p>
                        <p>Vislumbrando um futuro alvissareiro, promissor Uilson Sgrott fundou a TCA, dando a sua empresa uma missão de logística dinâmica e estruturada, com profissionais competentes e capacitados. </p>
                        <p>Assim, com uma bagagem de 30 anos de experiência no ramo de transporte rodoviário, hoje também voltada a extração de argila e areia, a TCA consolida seu nome como uma empresa de respeito no mercado, atendendo clientes de renome nacional, graças à credibilidade e confiança conquistadas com muito trabalho e perseverança. </p>
                        <p>TCA transportes, comércio e administração: Homens, caminhões e máquinas a serviço do progresso de Tijucas, de Santa Catarina e do Brasil</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="about-image">
                    <img src="{{ asset('assets/img/1.jpg') }}" alt="Sobre nós">
                    <div class="waves-box">
                        <a href="https://www.youtube.com/watch?v=lHG-6dBsmnc" class="iq-video popup-video mfp-iframe"> <i class="fa fa-play"></i></a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- Start Services Section -->
<section id="services" class="services-area bg-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="services-slide0" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="number">Missão</div>
                                <div class="services-content">
                                    <p>A busca constante pela excelência nos serviços que oferecemos. Acreditamos que isso é possível através da prática de melhorias continuas nos quesitos que se referem à qualidade, pontualidade e custo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="number">Valores</div>
                                <div class="services-content">
                                    <p>Nosso objetivo é atender com primazia nossos clientes e para isso avaliamos o nosso desempenho analisando a eficácia no atendimento e a eficiência nos recursos usados para alcançar os requisitos determinados por nossos clientes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="number">Foco</div>
                                <div class="services-content">
                                    <p>Transportando, comercializando e administrando com um propósito: Atender com eficácia os requisitos determinados pelo cliente. <br><br><br><br></p>
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

<!-- Start Frota Section -->
<section id="review" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Nossa Frota</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="assets/img/team/team-1.jpg" alt="team" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="assets/img/team/team-2.jpg" alt="team" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="assets/img/team/team-3.jpg" alt="team" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="assets/img/team/team-4.jpg" alt="team" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->
@endsection
