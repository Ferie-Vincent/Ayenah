@extends('layout/template')

@section('title', 'AYENAH | Accueil - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('meta_description', 'AYENAH mobilise la diaspora ivoirienne pour le développement de la Côte d\'Ivoire. Financez vos projets jusqu\'à 50 000 EUR ou proposez votre expertise.')

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
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <div class="difference-three__thumb text-center text-lg-start">
                    <div class="difference-three__thumb-inner photo-3d-float">
                        <div class="photo-3d-float__inner thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/gaoussou.jpg')}}" alt="Dr. Gaoussou Karamoko - Directeur Général des Ivoiriens de l'Extérieur" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);" loading="lazy">
                        </div>
                        <div class="line">
                            <img src="{{ asset ('front/assets/images/difference/line.png') }}" alt="AYENAH - décoration" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="difference-three__content">
                    <div class="section__content">
                        <h2 class="title-animation"><span>Dr. GAOUSSOU KARAMOKO</span> Directeur Général des
                            Ivoiriens de l'Extérieur</h2>
                        <p style="text-align: justify;">
                            La Direction Générale des Ivoiriens de l'Extérieur (DGIE) a pour mission de renforcer les liens entre la Côte d'Ivoire et sa diaspora. Avec plus de 1,2 million d'Ivoiriens répartis dans le monde, nous avons un potentiel immense à mobiliser pour le développement de notre nation.
                        </p>
                        <p style="text-align: justify;">
                            Le projet AYENAH représente une avancée majeure dans notre stratégie de mobilisation de la diaspora. Il offre un cadre structuré et sécurisé pour transformer l'engagement de nos compatriotes de l'extérieur en actions concrètes sur le terrain.
                        </p>
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q><span>AYENAH</span> incarne notre vision d'une diaspora pleinement intégrée dans le processus de développement national. Ensemble, construisons l'avenir de la Côte d'Ivoire.
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / DG GAOUSSOU KARAMOKO end ==== -->

<div class="w-50 mx-auto text-center divider-green" style="color: green;">
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
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q style="text-align : justify;">Avec <span>CRPM2</span>
                            la DGIE bénéficie d'un appui stratégique et financier sur mesure,
                        tout en s'inspirant des bonnes pratiques des pays pairs du projet tels que - Cameroun, Comores, Guinée, Madagascar et Sénégal -
                        tous engagés dans une dynamique commune de mobilisation de leurs diasporas.
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="difference-three__thumb text-center text-lg-end">
                    <div class="difference-three__thumb-inner photo-3d-float">
                        <div class="photo-3d-float__inner thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/bamadi.jpg')}}" alt="M. Bamadi Sanokho - Chef de Projet CRPM2" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / Bamadi Sanokho end ==== -->

<div class="w-50 mx-auto text-center divider-green" style="color: green;">
    <hr>
</div>

<!-- ==== DIABATÉ OMIGNAN ==== -->
<section class="difference-three" id="aboutSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="difference-three__thumb text-center text-lg-end">
                    <div class="difference-three__thumb-inner photo-3d-float">
                        <div class="photo-3d-float__inner thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset ('front/assets/images/omi.jpg') }}" alt="Mme Diabaté Omignan - Coordinatrice du Projet AYENAH" width="100%" class="shadow" style="border-radius: 10px; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);" loading="lazy">
                        </div>
                        <div class="line">
                            <img src="{{ asset ('front/assets/images/difference/line.png') }}" alt="AYENAH - décoration" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="difference-three__content">
                    <div class="section__content">
                        <h2 class="title-animation"><span class="colorVert">Coordinatrice Mme DIABATÉ Omignan</span>
                        <br> Sous-Directrice
                        </h2>
                        <p>
                            Chers membre de la diaspora, <br>
                            Un projet innovant et unique vous est dédié : <span style="font-weight: bold; font-size: 18px; text-align: justify; color: green;">AYENAH</span> <br>
                            Devenez de véritables acteurs du développement durable de la Côte d’Ivoire !
                        </p>
                        <p>
                            AYENAH, c’est un dispositif pilote lancé par la Direction Générale des Ivoiriens de l’Extérieur (DGIE),
                            conçu pour mobiliser les compétences et les initiatives de la diaspora autour de deux grands axes : <br>
                            <span style="">
                            <ol style="margin-left: 5% !important; margin-top: -15px !important;">
                                <li>1. La valorisation des talents de la Diaspora dans les secteurs clés du développement national</li>
                                <li>2. L'appui financier aux projets de développement local, portés par les associations de la diaspora, en collaboration avec les acteurs locaux</li>
                            </ol>
                            </span>
                        </p>
                    </div>
                    <div class="differnce-quote">
                        <blockquote>
                            <q>Avec <span> AYENAH</span>
                            Prenez part à une nouvelle dynamique de DÉVELOPPEMENT LOCAL
                            </q>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / DIABATÉ OMIGNAN end ==== -->

