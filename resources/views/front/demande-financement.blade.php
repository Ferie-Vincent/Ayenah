@extends('layout/template')

@section('title', 'AYENAH | Formulaire de Requête de Financement')
@section('meta_description', 'Soumettez votre dossier de candidature complet au programme AYENAH.')

@section('content')

<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Formulaire de Requête de Financement</h2>
                <p class="text-white">Étape 2 sur 3 — Dossier de candidature complet</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{ asset('front/assets/images/enregistrement.png') }}" alt="AYENAH">
    </div>
    <div class="shape">
        <img src="{{ asset('front/assets/images/shape.png') }}" alt="AYENAH">
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Progression -->
                <div class="d-flex align-items-center gap-3 mb-5">
                    <div class="d-flex align-items-center gap-2">
                        <div style="width:32px;height:32px;border-radius:50%;background:#6a9755;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;">✓</div>
                        <span style="font-size:13px;color:#6a9755;font-weight:600;">Enregistrement</span>
                    </div>
                    <div style="flex:1;height:2px;background:#6a9755;"></div>
                    <div class="d-flex align-items-center gap-2">
                        <div style="width:32px;height:32px;border-radius:50%;background:#1e3a5f;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;">2</div>
                        <span style="font-size:13px;color:#1e3a5f;font-weight:600;">Dossier complet</span>
                    </div>
                    <div style="flex:1;height:2px;background:#e2e8f0;"></div>
                    <div class="d-flex align-items-center gap-2">
                        <div style="width:32px;height:32px;border-radius:50%;background:#e2e8f0;color:#94a3b8;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;">3</div>
                        <span style="font-size:13px;color:#94a3b8;font-weight:600;">Comité de Sélection</span>
                    </div>
                </div>

                <!-- Bienvenue personnalisé -->
                <div class="card border-0 mb-4" style="background:#f0fdf4;border-radius:12px;border-left:4px solid #6a9755 !important;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1" style="color:#1e3a5f;">Bonjour {{ $enregistrement->firstname }} {{ $enregistrement->lastname }},</h5>
                        <p class="mb-0 text-muted">Votre enregistrement pour <strong>« {{ $enregistrement->project_name }} »</strong> a été validé. Complétez maintenant votre dossier de candidature. La sélection finale relève du <strong>Comité de Sélection</strong> d'AYENAH.</p>
                    </div>
                </div>

                <!-- Formulaire à venir -->
                <div class="card border-0 text-center py-5" style="border-radius:16px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
                    <div class="card-body">
                        <div style="width:64px;height:64px;border-radius:16px;background:#eff6ff;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="#2563eb" stroke-width="2" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                        </div>
                        <h5 class="fw-bold mb-2" style="color:#1e293b;">Formulaire en cours de déploiement</h5>
                        <p class="text-muted mb-0">Le formulaire complet de requête de financement sera disponible prochainement.<br>L'équipe AYENAH vous contactera pour vous guider dans la suite du processus.</p>
                        <p class="mt-3"><a href="mailto:infos@ayenah.ci" style="color:#6a9755;font-weight:600;">infos@ayenah.ci</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
