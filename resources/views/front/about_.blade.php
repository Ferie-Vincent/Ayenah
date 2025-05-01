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
                        Les <span>Diasporas</span> un partenaire  <span>fiable</span> au <span>developpement</span>
                    </h2>

                    <div>
                    <div class="container my-5">
  <h1 class="text-success mb-4">Présentation générale du projet AYENAH</h1>

  <p>
    Le projet <strong>AYENAH</strong> est une initiative de la <strong>Direction Générale des Ivoiriens de l’Extérieur</strong> visant à impliquer pleinement la diaspora ivoirienne dans le développement du pays.
    Financé par l’<strong>Agence Française de Développement</strong> dans le cadre du programme <strong>CRPM II</strong> avec l’appui technique d’<strong>Expertise France</strong>,
    il cible deux axes stratégiques : le renforcement des capacités institutionnelles et le soutien à des projets porteurs dans des secteurs clés.
  </p>

  <p>
    Son objectif est de transformer la diaspora en un véritable levier de croissance économique et sociale pour la Côte d’Ivoire.
  </p>

  <p>
    Concrètement, AYENAH accompagnera des projets structurants dans des domaines clés. Il offrira également un cadre formalisé pour mobiliser les compétences et les investissements de la diaspora.
    Le lancement officiel du projet aura lieu le <strong>6 mai 2025 à Abidjan</strong>, marquant ainsi le début d’une dynamique inédite de coopération au service du développement national.
  </p>

  <h4 class="text-success mt-4">Objectif global :</h4>
  <p><strong>Favoriser la contribution active de la diaspora dans le développement socio-économique local de la Côte d’Ivoire</strong></p>

  <ul class="list-group mb-4">
    <li class="list-group-item">OS1 : Renforcer la stratégie de gestion de la diaspora</li>
    <li class="list-group-item">OS2 : Tester les outils pratiques de mobilisation de la diaspora</li>
  </ul>

  <h4 class="text-success">Axes stratégiques</h4>

  <h5 class="mt-3">AXE 1 :</h5>
  <p>Soutenir des projets de développement local portés par des associations de la diaspora ivoirienne en apportant un appui technique et financier.</p>

  <h5>AXE 2 :</h5>
  <p>Mobiliser les compétences de la diaspora ivoirienne sur des sujets d’intérêt en Côte d’Ivoire.</p>

  <p>
    Apporter une subvention d’un montant maximum de <strong>50.000 euros</strong> qui ne peut excéder <strong>70 %</strong> du coût total du projet.
    Une participation des associations de la diaspora et des porteurs de projet doit être égale à au moins <strong>30 %</strong> du coût total du projet.
  </p>

  <h4 class="text-success mt-4">Étapes du processus de financement</h4>
  <ol class="list-group list-group-numbered mb-4">
    <li class="list-group-item">Un appel à projet à partir du site <a href="https://ayenah.ci" target="_blank">ayenah.ci</a></li>
    <li class="list-group-item">La constitution d’une requête de financement par l’association de la diaspora et les porteurs de projet (formulaire envoyé après inscription)</li>
    <li class="list-group-item">L’instruction des demandes par la cellule de coordination</li>
    <li class="list-group-item">L’évaluation des demandes de financements par le comité de sélection</li>
    <li class="list-group-item">Le financement et la mise en œuvre des dossiers sélectionnés selon les procédures administratives et financières</li>
    <li class="list-group-item">L’évaluation et la capitalisation des projets financés</li>
  </ol>

  <h4 class="text-success">Critères de sélection</h4>

  <h5>1. Critères obligatoires</h5>
  <ul class="list-group mb-3">
    <li class="list-group-item">Statut du demandeur (ONG, Asso., Coop., GIC, Collectivité Territoriale…)</li>
    <li class="list-group-item">Validité du partenariat diaspora-acteurs locaux</li>
    <li class="list-group-item">Montant demandé ≤ 50.000 €</li>
    <li class="list-group-item">Participation des bénéficiaires ≥ 30 %</li>
    <li class="list-group-item">Intégration dans le développement local</li>
    <li class="list-group-item">Durée du projet : 12 mois</li>
    <li class="list-group-item">Dossier complet</li>
  </ul>

  <h5>2. Critères appréciés (échelle de valeur)</h5>
  <ul class="list-group">
    <li class="list-group-item">Projet pertinent : innovant et utile pour la communauté</li>
    <li class="list-group-item">Équipe organisée : structure claire et compétences adaptées</li>
    <li class="list-group-item">Bonne gestion : capacité de gestion de fonds</li>
    <li class="list-group-item">Impact mesurable : niveau de compétence de l’organisation</li>
    <li class="list-group-item">Pérennité : solutions pensées pour le long terme</li>
    <li class="list-group-item">Méthode claire : cohérence de la mise en œuvre</li>
    <li class="list-group-item">Budget cohérent : dépenses justifiées et proportionnées</li>
  </ul>

  <h4 class="text-success mt-4">Mobilisation de l’expertise de la diaspora ivoirienne</h4>

  <h5>Principe général</h5>
  <p>
    Mobiliser les compétences de la diaspora ivoirienne sur des sujets d’intérêt pour lesquels les compétences n’existent pas localement.
    Prise en charge des frais de déplacement et de séjour.
  </p>

  <h5>Parties prenantes</h5>
  <ul class="list-group mb-4">
    <li class="list-group-item">
      <strong>Les bénéficiaires :</strong> Administrations publiques, collectivités territoriales, associations légalement constituées en Côte d’Ivoire.
    </li>
    <li class="list-group-item">
      <strong>Les compétences de la diaspora :</strong> Ivoiriens résidant à l’étranger, volontaires pour des missions d’intérêt national liées à leurs expertises.
    </li>
  </ul>
</div>

                    </div>


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
                                        Formulaire de requête
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