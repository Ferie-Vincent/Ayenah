@extends('layout/template')

@section('title', 'AYENAH | Accueil - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner start ==== -->
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="banner__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner__content text-center">
                                <h1>Mobiliser la
                                    <span>Diaspora</span> Pour le développement de la <span>Côte d'Ivoire</span>
                                </h1>
                                <div class="banner__content-cta cta">
                                    <a href="{{route('enregistrement')}}" aria-label="Enregistrement" title="Enregistrez-vous"
                                        class="btn--tertiary">J'ai un Projet 🎉<i
                                            class="fa-solid fa-arrow-right"></i></a>
                                    <!-- <a onclick="inscription()" aria-label="Projet" title="Projet" class="btn--primary">
                                        Présentez votre projet
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src=" {{asset('front/assets/images/pics/bg.jpg')}} " alt="Ayenah Background Picture" class="parallax-image">
    </div>
    <div class="alter-shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
    <div class="circle-shape"></div>
</section>
<!-- ==== / banner end ==== -->

<!-- ==== DG GAOUSSOU KARAMOKO ==== -->
<section class="difference-three" id="aboutSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="difference-three__thumb d-none d-lg-block">
                    <div class="difference-three__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/gaoussou.jpg')}}" alt="Dr. Gaoussou Karamoko - Directeur Général des Ivoiriens de l'Extérieur" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        </div>
                        <div class="line">
                            <img src="{{ asset ('front/assets/images/difference/line.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="difference-three__content">
                    <div class="section__content">
                        <h2 class="title-animation"><span>Dr. GAOUSSOU KARAMOKO</span> Directeur Général des
                            Ivoiriens Extérieur</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deserunt fugit
                            molestias ipsum ad incidunt consequatur, necessitatibus, delectus quia atque, nulla
                            veniam reprehenderit culpa rem aliquam. Nulla quae molestias neque.
                        </p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolores, eum
                            amet, dolor rerum reprehenderit rem quibusdam perspiciatis sit repellat numquam
                            ratione porro illo aliquam incidunt id similique. Veniam, incidunt?
                        </p>
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q><span>Lorem ipsum dolor</span>
                                sit amet consectetur adipisicing elit. Officiis consequatur aperiam laborum
                                tempore ipsum officia dolorum omnis iste natus.
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / DG GAOUSSOU KARAMOKO end ==== -->

<div class="w-50 mx-auto text-center" style="color: green;">
    <hr>
</div>

<!-- ==== Bamadi Sanokho start ==== -->
<section class="difference-three" id="aboutSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <div class="difference-three__content">
                    <div class="section__content">
                        <h2 class="title-animation"><span class="colorOrange">M. BAMADI SANOKHO</span>
                            <br> Chef de Projet <span style="text-transform: uppercase !important;">CRPM2</span>
                        </h2>
                        <p style="text-align : justify;">
                        Le projet <span class="colorOrange" style="font-weight: bold">CRPM2</span> (Coopération Régionale des Politiques Migratoires - Phase 2),
                        financé par l'AFD et mis en œuvre par Expertise France, soutient la DGIE dans le déploiement du projet AYENAH. <br>
                        Son ambition ? Mettre en place un outil innovant et opérationnel pour mobiliser la diaspora ivoirienne au service du développement économique,
                        culturel et social de la Côte d'Ivoire.
                        </p>
                        <p>
                        Avec CRPM2, la DGIE bénéficie d'un appui stratégique et financier sur mesure,
                        tout en s'inspirant des bonnes pratiques des pays pairs du projet tels que - Cameroun, Comores, Guinée, Madagascar et Sénégal -
                        tous engagés dans une dynamique commune de mobilisation de leurs diasporas.
                        </p>
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q><span>Lorem ipsum dolor</span>
                                sit amet consectetur adipisicing elit. Officiis consequatur aperiam laborum
                                tempore ipsum officia dolorum omnis.
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="difference-three__thumb d-none d-lg-block">
                    <div class="difference-three__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/bamadi.jpg')}}" alt="M. Bamadi Sanokho - Chef de Projet CRPM2" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / Bamadi Sanokho end ==== -->

<div class="w-50 mx-auto text-center" style="color: green;">
    <hr>
</div>

<!-- ==== DIABATÉ OMIGNAN ==== -->
<section class="difference-three" id="aboutSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="difference-three__thumb d-none d-lg-block">
                    <div class="difference-three__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/omi.jpg') }}" alt="Mme Diabaté Omignan. - Directrice Opérationnel du Projet AYENAH" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        </div>
                        <div class="line">
                            <img src="{{ asset ('front/assets/images/difference/line.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="difference-three__content">
                    <div class="section__content">
                        <h2 class="title-animation"><span class="colorOrange">Directrice  Mme DIABATÉ O.</span>
                        <br> Chef de la cellule Opération du Projet <span style="text-transform: uppercase !important;">AYENAH</span>
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deserunt fugit
                            molestias ipsum ad incidunt consequatur, necessitatibus, delectus quia atque, nulla
                            veniam reprehenderit culpa rem aliquam. Nulla quae molestias neque.
                        </p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolores, eum
                            amet, dolor rerum reprehenderit rem quibusdam perspiciatis sit repellat numquam
                            ratione porro illo aliquam incidunt id similique. Veniam, incidunt?
                        </p>
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q><span>Lorem ipsum dolor</span>
                                sit amet consectetur adipisicing elit. Officiis consequatur aperiam laborum
                                tempore ipsum officia dolorum omnis iste natus.
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / DIABATÉ OMIGNAN end ==== -->

<div class="w-50 mx-auto text-center" style="color: green;">
    <hr>
</div>


<!-- ==== Présentation AYENAH ==== -->
<section class="donation-future">
    <div class="container">
        <div class="row gutter-40">
            <div class="col-12 col-lg-6 col-xl-7 mb-5 ">
                <div class="donation-future__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation">Découvrez le projet <br> <span>AYENAH</span>
                            en vidéo.
                        </h2>
                        <div class="video-btn-wrapper">
                            <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                title="video Player" class="open-video-popup">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="donation-future__thumb" data-background="https://placehold./1920x572"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h4>Apport du Projet AYENAH</h4>
                    <div class="cause__progress progress-bar-single">
                        <div class="cause-progress__bar">
                            <div class="progress-bar-wrapper" data-percent="70%">
                                <div class="progress-bar">
                                    <div class="progress-bar-percent"><span class="percent-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>Apport de la Diaspora</h4>
                    <div class="cause__progress progress-bar-single">
                        <div class="cause-progress__bar">
                            <div class="progress-bar-wrapper" data-percent="30%">
                                <div class="progress-bar">
                                    <div class="progress-bar-percent"><span class="percent-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="cause-progress__goal">
                        <p>Minimum: <span class="raised">5,000 €</span></p>
                        <p>Maximum: <span class="goal">50,000 €</span></p>
                    </div>
                    <div class="cta">
                        <a href="" class="btn--primary">Participez </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donation-bg">
        <img src="{{asset('front/assets/images/banner/bg-1.png')}}" alt="Image" class="parallax-image">
        <img src="{{asset('front/assets/images/donation/shape.png')}}" alt="Image" class="shape">
    </div>
</section>
<!-- ==== / Présentation AYENAH end ==== -->

<!-- ==== Liste de Projets start ==== -->
 <!-- <section class="cause cause-three" id="causeSection">
    <div class="container">
        <div class="row gutter-30 align-items-center">
            <div class="col-12 col-md-8 col-xl-7">
                <div class="section__header">
                    <h2 class="title-animation">Liste des <span>Projets</span>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-5">
                <div class="slider-navigation">
                    <button type="button" aria-label="prev slide" title="prev slide"
                        class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button type="button" aria-label="next slide" title="next slide"
                        class="next-cause slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cause__slider-wrapper">
                    <div class="cause__slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                        <div class="thumb">
                                            <a>
                                                <img src="https://placehold.co/291x212" alt="Image">
                                            </a>
                                            <div class="tag">
                                                <a href="our-causes.html">Agro-industrie</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h6><a>Production bio d'Huile de Coco</a></h6>
                                            <p>La production et la Commercialisation de produits biologiques à base d'huile de coco
                                            </p>
                                        </div>
                                        <div class="cause__slider-cta">
                                            <div class="cause__progress progress-bar-single">
                                                <div class="cause-progress__intro">
                                                    <p>
                                                        <span>Montant demandé</span>
                                                    </p>
                                                </div>
                                                <div class="cause-progress__goal">
                                                    <span class="goal"> -- Fr CFA</span></p>
                                                </div>
                                                <hr>
                                                <div class="cause-progress__bar">
                                                    <p>
                                                        Nom de la structure porteur de projet : <span class="goal"> COVEFAH </span>
                                                    </p>
                                                    <p>
                                                        Partenaire de la DIASPORA : <span class="goal"> NOVAIS COSMETICS </span>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                        <div class="thumb">
                                            <a>
                                                <img src="https://placehold.co/291x212" alt="Image">
                                            </a>
                                            <div class="tag">
                                                <a href="our-causes.html">Développement durable</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h6><a></a></h6>
                                            <p>Optimisation de la Filière Manioc : Production, Transformation
et Commercialisation Modernes dans la Région du Grand Est et
à l'International"
                                            </p>
                                        </div>
                                        <div class="cause__slider-cta">
                                            <div class="cause__progress progress-bar-single">
                                                <div class="cause-progress__intro">
                                                    <p>
                                                        <span>Montant demandé</span>
                                                    </p>
                                                </div>
                                                <div class="cause-progress__goal">
                                                    <span class="goal"> -- Fr CFA</span></p>
                                                </div>
                                                <hr>
                                                <div class="cause-progress__bar">
                                                    <p>
                                                        Nom de la structure porteur de projet : <span class="goal"> SK GROUP AFRICA </span>
                                                    </p>
                                                    <p>
                                                        Partenaire de la DIASPORA: <span class="goal"> DIASPERE PER LA PACE </span>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('projects')}}" aria-label="contact" title="contact"
                        class="btn--primary">Voir la liste des projets
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="spade">
        <img src="{{asset('front/assets/images/help/spade.png')}}" alt="Image">
    </div>
