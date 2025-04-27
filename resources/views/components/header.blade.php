<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NV2KZ3T6');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G9ML8S804V"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G9ML8S804V');
    </script>

    <script type="text/javascript" src="https://app.secureprivacy.ai/script/680d6825f5321fce8fa53ee9.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset ('front/assets/images/favicon.svg ') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('front/assets/images/favicon.svg ') }}" type="image/x-icon">

    <title>@yield('title')</title>


    <meta name="keywords" content="diaspora, développement, Côte d'Ivoire, fundraising, mobilisation, investissement, Diaspora Ivoirienne, DGIE, Direction Générale des Ivoiriens de la Diaspora, Gaoussou KARAMOKO, CRPM, CRPM2, EXPERTISE FRANCE, AFD, Guichet Unique de la Diaspora Ivoirienne, Ministère des Affaires Étrangères Ivoirienne">
    <meta name="description" content="Découvrez le Projet Ayenah : une initiative visant à mobiliser la diaspora ivoirienne pour contribuer au développement durable et socio-économique de la Côte d'Ivoire.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="AYENAH | Mobiliser la diaspora pour le développement de la Côte d'Ivoire">
    <meta property="og:description" content="Le Projet Ayenah mobilise les compétences et ressources de la diaspora ivoirienne pour transformer les communautés locales et stimuler le développement durable en Côte d'Ivoire.">
    <meta property="og:url" content="https://ayenah.ci">
    <meta property="og:image" content="https://ayenah.ci/assets/images/banner/1.jpg">

    <meta property="og:site_name" content="Projet Ayenah">
    <meta property="og:locale" content="fr_FR">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AYENAH | Mobiliser la diaspora pour le développement de la Côte d'Ivoire">
    <meta name="twitter:description" content="Découvrez comment la diaspora ivoirienne contribue au développement durable et socio-économique de la Côte d'Ivoire grâce au Projet Ayenah.">
    <meta name="twitter:image" content="https://ayenah.ci/assets/images/social-share.jpg">

    <meta name="twitter:site" content="@ayenah_project">

    <link rel="canonical" href="https://ayenah.ci">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css">

    <link rel="canonical" href="https://ayenah.ci">
    <meta name="language" content="French">
    <meta name="geo.region" content="CI">

    <!-- Open Graph / Partage social -->
    <meta property="og:title" content="AYENAH.ci | La diaspora ivoirienne actrice du développement">
    <meta property="og:description" content="Investissez dans des projets locaux ou partagez votre expertise avec la Côte d'Ivoire.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ayenah.ci">
    <meta property="og:image" content="https://ayenah.ci/front/assets/images/pics/bg.jpg">
    <meta property="og:locale" content="fr_CI">
    <meta property="og:site_name" content="AYENAH">


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('front/assets/css/main.css ') }}">
    <link rel="stylesheet" href="{{ asset ('front/assets/css/responsive.css ') }}">
    <link rel="stylesheet" href="{{ asset ('front/assets/css/default-theme.css') }}" id="switch-color">
    <link rel="stylesheet" href="{{ asset ('front/assets/css/sticky-header.css') }}">
    <link rel="stylesheet" href="{{ asset ('front/assets/css/box-layout.css') }}">
    <link rel="stylesheet" href="{{ asset ('front/assets/css/rtl.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NV2KZ3T6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--[if lt IE 9]>
        <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p>
    <![endif]-->

    <div class="page-wrapper">

        <!-- ==== preloader start ==== -->
        <div class="preloader">
            <img src="{{ asset ('front/assets/images/preloader.png') }}" alt="" width="20%">
        </div>
        <!-- ==== / preloader end ==== -->

        <!-- ==== topbar start ==== -->
        <div class="topbar d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="topbar__list-wrapper">
                            <ul class="topbar__list">
                                <li>
                                    <a href="https://maps.app.goo.gl/Kw8yJBQC28xGXQ7J9" target="_blank">
                                        <i class="fa-solid fa-location-dot"></i>
                                        Cocody, 2 Plateaux, Chambre National des Métiers
                                    </a>
                                </li>
                                <li><a href="mailto:infos@ayenah.ci"><i
                                            class="fa-regular fa-envelope"></i>infos@ayenah.ci</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="topbar__items justify-content-end">
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                    title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="{{route('login')}}" aria-label="Connect to account"
                                    title="Connect to account">
                                    <i class="fa-brands fa-user"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== / topbar end ==== -->

        <!-- ==== header start ==== -->
        <header class="header header-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-header__menu-box">
                            <nav class="navbar p-0">
                                <div class="navbar-logo">
                                    <a href="{{route('home')}}" aria-label="home page" title="logo">
                                        <img src="{{ asset ('front/assets/images/logo.png') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="navbar__menu d-none d-xl-block">
                                    <ul class="navbar__list">
                                        <li class="navbar__item nav-fade">
                                            <a href="{{ route('home') }}">
                                                <span class="menu-form">
                                                    ACCUEIL
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="{{ route('about') }}">
                                                <span class="menu-form">
                                                    LE PROJET AYENAH
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="{{ route('events') }}">
                                                <span class="menu-form">
                                                    ACTUALITÉS
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="{{ route('faqs') }}">
                                                <span class="menu-form">
                                                    FAQs
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="{{ route('contact') }}">
                                                <span class="menu-form">
                                                    CONTACT
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar__options">
                                    <div class="navbar__mobile-options ">
                                        <div class="sidenav-box d-none d-xl-block">
                                            <button class="open-sidenav" aria-label="sidenav" title="open sidenav"
                                                style="margin-right: 100px !important;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 28 26" fill="none">
                                                    <ellipse cx="2.39023" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="#FFC107" />
                                                    <ellipse cx="13.9146" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="25.44" cy="2.39022" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="2.39023" cy="12.6334" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="13.9146" cy="12.6344" rx="2.39023" ry="2.39022"
                                                        fill="#FFC107" />
                                                    <ellipse cx="25.44" cy="12.6344" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="2.39023" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="13.9996" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="black" />
                                                    <ellipse cx="25.61" cy="23.0484" rx="2.39023" ry="2.39022"
                                                        fill="#FFC107" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                                        title="open offcanvas menu">
                                        <span class="icon-bar top-bar"></span>
                                        <span class="icon-bar middle-bar"></span>
                                        <span class="icon-bar bottom-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ==== / header end ==== -->

        <!-- ==== mobile menu start ==== -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="mobile-menu__wrapper">
                <div class="mobile-menu__header nav-fade">
                    <div class="logo">
                        <a href="{{route('home')}}" aria-label="home page" title="logo">
                            <img src="{{ asset ('front/assets/images/logo.png') }}" alt="Image">
                        </a>
                    </div>
                    <button aria-label="close mobile menu" class="close-mobile-menu">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="mobile-menu__list"></div>
                <div class="mobile-menu__social social nav-fade">
                    <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                        title="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                        title="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </nav>
        </div>
        <div class="mobile-menu__backdrop"></div>
        <!-- ==== / mobile menu end ==== -->

        <!-- ==== off canvas start ==== -->
        <div class="off-canvas d-none d-xl-block">
            <div class="off-canvas__inner">
                <div class="off-canvas__head">
                    <a href="./">
                        <img src="{{ asset ('front/assets/images/logo.png') }}" alt="Logo">
                    </a>
                    <button aria-label="close off canvas" class="off-canvas-close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="off-canvas__contact">
                    <h5>Contacts</h5>
                    <div class="single">
                        <span>
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>
                        <a href="tel:253-556-7777">(+225) 27 21 32 27 42</a>
                    </div>
                    <div class="single">
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <a href="mailto:infos@ayenah.ci">infos@ayenah.ci</a>
                    </div>
                    <div class="single">
                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <a target="_blank" href="https://maps.app.goo.gl/Kw8yJBQC28xGXQ7J9">
                            Cocody, 2 Plateaux, Chambre National des Métiers
                        </a>
                    </div>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/" target="_blank" aria-label="find us on facebook"
                        title="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" aria-label="find us on twitter" title="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" aria-label="find us on linkedin"
                        title="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="off-canvas-backdrop"></div>
        <!-- ==== / off canvas end ==== -->