@extends('layout/template')

@section('title', 'AYENAH | Le Projet Ayenah - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Le Projet AYENAH</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/project.png')}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== difference two section start ==== -->
<section class="difference-two">
    <div class="container">
        <div class="row gutter-40 align-items-center">
            <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                <div class="difference-two__thumb-wrapper">
                    <div class="difference-two__thumb">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{asset('front/assets//images/ayenah.png')}}" alt="Image">
                            <div class="grid-line">
                                <img src="{{asset('front/assets/images/help/grid.png')}}" alt="Image" class="base-img">
                            </div>
                        </div>
                        <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xxl-7">
                <div class="difference-two__content" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="title-animation">
                        Les <span>Diasporas</span> un partenaire au développement de la Côte d'Ivoire
                    </h2>
                    <p style="text-align: justify;">
                        Les Diasporas sont de plus en plus engagées dans le développement de leur pays d'origine. En Côte d'Ivoire, l'État souhaite soutenir cette dynamique et faire de la Diaspora un pilier du Développement du pays
                    </p>
                    <p style="text-align:justify">
                        Pour cela, la Direction Générale des Ivoiriens de l'Étranger mets en place un programme pilote, <span class="colorOrange", >Le Projet Ayenah</span>, pour mobiliser son expertise et accompagner les initiatives des associations de la diaspora dans le développement local.
                    </p>
                    <div class="help__content-list mt-5">
                       <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                            <ul>
                            <li class="m-4">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <a href="{{route('fiche-technique.download')}}" download>
                                    <span>
                                        Fiche technique
                                    </span>
                                </a>
                            </li>
                            <li class="m-4">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <a href="{{route('fiche-instruction.download')}}" download>
                                    <span>
                                        Fiche d'Instruction du Projet
                                    </span>
                                </a>
                            </li>
                        </ul>
                            </div>
                            <div class="col-lg-6">
                            <ul>
                            <li class="m-4">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <a href="{{route('fiche-technique.download')}}" download>
                                    <span>
                                        Fiche technique
                                    </span>
                                </a>
                            </li>
                            <li class="m-4">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <a href="{{route('fiche-instruction.download')}}" download>
                                    <span>
                                        Fiche d'Instruction du Projet
                                    </span>
                                </a>
                            </li>
                        </ul>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="difference-two__inner cta">
                        <div class="difference-two__inner-content">
                            <div class="difference-two__tab">
                                <div class="difference-two__tab-btns">
                                    <button class="difference-two__tab-btn active" data-target="#mission"
                                        aria-label="mission" title="mission">Les Axes d'interventions</button>
                                    <button class="difference-two__tab-btn" data-target="#vision"
                                        aria-label="vision" title="vision">La Cible</button>
                                    <button class="difference-two__tab-btn" data-target="#excellence"
                                        aria-label="excellence" title="excellence">Les Modalités d'Intervention</button>
                                </div>
                                <div class="difference-two__tab-content">
                                    <div class="difference-two__content-single" id="mission">
                                        <ol>
                                            <li><i>1. </i>
                                                 Promouvoir les talents de la Diaspora au service du Développement
                                            </li>
                                            <hr>
                                            <li><i>2. </i>
                                                Soutenir les Projets de développement local cofinancés par la Diaspora
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="difference-two__content-single" id="vision">
                                        <ol>
                                            <li><i>1. </i>
                                                 Aux compétences de la Diaspora qui souhaitent s'investir sur des sujets d'intérêt pour le développement de la Côte d'Ivoire
                                            </li>
                                            <hr>
                                            <li><i>2. </i>
                                                Aux associations de la Diaspora qui accompagnent des projets de développement local en Côte d'Ivoire
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="difference-two__content-single" id="excellence">
                                    <ol>
                                            <li><i>1. </i>
                                                 Accueil, orientation, communication auprès des porteurs de projet et des compétences de la diaspora
                                            </li>
                                            <hr>
                                            <li><i>2. </i>
                                                Appui technique aux montages de projet
                                            </li>
                                            <hr>
                                            <li><i>3. </i>
                                                Financement de projets portés par les associations de la diaspora en Côte d'Ivoire
                                            </li>
                                            <hr>
                                            <li><i>4. </i>
                                                Financement de mission d'expertise mobilisant les talents de la diaspora sur des sujets innovants
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / difference two section end ==== -->

<x-form-inscription></x-form-inscription>


<!-- ==== help section start ==== -->
<section class="help">
    <div class="container">
        <div class="row align-items-center gutter-40">
            <div class="col-12 col-lg-5 col-xxl-6 d-none d-lg-block">
                <div class="help__thumb">
                    <div class="help__thumb-inner">
                        <div class="thumb-lg thumb" data-aos="fade-left" data-aos-duration="1000">
                            <img src="{{asset('front/assets//images/ayenah.png')}}" alt="Image">
                        </div>
                        <div class="grid-line">
                            <img src="{{asset('front/assets/images/help/grid.png')}}" alt="Image" class="base-img">
                        </div>
                        <div class="vertical-text">
                            <h5>Découvrez Expertise France</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="help__content">
                    <h2 class="title-animation">Expertise France
                    </h2>
                    <p style="text-align: justify;">
                        Les Diasporas sont de plus en plus engagées dans le développement de leur pays d'origine. En Côte d'Ivoire, l'État souhaite soutenir cette dynamique et faire de la Diaspora un pilier du Développement du pays
                    </p>
                    <p style="text-align:justify">
                        Pour cela, la Direction Générale des Ivoiriens de l'Étranger mets en place un programme pilote, <span class="colorOrange", >Le Projet Ayenah</span>, pour mobiliser son expertise et accompagner les initiatives des associations de la diaspora dans le développement local.
                    </p>
                    
                   
                    <div class="help__content-cta cta">
                        <div class="contact-btn">
                            <div class="contact-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="contact-content">
                                <p>Phone</p>
                                <a href="tel:01-793-7938">+236 (456) 896 22</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hand">
        <!-- <img src="assets/images/help/hand.png" alt="Image"> -->
    </div>
</section>
<!-- ==== / help section end ==== -->




@endsection