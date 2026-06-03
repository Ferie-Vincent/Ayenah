@extends('layout/template')

@section('title', 'AYENAH | Soumettre un Projet - Comment déposer votre dossier')

@section('meta_description', 'Comment soumettre un projet AYENAH : les 4 étapes du partenariat à la soumission, les documents requis et le processus de sélection.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Comment soumettre un projet ?</h2>
                <p class="text-white">Les étapes pour déposer votre dossier de candidature</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Soumettre un projet AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Les 4 étapes ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">PROCESSUS</span>
            <h2 class="section-header__title">Les 4 étapes pour <span>soumettre</span></h2>
            <p class="section-header__desc">
                Suivez ces étapes pour préparer et déposer votre dossier de candidature au programme AYENAH.
            </p>
        </div>

        <!-- Étape 1 -->
        <div class="step-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="step-item__number step-item__number--green">1</div>
            <div class="step-item__content">
                <h4 class="step-item__title"><i class="fa fa-handshake colorVert me-2"></i>Préparez votre partenariat</h4>
                <p class="step-item__text mb-3">
                    {!! $contents['etape1'] ?? 'Avant toute chose, <strong>identifiez votre partenaire local</strong> en Côte d\'Ivoire. Ce partenaire doit être une structure légalement constituée (association, coopérative, ONG, collectivité)...' !!}
                </p>
                <div class="alert-box alert-box--warning" style="padding: 15px 20px;">
                    <div class="alert-box__icon" style="width: 35px; height: 35px;">
                        <i class="fa fa-file-signature" style="font-size: 0.9rem;"></i>
                    </div>
                    <div class="alert-box__content">
                        <p class="alert-box__text" style="margin: 0;">
                            <strong>Obligatoire :</strong> Formalisez ce partenariat par une <strong>convention écrite</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Étape 2 -->
        <div class="step-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="step-item__number step-item__number--orange">2</div>
            <div class="step-item__content" style="border-left-color: var(--ayenah-orange);">
                <h4 class="step-item__title"><i class="fa fa-lightbulb colorOrange me-2"></i>Définissez votre projet</h4>
                <p class="step-item__text mb-3">
                    {!! $contents['etape2'] ?? 'Travaillez ensemble avec votre partenaire local pour définir les éléments clés :' !!}
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="mb-0" style="color: #666; font-size: 15px;">
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Le <strong>problème</strong> à résoudre</li>
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Les <strong>objectifs</strong> du projet</li>
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Les <strong>activités</strong> prévues</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="mb-0" style="color: #666; font-size: 15px;">
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Les <strong>résultats</strong> attendus</li>
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Le <strong>budget</strong> détaillé</li>
                            <li class="mb-2"><i class="fa fa-check colorVert me-2"></i>Le <strong>calendrier</strong> de mise en œuvre</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Étape 3 -->
        <div class="step-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="step-item__number step-item__number--green">3</div>
            <div class="step-item__content">
                <h4 class="step-item__title"><i class="fa fa-folder-open colorVert me-2"></i>Constituez votre dossier</h4>
                <p class="step-item__text mb-3">
                    {!! $contents['etape3'] ?? 'Votre dossier de candidature doit comprendre les documents suivants :' !!}
                </p>
                <div class="table-ayenah-wrapper">
                <table class="table-ayenah">
                    <thead>
                        <tr>
                            <th><i class="fa fa-file me-2"></i>Document</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Formulaire de requête</strong></td>
                            <td>Document officiel AYENAH à remplir intégralement</td>
                        </tr>
                        <tr>
                            <td><strong>Statuts des organisations</strong></td>
                            <td>Statuts de l'association diaspora ET du partenaire local</td>
                        </tr>
                        <tr>
                            <td><strong>Convention de partenariat</strong></td>
                            <td>Accord formel entre diaspora et partenaire local</td>
                        </tr>
                        <tr>
                            <td><strong>Budget détaillé</strong></td>
                            <td>Tableau avec prix unitaires, quantités et totaux</td>
                        </tr>
                        <tr>
                            <td><strong>Justificatifs financiers</strong></td>
                            <td>Preuve de la capacité à apporter le cofinancement</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <!-- Étape 4 -->
        <div class="step-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="step-item__number step-item__number--orange">4</div>
            <div class="step-item__content" style="border-left-color: var(--ayenah-orange);">
                <h4 class="step-item__title"><i class="fa fa-paper-plane colorOrange me-2"></i>Soumettez votre dossier</h4>
                <p class="step-item__text mb-3">
                    {!! $contents['etape4'] ?? 'Déposez votre dossier complet en vous inscrivant sur le site officiel d\'AYENAH. Les dossiers sont acceptés de manière <strong>continue tout au long de l\'année</strong>.' !!}
                </p>
                <div class="text-center mt-4">
                    <a href="{{ route('enregistrement') }}" class="btn-ayenah btn-ayenah--primary">
                        <i class="fa fa-paper-plane"></i> S'inscrire et soumettre
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Processus de sélection ==== -->
<section class="section-padding-sm african-pattern-bg">
    <div class="container">
        <div class="content-card">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <span class="section-header__subtitle">SÉLECTION</span>
                <h2 class="section-header__title">Le processus de <span>sélection</span></h2>
                <p class="section-header__desc">
                    {!! $contents['processus_selection'] ?? 'Après le dépôt de votre dossier, voici les étapes du processus d\'évaluation.' !!}
                </p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-11">
                <div class="process-flow">
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-green);">
                            <i class="fa fa-upload"></i>
                        </div>
                        <span class="process-flow__label">Dépôt du<br>dossier</span>
                    </div>
                    <div class="process-flow__arrow d-none d-md-block"><i class="fa fa-arrow-right"></i></div>
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-orange);">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <span class="process-flow__label">Vérification<br>recevabilité</span>
                    </div>
                    <div class="process-flow__arrow d-none d-md-block"><i class="fa fa-arrow-right"></i></div>
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-green);">
                            <i class="fa fa-search"></i>
                        </div>
                        <span class="process-flow__label">Instruction<br>technique</span>
                    </div>
                    <div class="process-flow__arrow d-none d-md-block"><i class="fa fa-arrow-right"></i></div>
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-orange);">
                            <i class="fa fa-users"></i>
                        </div>
                        <span class="process-flow__label">Comité de<br>sélection</span>
                    </div>
                    <div class="process-flow__arrow d-none d-md-block"><i class="fa fa-arrow-right"></i></div>
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-green);">
                            <i class="fa fa-file-contract"></i>
                        </div>
                        <span class="process-flow__label">Notification<br>& Convention</span>
                    </div>
                    <div class="process-flow__arrow d-none d-md-block"><i class="fa fa-arrow-right"></i></div>
                    <div class="process-flow__item">
                        <div class="process-flow__icon" style="background: var(--gradient-coral);">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <span class="process-flow__label">Mise en œuvre<br>& Suivi</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="alert-box alert-box--success">
                    <div class="alert-box__icon">
                        <i class="fa fa-clock"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Délai de réponse</h6>
                        <p class="alert-box__text">
                            Comptez <strong>2 à 3 mois</strong> entre le dépôt de votre dossier et la notification de la décision.
                            Vous serez informé par email à chaque étape du processus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- ==== Accompagnement ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">SUPPORT</span>
            <h2 class="section-header__title">L'accompagnement <span>proposé</span></h2>
            <p class="section-header__desc">
                {!! $contents['accompagnement'] ?? 'La Cellule de Coordination vous accompagne à chaque étape de votre projet.' !!}
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="info-box info-box--bordered-green h-100">
                    <div class="info-box__icon">
                        <i class="fa fa-edit"></i>
                    </div>
                    <h6 class="info-box__title">Avant le dépôt</h6>
                    <p class="info-box__text">
                        <ul style="padding-left: 20px; margin: 0; color: #666;">
                            <li>Compréhension des critères d'éligibilité</li>
                            <li>Montage de votre projet</li>
                            <li>Identification de partenaires locaux</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="info-box info-box--bordered-orange h-100">
                    <div class="info-box__icon" style="background: rgba(255, 127, 0, 0.1); color: var(--ayenah-orange);">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <h6 class="info-box__title">Pendant la mise en œuvre</h6>
                    <p class="info-box__text">
                        <ul style="padding-left: 20px; margin: 0; color: #666;">
                            <li>Appui technique pour résoudre les difficultés</li>
                            <li>Visites de terrain par la Cellule</li>
                            <li>Conseils pour la gestion administrative</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="info-box info-box--bordered-coral h-100">
                    <div class="info-box__icon" style="background: rgba(255, 107, 53, 0.1); color: var(--ayenah-coral);">
                        <i class="fa fa-flag-checkered"></i>
                    </div>
                    <h6 class="info-box__title">Après la clôture</h6>
                    <p class="info-box__text">
                        <ul style="padding-left: 20px; margin: 0; color: #666;">
                            <li>Évaluation finale des résultats</li>
                            <li>Capitalisation des enseignements</li>
                            <li>Valorisation (témoignages, études de cas)</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== CTA Final ==== -->
<section class="section-padding">
    <div class="container">
        <div class="cta-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta-section__content">
                <h3 class="cta-section__title">Prêt à soumettre votre projet ?</h3>
                <p class="cta-section__text">
                    Inscrivez-vous maintenant et recevez la documentation nécessaire par email pour finaliser votre dossier de candidature.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('enregistrement') }}" class="btn-ayenah btn-ayenah--white">
                        <i class="fa fa-paper-plane"></i> Commencer mon inscription
                    </a>
                    <a href="{{ route('financement') }}" class="btn-ayenah btn-ayenah--outline" style="border-color: white; color: white;">
                        <i class="fa fa-euro-sign"></i> Voir le financement
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
