@extends('layouts.site')
@section('metaHead')

{{-- Generic meta tags --}}
<title>Contato | Como chegar | TCA Transportes | Única Mineradora</title>
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
$menu = "contato";
@endphp
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<!-- Start Blog Section -->
<section id="contact" class="contact-area bg-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Seja nossa prioridade</h5>
                    <h2>Fale Conosco</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact-store-location-box">
                                    <div class="single-store-location">
                                        <h3>TCA Transportes</h3>
                                        <p><i class="fas fa-envelope"></i> <a href="mailto:contato@tcatransportes.com.br"> contato@tcatransportes.com.br</a></p>
                                        <p><i class="fas fa-phone"></i> <a href="tel:+554832630391"> +55 48 3263 0391</a></p>
                                        <p><i class="fas fa-map"></i> Rua Marechal Deodoro da Fonseca, 1235 - Tijucas - SC</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="contact-store-location-box">
                                    <div class="single-store-location">
                                        <h3>ÚNICA Mineradora</h3>
                                        <p><i class="fas fa-envelope"></i> <a href="mailto:contato@tcatransportes.com.br"> contato@tcatransportes.com.br</a></p>
                                        <p><i class="fas fa-phone"></i> <a href="tel:+554832630391"> +55 48 3263 0391</a></p>
                                        <p><i class="fas fa-map"></i> Rua Marechal Deodoro da Fonseca, 1235 - Tijucas - SC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="contact-form-box">
                            <div class="form-container-box">
                                <form class="contact-form form" id="ajax-contact" method="post" action="assets/php/contact.php">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-input-box">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome*" required="required" data-error="Name é requerido.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-input-box">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail*" required="required" data-error="E-mail válido é requerido.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-input-box">
                                                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group form-input-box">
                                                    <textarea class="form-control" id="message" name="message" rows="9" placeholder="Sua mensagem*" required="required" data-error="Por favor, deixe-nos alguma mensagem"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button contact-btn" data-text="Send Message">Enviar</button>
                                            </div>
                                            <div class="messages">
                                                <div class="alert alert alert-success alert-dismissable alert-dismissable hidden" id="msgSubmit"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Thank You! your message has been sent. </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Blog Section -->
@endsection
