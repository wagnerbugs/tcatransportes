@extends('layouts.site')
@section('metaHead')

{{-- Generic meta tags --}}
<title>Serviços | TCA Transportes | Única Mineradora</title>
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
$menu = "servico";
@endphp
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<!-- Start Services Section -->
<section id="services" class="services-area bg-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Serviços</h5>
                    <h2>
                        A TCA Transportes possui soluções exclusivas e personalizadas, atendendo desde o pequeno aos gigantes do varejo e indústria, oferecendo <br>o melhor custo-benefício!
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="services-slide0" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="number">1</div>
                                <div class="services-content">
                                    <img src="assets/img/services/service-1.png" atl="service image" />
                                    <h5>Extração e preparação da matéria prima</h5>
                                    <p>Extração de matéria prima para o ramo cerâmico.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="number">2</div>
                                <div class="services-content">
                                    <img src="assets/img/services/service-2.png" atl="service image" />
                                    <h5>Transporte rodoviário de cargas</h5>
                                    <p>Transporte rodoviário de cargas de pequeno e grande porte.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="services-single-item bg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="number">3</div>
                                <div class="services-content">
                                    <img src="assets/img/services/service-3.png" atl="service image" />
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

<!-- Start Frota Section -->
<section id="review" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Abrangência</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center">
                            <img src="assets/img/mapa_atuacao.gif" alt="Àrea de cobertura e ação" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->
@endsection