</section> -->
<!-- ==== / Liste de Projets end ==== -->

<!-- ==== Diasporique start ==== -->
<!-- <section class="team" data-background="{{asset('front/assets/images/bg-one.png')}}" id="teamSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-6">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="title-animation">La diaspora ayant contribué au projet <span>AYENAH</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-40">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                            <a href="team-details.html">
                                <img src="https://placehold.co/315x350" alt="Image">
                            </a>
                        </div>
                        <div class="team__single-content">
                            <h6><a href="team-details.html">Raymond KONÉ</a></h6>
                            <p>Ingénieur - (Angleterre)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                            <a href="team-details.html">
                                <img src="https://placehold.co/315x350" alt="Image">
                            </a>
                        </div>
                        <div class="team__single-content">
                            <h6><a href="team-details.html">Raymond KONÉ</a></h6>
                            <p>Ingénieur - (Angleterre)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                            <a href="team-details.html">
                                <img src="https://placehold.co/315x350" alt="Image">
                            </a>
                        </div>
                        <div class="team__single-content">
                            <h6><a href="team-details.html">Raymond KONÉ</a></h6>
                            <p>Ingénieur - (Angleterre)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                            <a href="team-details.html">
                                <img src="https://placehold.co/315x350" alt="Image">
                            </a>
                        </div>
                        <div class="team__single-content">
                            <h6><a href="team-details.html">Raymond KONÉ</a></h6>
                            <p>Ingénieur - (Angleterre)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('contact')}}" aria-label="contact" title="contact"
                        class="btn--primary">Écrivez nous si vous voulez en faire partir
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ==== / Diasporique end ==== -->