<div class="w-50 mx-auto text-center divider-green" style="color: green;">
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
                            <a href="https://youtu.be/MRTcA2TSfec" target="_blank"
                                title="video Player" class="open-video-popup">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="donation-future__thumb" data-background=""
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
                        <a href="{{ route('enregistrement') }}" class="btn--primary">Participez </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donation-bg">
        <img src="{{asset('front/assets/images/banner/bg-1.png')}}" alt="AYENAH - arrière-plan" class="parallax-image">
        <img src="{{asset('front/assets/images/donation/shape.png')}}" alt="" class="shape" loading="lazy">
    </div>
</section>
<!-- ==== / Présentation AYENAH end ==== -->

<!-- ==== Les 3 Piliers Section ==== -->
<section class="section-padding" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">PROGRAMME</span>
            <h2 class="section-header__title">Les 3 Piliers du Programme <span>AYENAH</span></h2>
            <p class="section-header__desc">Trois façons de contribuer au développement de la Côte d'Ivoire</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="pilier-card-3d">
                    <div class="pilier-card-3d__inner">
                        <div class="pilier-card pilier-card--green text-center">
                            <div class="pilier-card__icon">
                                <i class="fa fa-hand-holding-heart"></i>
                            </div>
                            <span class="pilier-card__number">Pilier 1</span>
                            <h4 class="pilier-card__title">Initiatives Locales</h4>
                            <p class="pilier-card__text">Cofinancement de projets de développement portés conjointement par la diaspora et des structures locales</p>
                            <div class="pilier-card__badge">
                                <span>Jusqu'à 50 000 EUR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="pilier-card-3d">
                    <div class="pilier-card-3d__inner">
                        <div class="pilier-card pilier-card--orange text-center">
                            <div class="pilier-card__icon">
                                <i class="fa fa-user-tie"></i>
                            </div>
                            <span class="pilier-card__number">Pilier 2</span>
                            <h4 class="pilier-card__title">Expertise Diaspora</h4>
                            <p class="pilier-card__text">Mobilisation des compétences professionnelles pour des missions d'appui technique en Côte d'Ivoire</p>
                            <div class="pilier-card__badge">
                                <span>Missions prises en charge</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="pilier-card-3d">
                    <div class="pilier-card-3d__inner">
                        <div class="pilier-card pilier-card--coral text-center">
                            <div class="pilier-card__icon">
                                <i class="fa fa-comments"></i>
                            </div>
                            <span class="pilier-card__number">Pilier 3</span>
                            <h4 class="pilier-card__title">Dialogue Institutionnel</h4>
                            <p class="pilier-card__text">Renforcement du cadre d'échange entre l'État ivoirien et sa diaspora à travers des forums</p>
                            <div class="pilier-card__badge">
                                <span>Forums & Ateliers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
            <a href="{{ route('piliers') }}" class="btn-ayenah btn-ayenah--primary">
                <i class="fa fa-arrow-right"></i> Découvrir les 3 piliers en détail
            </a>
        </div>
    </div>
</section>
<!-- ==== / Les 3 Piliers Section end ==== -->

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
                    <button type="button" aria-label="diapositive précédente" title="diapositive précédente"
                        class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button type="button" aria-label="diapositive suivante" title="diapositive suivante"
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
                                                <img src="https://placehold.co/291x212" alt="Image" loading="lazy">
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
                                                        Nom de la structure porteuse de projet : <span class="goal"> COVEFAH </span>
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
                                                <img src="https://placehold.co/291x212" alt="Image" loading="lazy">
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
                                                        Nom de la structure porteuse de projet : <span class="goal"> SK GROUP AFRICA </span>
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
                    <a href="{{route('projects')}}" aria-label="voir les projets soutenus" title="voir les projets soutenus"
                        class="btn--primary">Voir la liste des projets
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="spade">
        <img src="{{asset('front/assets/images/help/spade.png')}}" alt="" loading="lazy">
    </div>
</section> -->
<!-- ==== / Liste de Projets end ==== -->

<!-- ==== Diasporique start ==== -->
<!-- <section class="team" data-background="{{asset('front/assets/images/https://placehold.co/1920x1080')}}" id="teamSection">
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
                                <img src="https://placehold.co/315x350" alt="Image" loading="lazy">
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
                                <img src="https://placehold.co/315x350" alt="Image" loading="lazy">
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
                                <img src="https://placehold.co/315x350" alt="Image" loading="lazy">
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
                                <img src="https://placehold.co/315x350" alt="Image" loading="lazy">
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
                    <a href="{{route('contact')}}" aria-label="nous contacter" title="nous contacter"
                        class="btn--primary">Écrivez nous si vous voulez en faire partie
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ==== / Diasporique end ==== -->

