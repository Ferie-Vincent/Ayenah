@extends('layout/template')

@section('title', 'AYENAH | Le Programme - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('meta_description', 'Découvrez le programme AYENAH : un dispositif officiel de l\'État ivoirien pour canaliser les contributions de la diaspora vers des projets de développement local.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Le Programme AYENAH</h2>
                <p class="text-white">Mobiliser la Diaspora pour le Développement de la Côte d'Ivoire</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Programme AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Qu'est-ce qu'AYENAH ==== -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-header__subtitle">DÉFINITION</span>
                <h2 class="section-header__title" style="text-align: left;">Qu'est-ce qu'<span>AYENAH</span> ?</h2>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['definition'] ?? '<strong class="colorVert">AYENAH</strong> est un mot issu de la langue <strong>Malinké</strong> qui signifie <strong>« Revenez »</strong>. Ce nom symbolise l\'esprit de solidarité et d\'entraide qui anime le programme. AYENAH est un <strong>programme pilote</strong> mis en place par l\'État de Côte d\'Ivoire pour permettre aux Ivoiriens vivant à l\'étranger de participer concrètement au développement de leur pays d\'origine...' !!}
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="alert-box alert-box--success">
                    <div class="alert-box__icon">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">En résumé</h6>
                        <p class="alert-box__text">
                            AYENAH est le <strong>pont officiel</strong> entre la diaspora ivoirienne et les communautés locales.
                            Il permet de financer des projets de développement, de mobiliser des compétences professionnelles,
                            et de renforcer le dialogue entre l'État et ses citoyens de l'extérieur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Qui porte le programme ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">GOUVERNANCE</span>
            <h2 class="section-header__title">Qui porte <span>ce programme</span> ?</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="stat-card h-100">
                    <div class="stat-card__icon" style="background: rgba(0, 158, 96, 0.1); color: var(--ayenah-green);">
                        <i class="fa fa-landmark"></i>
                    </div>
                    <h4 style="color: var(--ayenah-green); font-weight: 700; margin-bottom: 15px;">DGIE</h4>
                    <p class="stat-card__label">
                        Direction Générale des Ivoiriens de l'Extérieur<br>
                        <strong>Maître d'ouvrage</strong> - Pilotage et coordination
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="stat-card h-100">
                    <div class="stat-card__icon" style="background: rgba(255, 127, 0, 0.1); color: var(--ayenah-orange);">
                        <i class="fa fa-hand-holding-usd"></i>
                    </div>
                    <h4 style="color: var(--ayenah-orange); font-weight: 700; margin-bottom: 15px;">AFD</h4>
                    <p class="stat-card__label">
                        Agence Française de Développement<br>
                        <strong>Bailleur</strong> - 450 000 € sur 24 mois
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="stat-card h-100">
                    <div class="stat-card__icon" style="background: rgba(255, 107, 53, 0.1); color: var(--ayenah-coral);">
                        <i class="fa fa-users-cog"></i>
                    </div>
                    <h4 style="color: var(--ayenah-coral); font-weight: 700; margin-bottom: 15px;">Expertise France</h4>
                    <p class="stat-card__label">
                        Programme CRPM II<br>
                        <strong>Appui technique</strong> - Accompagnement
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Pourquoi AYENAH ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">CONTEXTE</span>
            <h2 class="section-header__title">Pourquoi <span>AYENAH</span> a été créé ?</h2>
            <p class="section-header__desc">
                La diaspora ivoirienne représente un potentiel considérable mais insuffisamment exploité pour le développement du pays.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="info-box info-box--bordered-orange h-100">
                    <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: var(--ayenah-orange);">
                        <i class="fa fa-chart-bar"></i>
                    </div>
                    <h6 class="info-box__title">Le constat de départ</h6>
                    <p class="info-box__text">
                        {!! $contents['constat'] ?? 'Plus de <strong>1,2 million d\'Ivoiriens</strong> vivent à l\'étranger. En 2023, leurs transferts représentaient environ <strong>335 millions de dollars</strong>. Cependant, l\'essentiel de ces fonds va vers la consommation courante...' !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                <div class="info-box info-box--bordered-coral h-100">
                    <div class="info-box__icon" style="background: rgba(255, 107, 53, 0.1); color: var(--ayenah-coral);">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <h6 class="info-box__title">Les obstacles actuels</h6>
                    <p class="info-box__text">
                        {!! $contents['obstacles'] ?? '<strong>L\'incertitude</strong> sur la fiabilité des projets, <strong>l\'isolement</strong> des initiatives individuelles, <strong>la méfiance</strong> liée aux expériences passées, et <strong>le manque de cadre</strong> officiel...' !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <h4 class="text-center mb-4" style="font-weight: 700; color: #1a1a1a;">La réponse d'<span class="colorVert">AYENAH</span></h4>
            </div>
            @if(!empty($contents['reponse']))
                <div class="col-12">
                    <p class="text-center mb-4" style="font-size: 17px; line-height: 1.8; max-width: 900px; margin: 0 auto;">
                        {!! $contents['reponse'] !!}
                    </p>
                </div>
            @endif
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="info-box info-box--bordered-green h-100 text-center">
                    <div class="info-box__icon mx-auto">
                        <i class="fa fa-shield-alt"></i>
                    </div>
                    <h6 class="info-box__title">Garantie institutionnelle</h6>
                    <p class="info-box__text">Un dispositif officiel porté par l'État ivoirien</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="info-box info-box--bordered-green h-100 text-center">
                    <div class="info-box__icon mx-auto">
                        <i class="fa fa-chart-line"></i>
                    </div>
                    <h6 class="info-box__title">Effet de levier</h6>
                    <p class="info-box__text">Chaque euro mobilisé est amplifié par le cofinancement</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="info-box info-box--bordered-green h-100 text-center">
                    <div class="info-box__icon mx-auto">
                        <i class="fa fa-hands-helping"></i>
                    </div>
                    <h6 class="info-box__title">Accompagnement</h6>
                    <p class="info-box__text">Appui technique du montage à la réalisation</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="info-box info-box--bordered-green h-100 text-center">
                    <div class="info-box__icon mx-auto">
                        <i class="fa fa-handshake"></i>
                    </div>
                    <h6 class="info-box__title">Partenariat</h6>
                    <p class="info-box__text">Diaspora et acteurs locaux unis pour chaque projet</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== La promesse AYENAH ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="cta-section">
                    <div class="cta-section__content">
                        <h3 class="cta-section__title"><i class="fa fa-bullseye"></i> La promesse AYENAH</h3>
                        <p class="cta-section__text">
                            {!! $contents['promesse'] ?? 'Votre engagement pour la Côte d\'Ivoire prend une nouvelle dimension : il est <strong>sécurisé</strong> par l\'État, <strong>amplifié</strong> par le cofinancement, <strong>accompagné</strong> par des experts, et <strong>ancré</strong> dans les réalités locales.' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Organes de gouvernance ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">ORGANISATION</span>
            <h2 class="section-header__title">Les organes de <span>gouvernance</span></h2>
            <p class="section-header__desc">
                Trois organes complémentaires garantissent la transparence et l'efficacité du programme.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="pilier-card pilier-card--green h-100">
                    <div class="pilier-card__icon">
                        <i class="fa fa-building"></i>
                    </div>
                    <div class="pilier-card__number">ORGANE 1</div>
                    <h4 class="pilier-card__title">Comité de Pilotage</h4>
                    <p class="pilier-card__text">
                        Instance stratégique de supervision et de validation des orientations du programme.
                        Se réunit au moins une fois par an.
                    </p>
                    <span class="pilier-card__badge"><i class="fa fa-users"></i> Ministères + Partenaires</span>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="pilier-card pilier-card--orange h-100">
                    <div class="pilier-card__icon">
                        <i class="fa fa-clipboard-list"></i>
                    </div>
                    <div class="pilier-card__number">ORGANE 2</div>
                    <h4 class="pilier-card__title">Comité de Sélection</h4>
                    <p class="pilier-card__text">
                        Examine et évalue les projets soumis, décide des financements.
                        Se réunit après chaque appel à projets.
                    </p>
                    <span class="pilier-card__badge"><i class="fa fa-search"></i> Experts techniques</span>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="pilier-card pilier-card--coral h-100">
                    <div class="pilier-card__icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="pilier-card__number">ORGANE 3</div>
                    <h4 class="pilier-card__title">Cellule de Coordination</h4>
                    <p class="pilier-card__text">
                        Assure la gestion opérationnelle quotidienne. Équipe de 6 personnes basée à la DGIE à Abidjan.
                    </p>
                    <span class="pilier-card__badge"><i class="fa fa-map-marker-alt"></i> Abidjan - DGIE</span>
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
                <h3 class="cta-section__title">Découvrez comment participer</h3>
                <p class="cta-section__text">Explorez les trois piliers du programme et trouvez votre façon de contribuer au développement de la Côte d'Ivoire.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('piliers') }}" class="btn-ayenah btn-ayenah--white">
                        <i class="fa fa-th-large"></i> Les 3 Piliers
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