<!-- ==== help section start ==== -->
<section class="help-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="help-three__inner">
                    <div class="section__header-secondary" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row gutter-30 align-items-center">
                            <div class="col-12 col-lg-8 col-xxl-7">
                                <div class="section__header mb-0">
                                    <h2 class="title-animation">Critères <span>d'éligibilité</span>
                                    </h2>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-lg-4 col-xxl-5">
                                <div class="help-cta">
                                    <a href="about-us.html" aria-label="our team" title="our team"
                                        class="btn--primary">Lire plus<i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="help-three__wrapper">
                        <div class="row gutter-60">
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-pack"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6>Étape- 01</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Lorem, ipsum.</h6>
                                        <p>Pellentesque habitant morbi trist
                                            fames ac turp egestas. Aliquam
                                            enim feugiat mattis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-credit-card"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6>Étape - 02</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Percel Information</h6>
                                        <p>Pellentesque habitant morbi trist
                                            fames ac turp egestas. Aliquam
                                            enim feugiat mattis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="600">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-ship"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6>Étape - 03</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Transportation</h6>
                                        <p>Pellentesque habitant morbi trist
                                            fames ac turp egestas. Aliquam
                                            enim feugiat mattis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="900">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-truck"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6>Étape - 04</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Takeover Products</h6>
                                        <p>Pellentesque habitant morbi trist
                                            fames ac turp egestas. Aliquam
                                            enim feugiat mattis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('front/assets/images/v-line.png')}}" alt="Image" class="v-line d-none d-xxl-block">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="help-three-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <img src="assets/images/bg-one.png" alt="Image" class="bg-help">
        <div class="poor-boy">
            <img src="{{asset('front/assets/images/critere.png')}}" alt="Image" class="poor">
            <img src="{{asset('front/assets/images/shape-three.png')}}" alt="Image" class="shape">
        </div>
    </div>
