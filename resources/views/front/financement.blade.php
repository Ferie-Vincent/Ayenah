@extends('layout/template')

@section('title', 'AYENAH | Le Financement - Montants et modalités')

@section('meta_description', 'Financement AYENAH : jusqu\'à 50 000 EUR (70% du projet). Découvrez les dépenses éligibles, les modalités de décaissement et le cofinancement requis.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Le Financement en Détail</h2>
                <p class="text-white">Montants, dépenses éligibles et modalités de décaissement</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Financement AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Les montants ==== -->
<section class="section-padding" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">MONTANTS</span>
            <h2 class="section-header__title">Les montants du <span>financement</span></h2>
            <p class="section-header__desc">
                {!! $contents['montants'] ?? 'AYENAH finance jusqu\'à 70% du coût total de votre projet avec un plafond de 50 000 €.' !!}
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-card__icon stat-card__icon--green">
                        <i class="fa fa-euro-sign"></i>
                    </div>
                    <span class="stat-card__number stat-card__number--green">50K</span>
                    <span class="stat-card__label">EUR Maximum</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-card__icon stat-card__icon--orange">
                        <i class="fa fa-percentage"></i>
                    </div>
                    <span class="stat-card__number stat-card__number--orange">70%</span>
                    <span class="stat-card__label">Financé par AYENAH</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-card__icon stat-card__icon--green">
                        <i class="fa fa-calendar-alt"></i>
                    </div>
                    <span class="stat-card__number stat-card__number--green">12</span>
                    <span class="stat-card__label">Mois maximum</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
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
</section>

<!-- ==== Ce que vous pouvez financer ==== -->
<section class="section-padding-sm" style="background: linear-gradient(180deg, #f8faf8 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">DÉPENSES ÉLIGIBLES</span>
            <h2 class="section-header__title">Ce que vous pouvez <span>financer</span></h2>
            <p class="section-header__desc">
                {!! $contents['depenses_eligibles'] ?? 'Le budget de votre projet peut inclure les catégories de dépenses suivantes.' !!}
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="table-ayenah-wrapper">
                    <table class="table-ayenah">
                        <thead>
                            <tr>
                                <th><i class="fa fa-tag me-2"></i>Catégorie</th>
                                <th>Exemples</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-building colorVert me-2"></i><strong>Investissements immobiliers</strong></td>
                                <td>Construction, réhabilitation de bâtiments</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-tools colorVert me-2"></i><strong>Équipements techniques</strong></td>
                                <td>Machines, outillage, matériel informatique</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-boxes colorVert me-2"></i><strong>Fournitures et consommables</strong></td>
                                <td>Matières premières, intrants agricoles</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-users colorVert me-2"></i><strong>Personnel du projet</strong></td>
                                <td>Salaires, indemnités des agents du projet</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-graduation-cap colorVert me-2"></i><strong>Formation</strong></td>
                                <td>Renforcement des capacités des bénéficiaires</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-file-alt colorVert me-2"></i><strong>Études</strong></td>
                                <td>Études de faisabilité, diagnostics</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-chart-line colorVert me-2"></i><strong>Suivi et évaluation</strong></td>
                                <td>Missions de contrôle, évaluation finale</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Modalités de décaissement ==== -->
<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-header__subtitle">DÉCAISSEMENT</span>
            <h2 class="section-header__title">Comment est versé le <span>financement</span> ?</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="alert-box alert-box--success">
                    <div class="alert-box__icon">
                        <i class="fa fa-money-check-alt"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Modalités de versement</h6>
                        <p class="alert-box__text">
                            {!! $contents['versement'] ?? 'Le financement est généralement versé en <strong>2 ou 3 tranches</strong>. Avant chaque versement, vous devez justifier l\'utilisation d\'au moins <strong>80%</strong> de la tranche précédente.' !!}
                        </p>
                    </div>
                </div>

                <div class="alert-box alert-box--warning mt-4">
                    <div class="alert-box__icon">
                        <i class="fa fa-university"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Compte bancaire dédié</h6>
                        <p class="alert-box__text">
                            Un <strong>compte bancaire dédié au projet</strong> est obligatoire.
                            Les fonds AYENAH et votre contribution doivent y être déposés.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="mb-4" style="font-weight: 700; color: #1a1a1a;"><i class="fa fa-clipboard-check colorVert me-2"></i>Conditions préalables au 1er versement</h4>
                <div class="info-box info-box--bordered-green mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="info-box__icon" style="width: 50px; height: 50px; margin: 0;">
                            <i class="fa fa-file-contract"></i>
                        </div>
                        <div>
                            <h6 class="info-box__title mb-1">Convention signée</h6>
                            <p class="info-box__text mb-0" style="font-size: 14px;">Convention de financement signée entre AYENAH et les bénéficiaires</p>
                        </div>
                    </div>
                </div>
                <div class="info-box info-box--bordered-orange mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="info-box__icon" style="width: 50px; height: 50px; margin: 0; background: rgba(255, 127, 0, 0.1); color: var(--ayenah-orange);">
                            <i class="fa fa-university"></i>
                        </div>
                        <div>
                            <h6 class="info-box__title mb-1">Compte bancaire dédié</h6>
                            <p class="info-box__text mb-0" style="font-size: 14px;">Compte bancaire dédié au projet ouvert et communiqué à AYENAH</p>
                        </div>
                    </div>
                </div>
                <div class="info-box info-box--bordered-green">
                    <div class="d-flex align-items-center gap-3">
                        <div class="info-box__icon" style="width: 50px; height: 50px; margin: 0;">
                            <i class="fa fa-coins"></i>
                        </div>
                        <div>
                            <h6 class="info-box__title mb-1">Contribution déposée</h6>
                            <p class="info-box__text mb-0" style="font-size: 14px;">Contribution des bénéficiaires (30% minimum) déposée sur le compte</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Exemple de financement ==== -->
<section class="section-padding-sm african-pattern-bg">
    <div class="container">
        <div class="content-card">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <span class="section-header__subtitle" style="display: inline-block;">EXEMPLE</span>
                    <h3 class="mb-4" style="font-weight: 700; color: #1a1a1a;">Exemple de <span class="colorVert">financement</span></h3>
                <div class="text-dark" style="font-size: 17px; line-height: 1.8;">
                    {!! $contents['exemple'] ?? '<p>Pour un projet dont le coût total est de <strong>50 000 €</strong> :</p>
                <ul class="text-dark mb-4" style="font-size: 17px; line-height: 2;">
                    <li><strong class="colorVert">AYENAH finance :</strong> jusqu\'à 35 000 € (70%)</li>
                    <li><strong class="colorOrange">Vous apportez :</strong> au moins 15 000 € (30%)</li>
                </ul>
                <p>Cette contribution de 30% peut être partagée entre l\'association de la diaspora et le partenaire local. Elle peut également inclure des <strong>contributions en nature</strong>...</p>' !!}
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="stat-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="text-center p-3" style="background: var(--gradient-green); border-radius: 16px;">
                                <i class="fa fa-hand-holding-heart text-white mb-2" style="font-size: 2rem;"></i>
                                <h3 class="text-white mb-0">70%</h3>
                                <small class="text-white">AYENAH</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3" style="background: var(--gradient-orange); border-radius: 16px;">
                                <i class="fa fa-users text-white mb-2" style="font-size: 2rem;"></i>
                                <h3 class="text-white mb-0">30%</h3>
                                <small class="text-white">Bénéficiaires</small>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Subvention minimum</small>
                            <h5 class="colorVert mb-0">10 000 €</h5>
                        </div>
                        <div class="text-end">
                            <small class="text-muted">Subvention maximum</small>
                            <h5 class="colorOrange mb-0">50 000 €</h5>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Note importante ==== -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="alert-box alert-box--warning">
                    <div class="alert-box__icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-box__content">
                        <h6 class="alert-box__title">Note importante sur le cofinancement</h6>
                        <p class="alert-box__text">
                            {!! $contents['note_importante'] ?? 'Les fonds provenant d\'autres financements de l\'AFD <strong>ne sont pas acceptés</strong> comme cofinancement. Votre contribution doit provenir de vos propres ressources ou de celles de votre partenaire local.' !!}
                        </p>
                    </div>
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
                <h3 class="cta-section__title">Votre projet est finançable ?</h3>
                <p class="cta-section__text">
                    Découvrez les étapes pour soumettre votre dossier de candidature ou inscrivez-vous directement pour recevoir les documents nécessaires.
                </p>
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
