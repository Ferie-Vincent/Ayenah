@extends('layout/template')

@section('title', 'AYENAH | À propos - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
        <img src="{{asset('front/assets/images/ayenah-pic.png')}}" alt="Ayenah Project">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Ayenah Project">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== donate us section start ==== -->
<div class="cm-details donate-us community checkout faq">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-12">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <img src="{{asset('front/assets/images/pic-ay.png')}}" alt="Présentation du Projet AYENAH" class="img-fluid" loading="lazy">
                    </div>
                    <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="padding-bottom: 0px !important;">
                        <section class="blog-main cm-details" style="margin-top: -15%;">
                            <div class="container" >
                                <div class="row gutter-60">
                                    <div class="col-12 col-xl-12">
                                        <div class="cm-details__content">

                                        @php
                                            $defaults = [
                                                'presentation' => '<p class="text-justify text-dark">Le projet <strong class="colorVert">AYENAH</strong> est une initiative de la <strong class="colorOrange">Direction Générale des Ivoiriens de l&apos;Extérieur (DGIE)</strong>, financée par <strong>l&apos;Agence Française de Développement (AFD)</strong> dans le cadre du <strong>programme CRPM II</strong>...</p>',
                                                'objectifs_os1' => '<p class="text-justify text-dark">Objectif global : <strong>Favoriser la contribution active de la diaspora dans le développement socio-économique local de la Côte d&apos;Ivoire.</strong></p>',
                                                'objectifs_os2' => '<ul class="cm-details__list" style="margin-left: 40px;"><li class="text-dark"><i class="icon-circle-check colorVert"></i> <strong>OS 1 : </strong> Renforcer la stratégie de gestion de la diaspora</li><li class="text-dark"><i class="icon-circle-check colorVert"></i> <strong>OS 2 : </strong> Tester les outils pratiques de mobilisation de la diaspora</li></ul>',
                                                'axe1' => '<strong>AXE 1 :</strong> Appui technique et financier aux projets de développement local portés par la diaspora.',
                                                'axe2' => '<strong>AXE 2 :</strong> Mobilisation des compétences techniques et professionnelles de la diaspora sur des missions d&apos;intérêt général.',
                                                'financement' => 'Les projets soutenus peuvent bénéficier d&apos;une <strong>subvention maximale de <span class="colorOrange">50.000 €</span></strong>, représentant au plus <strong class="colorOrange">70 % du budget total</strong>...',
                                                'criteres' => '',
                                                'expertise' => '<p class="text-justify text-dark">AYENAH permet aux Ivoiriens de l&apos;extérieur de <strong>mettre volontairement leurs compétences au service de missions stratégiques</strong> en Côte d&apos;Ivoire.</p>',
                                            ];
                                        @endphp

                                        <!-- Présentation générale -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">PRÉSENTATION DU PROJET AYENAH</h3>
                                            {!! $contents['presentation'] ?? $defaults['presentation'] !!}
                                        </div>

                                        <!-- Objectifs -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">Objectifs du projet</h3>
                                            {!! $contents['objectifs_os1'] ?? $defaults['objectifs_os1'] !!}
                                            {!! $contents['objectifs_os2'] ?? $defaults['objectifs_os2'] !!}
                                        </div>

                                        <!-- Axes stratégiques -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">Axes d'intervention</h3>
                                            <p class="text-justify text-dark">{!! $contents['axe1'] ?? $defaults['axe1'] !!}</p>
                                            <p class="text-justify text-dark">{!! $contents['axe2'] ?? $defaults['axe2'] !!}</p>
                                        </div>

                                        <!-- Financement des projets -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">Financement des projets</h3>
                                            <p class="text-justify text-dark mb-4">{!! $contents['financement'] ?? $defaults['financement'] !!}</p>
                                            <h4 class="title-animation text-dark" style="margin-bottom: 0px !important;">Étapes du processus de financement</h4>
                                            <ul class="cm-details__list" style="margin-left: 40px; margin-top: 0px !important;" >
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Appel à projets via le site</strong> <span ><a href="https://ayenah.ci/enregistrement" target="_blank"><strong class="colorVert">ayenah.ci</strong></a></span></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Soumission de la requête de financement (formulaire numérique)</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Instruction des demandes par la cellule de coordination</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Évaluation par le comité de sélection</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Financement et mise en œuvre selon les procédures établies</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Suivi, évaluation et capitalisation des projets</strong></li>
                                            </ul>
                                        </div>

                                        <!-- Critères de sélection -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">Critères de sélection</h3>
                                            @if(!empty($contents['criteres']))
                                                {!! $contents['criteres'] !!}
                                            @else
                                            <h4 style="margin-bottom: 0px !important;" class="text-dark">Critères obligatoires</h4>
                                            <ul class="cm-details__list" style="margin-left: 40px; margin-top: 0px !important;" >
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Statut juridique valide du demandeur</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Partenariat effectif entre diaspora et acteur local</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Montant demandé ≤ 50.000 €</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Participation des bénéficiaires ≥ 30 %</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Intégration dans le développement local</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Durée du projet : 12 mois</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i> <strong>Dossier complet</strong></li>
                                            </ul>
                                            <h4 style="margin-top: 20px !important;" class="text-dark">Critères évalués</h4>
                                            <ul class="cm-details__list" style="margin-left: 40px; margin-top: 0px !important;">
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Pertinence et innovation du projet</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Organisation claire et équipe compétente</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Capacité de gestion financière</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Impact mesurable</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Pérennité du projet</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Méthodologie cohérente</strong></li>
                                                <li class="text-dark mb-2"><i class="icon-circle-check colorVert"></i><strong> Budget clair et justifié</strong></li>
                                            </ul>
                                            @endif
                                        </div>

                                        <!-- Mobilisation des compétences -->
                                        <div class="cm-group cta">
                                            <h3 class="title-animation colorVert">Mobilisation de l'expertise de la diaspora</h3>
                                            {!! $contents['expertise'] ?? $defaults['expertise'] !!}
                                        </div>

                                        </div>

                                    </div>
                                    <div class="form-cta btn btn-block " bis_skin_checked="1" >
                                        <a href="{{route('enregistrement')}}" class="btn--primary">Je suis interessé, je souhaite me porter candidat</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / donate us section end ==== -->


@if(session('success'))
<script>
    Swal.fire({
        title: "🎉 Succès",
        text: "{{ session('success') }}",
        icon: "success"
    });
</script>
@endif


@endsection