</section>
<!-- ==== / help section end ==== -->

<!-- ==== partner section start ==== -->
<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ae.png')}}" alt="Ministère des Affaires Étrangères de l'Intégration Africaine, et des Ivoiriens de l'Extérieur - Ayenah">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="Agence Française de Développement (AFD)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/crpm.png')}}" alt="Coopération Régionale des Politiques Migratoires - Ayenah">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ef.png')}}" alt="Expertise France - Ayenah">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ae.png')}}" alt="Ministère des Affaires Étrangères de l'Intégration Africaine, et des Ivoiriens de l'Extérieur - Ayenah">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="Agence Française de Développement (AFD)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/crpm.png')}}" alt="Coopération Régionale des Politiques Migratoires - Ayenah">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ef.png')}}" alt="Expertise France - Ayenah">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / partner section end ==== -->

<!-- ==== faq section start ==== -->
<section class="faq" id="faqSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <div class="faq__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation"> <span>Foire aux Questions</span>
                        </h2>
                    </div>
                    <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="accordion" id="accordion">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ?
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                            asperiores obcaecati? Qui obcaecati, dicta recusandae corporis
                                            quisquam alias dolores ab accusamus molestiae.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ?
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                            quidem cumque saepe perferendis quaerat? Eligendi suscipit officiis
                                            beatae delectus sapiente, nihil consectetur?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ?
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim est
                                            ratione tempore, ab doloribus veritatis delectus praesentium
                                            consequuntur omnis nisi harum a, dicta accusantium.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ?
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iste
                                            ipsa quod delectus, vel dicta, quidem, explicabo quaerat repudiandae
                                            eaque minus nobis impedit quo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                <div class="faq__thumb d-none d-lg-block">
                    <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{asset('front/assets/images/faq.png')}}" alt="FAQs - Ayenah">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape d-none d-lg-block">
        <img src="{{asset('front/assets/images/faq/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / faq section end ==== -->

<!-- ==== award section start ==== -->
<section class="award" id="eventSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="title-animation">Les <span>Activités réalisées</span> avec le projet Ayenah
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-24">
        @foreach ($visites as $visite)
            <div class="col-12 col-lg-6">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                    <div class="thumb">
                        <a href="{{route('event', $visite->id)}}">
                            <img src="{{asset('storage/' .$visite->cover_image)}}" alt="{{ $visite->title }}" >
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{route('event', $visite->id)}}">{{ $visite->title }}</a></h5>
                            <!-- <p> <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ $visite->created_at->format('d/m/Y') }}</span> -->
                            <p> <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ $visite->dateVisited }}</span>
                                | <i class="fa-solid fa-location-dot"></i> {{ $visite->region }}</p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{route('event', $visite->id)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-12 col-lg-6">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                    <div class="thumb">
                        <a href="{{route('event', $visites->first()->id)}}">
                            <img src="https://placehold.co/870x400" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{route('event', $visites->first()->id)}}">Lorem ipsum dolor sit amet.</a></h5>
                            <p> <i class="fa fa-calendar" aria-hidden="true"></i> <span>October 19, 2025</span>
                                | <i class="fa-solid fa-location-dot"></i> Région de la wèh</p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{route('event', $visites->first()->id)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                    <div class="thumb">
                        <a href="{{route('event', $visites->first()->id)}}">
                            <img src="https://placehold.co/870x400" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{route('event', $visites->first()->id)}}">Lorem ipsum dolor sit amet.</a></h5>
                            <p> <i class="fa fa-calendar" aria-hidden="true"></i> <span>October 19, 2025</span>
                                | <i class="fa-solid fa-location-dot"></i> Région de la wèh</p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{route('event', $visites->first()->id)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                    <div class="thumb">
                        <a href="{{route('event', $visites->first()->id)}}">
                            <img src="https://placehold.co/870x400" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{route('event', $visites->first()->id)}}">Lorem ipsum dolor sit amet.</a></h5>
                            <p> <i class="fa fa-calendar" aria-hidden="true"></i> <span>October 19, 2025</span>
                                | <i class="fa-solid fa-location-dot"></i> Région de la wèh</p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{route('event', $visites->first()->id)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('events')}}" aria-label="our events" title="our events"
                        class="btn--primary">Découvrir plus<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / award section end ==== -->

<x-form-inscription></x-form-inscription>

@endsection