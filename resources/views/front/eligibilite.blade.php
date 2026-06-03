@extends('layout/template')

@section('title', 'AYENAH | Éligibilité - Qui peut bénéficier du programme ?')

@section('meta_description', 'Vérifiez votre éligibilité au programme AYENAH. Conditions pour les associations de la diaspora, partenaires locaux et experts individuels.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Qui peut bénéficier d'AYENAH ?</h2>
                <p class="text-white">Vérifiez votre éligibilité au programme</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Éligibilité AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Éligibilité Pilier 1 ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">PILIER 1 - INITIATIVES LOCALES</span>
            <h2 class="section-header__title">Le <span>partenariat obligatoire</span></h2>
            <p class="section-header__desc">
                Pour soumettre un projet au financement AYENAH, vous devez constituer un partenariat entre la diaspora et un acteur local.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="partner-box partner-box--green">
                    <div class="partner-box__header">
                        <div class="partner-box__icon">
                            <i class="fa fa-globe-americas"></i>
                        </div>
                        <h5 class="partner-box__title">Côté Diaspora</h5>
                        <p class="text-muted">Une association légalement constituée</p>
                    </div>
                    <ul class="partner-box__list">
                        {!! $contents['partenariat_diaspora'] ?? '<li><i class="fa fa-check-circle"></i> Légalement constituée dans son pays de résidence</li>
                        <li><i class="fa fa-check-circle"></i> Ayant une activité effective</li>
                        <li><i class="fa fa-check-circle"></i> Disposant d\'une gouvernance claire</li>
                        <li><i class="fa fa-check-circle"></i> Composée majoritairement d\'Ivoiriens</li>' !!}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
                <div class="text-center">
                    <div style="width: 60px; height: 60px; background: var(--gradient-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fa fa-handshake text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <p class="text-muted mt-2 mb-0" style="font-size: 14px;">Partenariat</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                <div class="partner-box partner-box--orange">
                    <div class="partner-box__header">
                        <div class="partner-box__icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h5 class="partner-box__title">Côté Local</h5>
                        <p class="text-muted">Une structure en Côte d'Ivoire</p>
                    </div>
                    <ul class="partner-box__list">
                        {!! $contents['partenariat_local'] ?? '<li><i class="fa fa-check-circle" style="color: #ff7f00;"></i> ONG ou association locale</li>
                        <li><i class="fa fa-check-circle" style="color: #ff7f00;"></i> Coopérative agricole</li>
                        <li><i class="fa fa-check-circle" style="color: #ff7f00;"></i> Groupement d\'intérêt communautaire</li>
                        <li><i class="fa fa-check-circle" style="color: #ff7f00;"></i> Collectivité territoriale</li>' !!}
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="alert-box alert-box--warning">
                    <div class="alert-box__icon">
                        <i class="fa fa-file-signature"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Convention de partenariat obligatoire</h6>
                        <p class="alert-box__text">
                            Le partenariat doit être formalisé par une <strong>convention écrite</strong> entre les deux parties. Sans cette convention, votre dossier ne sera pas recevable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Conditions du projet ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="mb-4" style="font-weight: 700; color: #1a1a1a;">Conditions d'éligibilité <span class="colorVert">du projet</span></h3>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['conditions_projet'] ?? 'Votre projet doit répondre à plusieurs critères pour être éligible au financement AYENAH.' !!}
                </p>
                <a href="{{ route('soumettre-projet') }}" class="btn-ayenah btn-ayenah--primary">
                    <i class="fa fa-arrow-right"></i> Voir comment soumettre
                </a>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-green">
                            <div class="info-box__icon"><i class="fa fa-seedling"></i></div>
                            <h6 class="info-box__title">Secteur productif</h6>
                            <p class="info-box__text">Agriculture, artisanat, transformation de produits locaux</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;"><i class="fa fa-users"></i></div>
                            <h6 class="info-box__title">Projet collectif</h6>
                            <p class="info-box__text">Bénéficiant à un groupe de personnes, pas à un individu</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-green">
                            <div class="info-box__icon"><i class="fa fa-euro-sign"></i></div>
                            <h6 class="info-box__title">Budget adapté</h6>
                            <p class="info-box__text">Entre 10 000 et 50 000 EUR de subvention demandée</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;"><i class="fa fa-calendar-alt"></i></div>
                            <h6 class="info-box__title">Durée limitée</h6>
                            <p class="info-box__text">Maximum 12 mois de mise en œuvre</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Éligibilité Pilier 2 ==== -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
                <span class="section-header__subtitle" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">PILIER 2 - EXPERTISE</span>
                <h3 class="mb-4" style="font-weight: 700; color: #1a1a1a;">Proposer votre <span class="colorOrange">expertise</span></h3>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['expertise_conditions'] ?? 'Contrairement au Pilier 1, vous pouvez proposer <strong>individuellement</strong> vos compétences sans être membre d\'une association.' !!}
                </p>

                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-3 p-3" style="background: rgba(255, 127, 0, 0.05); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(255, 127, 0, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-passport" style="color: #ff7f00;"></i>
                        </div>
                        <span class="text-dark" style="font-weight: 500;">Nationalité ou origine ivoirienne</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3" style="background: rgba(255, 127, 0, 0.05); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(255, 127, 0, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-globe" style="color: #ff7f00;"></i>
                        </div>
                        <span class="text-dark" style="font-weight: 500;">Résidant à l'étranger</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3" style="background: rgba(255, 127, 0, 0.05); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(255, 127, 0, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-briefcase" style="color: #ff7f00;"></i>
                        </div>
                        <span class="text-dark" style="font-weight: 500;">Compétences professionnelles avérées</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3" style="background: rgba(255, 127, 0, 0.05); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; background: rgba(255, 127, 0, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-heart" style="color: #ff7f00;"></i>
                        </div>
                        <span class="text-dark" style="font-weight: 500;">Disponible pour mission volontaire (non rémunérée)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{asset('front/assets/images/pics/kojo-kwarteng-n5duzZWYReQ-unsplash.jpg')}}" alt="Expertise de la diaspora ivoirienne" class="img-fluid" style="border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.15);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ==== Critères d'évaluation ==== -->
<section class="section-padding-sm african-pattern-bg">
    <div class="container">
        <div class="content-card">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <span class="section-header__subtitle">ÉVALUATION</span>
                <h2 class="section-header__title">Critères de <span>notation</span></h2>
                <p class="section-header__desc">
                    {!! $contents['criteres_notation'] ?? 'Chaque projet est évalué sur 50 points selon cinq critères pondérés équitablement.' !!}
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <div class="table-ayenah-wrapper">
                    <table class="table-ayenah">
                    <thead>
                        <tr>
                            <th>Critère</th>
                            <th style="text-align: center;">Points</th>
                            <th style="text-align: center;">Poids</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle colorVert me-2"></i> <strong>Pertinence du projet</strong></td>
                            <td style="text-align: center;"><strong>10</strong></td>
                            <td style="text-align: center;">20%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle colorVert me-2"></i> <strong>Cohérence institutionnelle</strong></td>
                            <td style="text-align: center;"><strong>10</strong></td>
                            <td style="text-align: center;">20%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle colorVert me-2"></i> <strong>Faisabilité technique</strong></td>
                            <td style="text-align: center;"><strong>10</strong></td>
                            <td style="text-align: center;">20%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle colorVert me-2"></i> <strong>Crédibilité des bénéficiaires</strong></td>
                            <td style="text-align: center;"><strong>10</strong></td>
                            <td style="text-align: center;">20%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle colorVert me-2"></i> <strong>Cohérence budgétaire</strong></td>
                            <td style="text-align: center;"><strong>10</strong></td>
                            <td style="text-align: center;">20%</td>
                        </tr>
                        <tr style="background: rgba(0, 158, 96, 0.05);">
                            <td><strong>TOTAL</strong></td>
                            <td style="text-align: center;"><strong class="colorVert">50</strong></td>
                            <td style="text-align: center;"><strong>100%</strong></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== CTA Section ==== -->
<section class="section-padding">
    <div class="container">
        <div class="cta-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta-section__content">
                <h3 class="cta-section__title">Vous êtes éligible ?</h3>
                <p class="cta-section__text">Découvrez les étapes pour soumettre votre projet et commencez votre inscription dès maintenant.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('soumettre-projet') }}" class="btn-ayenah btn-ayenah--white">
                        <i class="fa fa-list-ol"></i> Voir les étapes
                    </a>
                    <a href="{{ route('enregistrement') }}" class="btn-ayenah btn-ayenah--outline" style="border-color: white; color: white;">
                        <i class="fa fa-paper-plane"></i> S'inscrire maintenant
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