<!-- ==== help section start ==== -->
<section class="help-three mt-5 pb-5">
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
                            <div class="col-12 col-lg-4 col-xxl-5">
                                <div class="help-cta">
                                    <a href="{{route('about')}}" aria-label="en savoir plus" title="en savoir plus"
                                        class="btn--primary">En savoir plus<i
                                            class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="help-three__wrapper">
                        <div class="row gutter-60">
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-credit-card"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6> 01</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Statut juridique valide du demandeur</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-ship"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6> 02</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Partenariat effectif entre diaspora et acteur local</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3">
                                <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="600">
                                    <div class="help-three__thumb">
                                        <div class="thumb">
                                            <i class="icon-pack"></i>
                                        </div>
                                        <div class="help-three__tag">
                                            <h6> 03</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Montant demandé <br> ≤ 50.000 €</h6>
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
                                            <h6> 04</h6>
                                        </div>
                                    </div>
                                    <div class="help-three__content">
                                        <h6>Participation des bénéficiaires ≥ 30 %</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('front/assets/images/v-line.png')}}" alt="" class="v-line d-none d-xxl-block" loading="lazy">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="help-three-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <!-- <img src="assets/images/bg-one.png" alt="Image" class="bg-help"> -->
        <div class="poor-boy">
            <img src="{{asset('front/assets/images/critere.png')}}" alt="Critères d'éligibilité AYENAH" class="poor" loading="lazy">
            <img src="{{asset('front/assets/images/shape-three.png')}}" alt="" class="shape" loading="lazy">
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
                                <img src="{{asset('front/assets/images/sponsor/ae.png')}}" alt="Ministère des Affaires Étrangères de l'Intégration Africaine, et des Ivoiriens de l'Extérieur - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="Agence Française de Développement (AFD)" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/crpm.png')}}" alt="Coopération Régionale des Politiques Migratoires - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ef.png')}}" alt="Expertise France - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/dgie.png')}}" alt="Direction Générale des Ivoiriens de l'Extérieur - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ae.png')}}" alt="Ministère des Affaires Étrangères de l'Intégration Africaine, et des Ivoiriens de l'Extérieur - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="Agence Française de Développement (AFD)" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/crpm.png')}}" alt="Coopération Régionale des Politiques Migratoires - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/ef.png')}}" alt="Expertise France - Ayenah" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner__slider-single">
                                <img src="{{asset('front/assets/images/sponsor/dgie.png')}}" alt="Direction Générale des Ivoiriens de l'Extérieur - Ayenah" loading="lazy">
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
                                        1. Qui peut soumettre un projet ?
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Tout Ivoirien résidant à l’étranger (diaspora)</li>
                                            <li>Les associations de diaspora légalement enregistrées</li>
                                            <li>En partenariat avec une structure locale (mairie, ONG, coopérative)</li>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        2. Quels types de projets sont financés ?
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                    <ul>
                                            <li>Santé (cliniques, campagnes de sensibilisation)</li>
                                            <li>Éducation (écoles, bibliothèques, formations)</li>
                                            <li>Agriculture durable (équipements, coopératives)</li>
                                            <li>Énergies renouvelables (solaire, biogaz)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        3. Comment soumettre un projet ?
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>S'inscrire sur le site via <a target="_blank" href="{{ route('enregistrement') }}" class="text-warning">le lien</a></li>
                                            <li>Remplir le formulaire + convention de partenariat local</li>
                                            <li>Envoyer à la DGIE pour évaluation, au mail <a href="mailto:infos@ayenah.ci" class="text-warning">infos@ayenah.ci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        4. Quel est le montant maximum de financement ?
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Subvention maximale : <strong>50 000 EUR</strong> par projet</li>
                                            <li>AYENAH finance jusqu'à <strong>70%</strong> du coût total</li>
                                            <li>Les bénéficiaires doivent apporter au moins <strong>30%</strong></li>
                                        </ul>
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
                            <img src="{{asset('front/assets/images/faq.png')}}" alt="FAQs - Ayenah" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape d-none d-lg-block">
        <img src="{{asset('front/assets/images/faq/shape.png')}}" alt="" loading="lazy">
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
                            <img src="{{asset('storage/' .$visite->cover_image)}}" alt="{{ $visite->title }}" loading="lazy">
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('events')}}" aria-label="nos actualités" title="nos actualités"
                        class="btn--primary">Découvrir plus<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / award section end ==== -->

<x-form-inscription></x-form-inscription>

@endsection
