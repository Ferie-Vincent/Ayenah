@extends('layout/template')

@section('title', 'AYENAH | Les 3 Piliers - Initiatives, Expertise et Dialogue')

@section('meta_description', 'Les 3 piliers d\'AYENAH : cofinancement de projets locaux jusqu\'à 50 000 EUR, mobilisation de l\'expertise diaspora, et dialogue institutionnel.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Les 3 Piliers du Programme</h2>
                <p class="text-white">Trois façons de contribuer au développement de la Côte d'Ivoire</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Les 3 Piliers AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Aperçu des 3 Piliers ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">PROGRAMME AYENAH</span>
            <h2 class="section-header__title">Choisissez votre <span>mode de contribution</span></h2>
            <p class="section-header__desc">
                Le programme AYENAH repose sur trois piliers complémentaires qui permettent à chaque membre de la diaspora de contribuer selon ses moyens et ses compétences.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="pilier-card pilier-card--green text-center">
                    <div class="pilier-card__icon">
                        <i class="fa fa-hand-holding-heart"></i>
                    </div>
                    <div class="pilier-card__number">PILIER 1</div>
                    <h4 class="pilier-card__title">Soutien aux Initiatives Locales</h4>
                    <p class="pilier-card__text">
                        Cofinancement de projets de développement portés conjointement par la diaspora et des structures locales en Côte d'Ivoire.
                    </p>
                    <span class="pilier-card__badge">Jusqu'à 50 000 EUR</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                <div class="pilier-card pilier-card--orange text-center">
                    <div class="pilier-card__icon">
                        <i class="fa fa-user-tie"></i>
                    </div>
                    <div class="pilier-card__number">PILIER 2</div>
                    <h4 class="pilier-card__title">Mobilisation de l'Expertise</h4>
                    <p class="pilier-card__text">
                        Mise à disposition des compétences professionnelles de la diaspora pour des missions d'appui technique.
                    </p>
                    <span class="pilier-card__badge">Missions prises en charge</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="pilier-card pilier-card--coral text-center">
                    <div class="pilier-card__icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="pilier-card__number">PILIER 3</div>
                    <h4 class="pilier-card__title">Dialogue Institutionnel</h4>
                    <p class="pilier-card__text">
                        Renforcement du cadre d'échange entre l'État ivoirien et sa diaspora à travers des forums et ateliers.
                    </p>
                    <span class="pilier-card__badge">Forums & Ateliers</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Pilier 1 Détail ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);" id="pilier1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-header__subtitle">PILIER 1</span>
                <h2 class="section-header__title text-start mb-4">Soutien aux <span>Initiatives Locales</span></h2>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['pilier1_intro'] ?? 'Ce pilier est le <strong>coeur du programme AYENAH</strong>. Il permet de cofinancer des projets de développement local en Côte d\'Ivoire, portés conjointement par une association de la diaspora et une structure locale. L\'idée est simple : plutôt que d\'agir seul avec des moyens limités, vous vous associez à un partenaire local et vous bénéficiez d\'un <strong>financement complémentaire de l\'État</strong>...' !!}
                </p>

                <div class="alert-box alert-box--success mb-4">
                    <div class="alert-box__icon">
                        <i class="fa fa-chart-pie"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Le principe du cofinancement</h6>
                        <p class="alert-box__text">
                            AYENAH finance <strong>jusqu'à 70%</strong> du coût total (max 50 000 EUR). Vous apportez au minimum <strong>30%</strong> avec votre partenaire local.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-card__icon stat-card__icon--green">
                                <i class="fa fa-euro-sign"></i>
                            </div>
                            <span class="stat-card__number stat-card__number--green">50K</span>
                            <span class="stat-card__label">EUR Maximum</span>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-card__icon stat-card__icon--orange">
                                <i class="fa fa-percentage"></i>
                            </div>
                            <span class="stat-card__number stat-card__number--orange">70%</span>
                            <span class="stat-card__label">Financé par AYENAH</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-card__icon stat-card__icon--green">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <span class="stat-card__number stat-card__number--green">12</span>
                            <span class="stat-card__label">Mois maximum</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-card__icon stat-card__icon--orange">
                                <i class="fa fa-hand-holding-usd"></i>
                            </div>
                            <span class="stat-card__number stat-card__number--orange">30%</span>
                            <span class="stat-card__label">Votre apport</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Domaines d'intervention -->
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="text-center mb-4" data-aos="fade-up"><i class="fa fa-leaf colorVert"></i> Domaines d'intervention prioritaires</h4>
            </div>
            @if(!empty($contents['pilier1_domaines']))
                <div class="col-12">
                    <p class="text-center mb-4" style="font-size: 17px; line-height: 1.8; max-width: 900px; margin: 0 auto;">{!! $contents['pilier1_domaines'] !!}</p>
                </div>
            @endif
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="info-box info-box--bordered-green">
                    <div class="info-box__icon"><i class="fa fa-seedling"></i></div>
                    <h6 class="info-box__title">Agriculture</h6>
                    <p class="info-box__text">Développement rural et production agricole</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="info-box info-box--bordered-orange">
                    <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;"><i class="fa fa-industry"></i></div>
                    <h6 class="info-box__title">Transformation</h6>
                    <p class="info-box__text">Valorisation des produits agricoles locaux</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="info-box info-box--bordered-green">
                    <div class="info-box__icon"><i class="fa fa-hammer"></i></div>
                    <h6 class="info-box__title">Artisanat</h6>
                    <p class="info-box__text">Production locale et savoir-faire traditionnel</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="info-box info-box--bordered-coral">
                    <div class="info-box__icon" style="background: rgba(255, 107, 53, 0.1); color: #FF6B35;"><i class="fa fa-female"></i></div>
                    <h6 class="info-box__title">Projets féminins</h6>
                    <p class="info-box__text">Priorité aux initiatives portées par des femmes</p>
                </div>
            </div>
        </div>

        <!-- Alerte -->
        <div class="row mt-4">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="alert-box alert-box--warning">
                    <div class="alert-box__icon">
                        <i class="fa fa-exclamation"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Ce qu'AYENAH ne finance PAS</h6>
                        <p class="alert-box__text">
                            Les projets individuels (non collectifs) • Les projets sans partenaire local identifié • Les projets à vocation uniquement sociale sans dimension productive • Les projets de plus de 12 mois
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Pilier 2 Détail ==== -->
<section class="section-padding" id="pilier2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
                <span class="section-header__subtitle" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">PILIER 2</span>
                <h2 class="section-header__title text-start mb-4">Mobilisation de <span style="color: #ff7f00;">l'Expertise</span></h2>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['pilier2_intro'] ?? 'Ce pilier s\'adresse aux <strong>professionnels ivoiriens de la diaspora</strong> qui souhaitent mettre leurs compétences au service de leur pays d\'origine, <strong>sans nécessairement investir financièrement</strong>. Il permet de réaliser des missions d\'expertise technique...' !!}
                </p>

                <div class="alert-box alert-box--warning mb-4">
                    <div class="alert-box__icon" style="background: #ff7f00;">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Prise en charge complète</h6>
                        <p class="alert-box__text">
                            AYENAH prend en charge les <strong>frais de déplacement</strong> (billet d'avion) et les <strong>frais de séjour</strong> (hébergement, per diem) des experts volontaires.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                @if(!empty($contents['pilier2_profils']))
                    <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">{!! $contents['pilier2_profils'] !!}</p>
                @endif
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <h6 class="info-box__title">Professionnels de santé</h6>
                            <p class="info-box__text">Médecins, infirmiers, spécialistes</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <h6 class="info-box__title">Experts numériques</h6>
                            <p class="info-box__text">Développeurs, data scientists (priorité)</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">
                                <i class="fa fa-hard-hat"></i>
                            </div>
                            <h6 class="info-box__title">Ingénieurs</h6>
                            <p class="info-box__text">Génie civil, agriculture, industrie</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="info-box info-box--bordered-orange">
                            <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: #ff7f00;">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <h6 class="info-box__title">Enseignants-chercheurs</h6>
                            <p class="info-box__text">Universitaires, formateurs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Pilier 3 Détail ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);" id="pilier3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-header__subtitle" style="background: rgba(255, 107, 53, 0.1); color: #FF6B35;">PILIER 3</span>
                <h2 class="section-header__title text-start mb-4">Dialogue <span style="color: #FF6B35;">Institutionnel</span></h2>
                <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['pilier3_intro'] ?? 'Ce pilier vise à <strong>renforcer le cadre d\'échange et de concertation</strong> entre l\'État ivoirien et sa diaspora. Il s\'agit de créer des espaces de dialogue structurés.' !!}
                </p>

                @if(!empty($contents['pilier3_activites']))
                    <p class="text-dark mb-4" style="font-size: 17px; line-height: 1.8;">{!! $contents['pilier3_activites'] !!}</p>
                @endif
                <div class="row mt-4">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div style="width: 40px; height: 40px; background: rgba(255, 107, 53, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-users" style="color: #FF6B35;"></i>
                            </div>
                            <div>
                                <h6 class="text-dark mb-1" style="font-weight: 700;">Forums diaspora</h6>
                                <p class="text-muted mb-0" style="font-size: 14px;">Espaces de dialogue organisés</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div style="width: 40px; height: 40px; background: rgba(255, 107, 53, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-chalkboard-teacher" style="color: #FF6B35;"></i>
                            </div>
                            <div>
                                <h6 class="text-dark mb-1" style="font-weight: 700;">Ateliers</h6>
                                <p class="text-muted mb-0" style="font-size: 14px;">Renforcement des capacités</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div style="width: 40px; height: 40px; background: rgba(255, 107, 53, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-book" style="color: #FF6B35;"></i>
                            </div>
                            <div>
                                <h6 class="text-dark mb-1" style="font-weight: 700;">Capitalisation</h6>
                                <p class="text-muted mb-0" style="font-size: 14px;">Documentation des bonnes pratiques</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div style="width: 40px; height: 40px; background: rgba(255, 107, 53, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-handshake" style="color: #FF6B35;"></i>
                            </div>
                            <div>
                                <h6 class="text-dark mb-1" style="font-weight: 700;">Concertation</h6>
                                <p class="text-muted mb-0" style="font-size: 14px;">Climat de confiance État-diaspora</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{asset('front/assets/images/pics/christina-wocintechchat-com-UcZcsHSp8o4-unsplash.jpg')}}" alt="Dialogue Institutionnel AYENAH" class="img-fluid" style="border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.15);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ==== CTA Section ==== -->
<section class="section-padding">
    <div class="container">
        <div class="cta-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta-section__content">
                <h3 class="cta-section__title">Prêt à contribuer au développement de la Côte d'Ivoire ?</h3>
                <p class="cta-section__text">Découvrez si vous êtes éligible et comment soumettre votre projet ou proposer votre expertise.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('eligibilite') }}" class="btn-ayenah btn-ayenah--white">
                        <i class="fa fa-check-circle"></i> Vérifier mon éligibilité
                    </a>
                    <a href="{{ route('enregistrement') }}" class="btn-ayenah btn-ayenah--outline" style="border-color: white; color: white;">
                        <i class="fa fa-paper-plane"></i> Soumettre un projet
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
