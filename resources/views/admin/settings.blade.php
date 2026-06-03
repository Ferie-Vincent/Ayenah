@extends('layout/template-admin')

@section('title', 'Paramètres')
@section('page-title', 'Paramètres')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Paramètres']]" />
@endsection

@section('content')

<form action="{{ route('admin.settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row g-3">
        <!-- Contact -->
        <div class="col-md-6">
            <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;box-shadow:0 1px 3px rgba(0,0,0,.06);">
                <div class="d-flex align-items-center gap-2 px-3 py-3" style="background:linear-gradient(135deg,#1e3a5f 0%,#2563eb 100%);">
                    <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="phone" style="width:18px;height:18px;color:#fff;"></i>
                    </div>
                    <h6 class="mb-0 fw-bold text-white" style="font-size:15px;">Contact</h6>
                </div>
                <div class="p-3">
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">
                            <i data-lucide="mail" style="width:13px;height:13px;" class="me-1 text-muted"></i>Email de contact
                        </label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $settings['contact']->firstWhere('key', 'contact_email')->value ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_phone" class="form-label">
                            <i data-lucide="phone" style="width:13px;height:13px;" class="me-1 text-muted"></i>Téléphone
                        </label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $settings['contact']->firstWhere('key', 'contact_phone')->value ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_phone_2" class="form-label">
                            <i data-lucide="phone" style="width:13px;height:13px;" class="me-1 text-muted"></i>Téléphone 2
                        </label>
                        <input type="text" class="form-control" id="contact_phone_2" name="contact_phone_2" value="{{ $settings['contact']->firstWhere('key', 'contact_phone_2')->value ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="contact_address" class="form-label">
                            <i data-lucide="map-pin" style="width:13px;height:13px;" class="me-1 text-muted"></i>Adresse
                        </label>
                        <input type="text" class="form-control" id="contact_address" name="contact_address" value="{{ $settings['contact']->firstWhere('key', 'contact_address')->value ?? '' }}">
                    </div>
                    <div class="mb-0">
                        <label for="contact_map_url" class="form-label">
                            <i data-lucide="map" style="width:13px;height:13px;" class="me-1 text-muted"></i>URL embed Google Maps
                        </label>
                        <input type="url" class="form-control" id="contact_map_url" name="contact_map_url" value="{{ $settings['contact']->firstWhere('key', 'contact_map_url')->value ?? '' }}" placeholder="https://maps.google.com/maps?q=...&output=embed">
                        <small class="text-muted mt-1 d-block">URL d'intégration depuis Google Maps → Partager → Intégrer une carte</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class="col-md-6">
            <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;box-shadow:0 1px 3px rgba(0,0,0,.06);">
                <div class="d-flex align-items-center gap-2 px-3 py-3" style="background:linear-gradient(135deg,#7c3aed 0%,#a78bfa 100%);">
                    <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="share-2" style="width:18px;height:18px;color:#fff;"></i>
                    </div>
                    <h6 class="mb-0 fw-bold text-white" style="font-size:15px;">Réseaux sociaux</h6>
                </div>
                <div class="p-3">
                    <div class="mb-3">
                        <label for="facebook_url" class="form-label">
                            <span class="d-inline-flex align-items-center justify-content-center me-1" style="width:20px;height:20px;border-radius:5px;background:#1877f2;color:#fff;font-size:11px;font-weight:700;">f</span>
                            Facebook
                        </label>
                        <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ $settings['social']->firstWhere('key', 'facebook_url')->value ?? '' }}" placeholder="https://facebook.com/...">
                    </div>
                    <div class="mb-3">
                        <label for="twitter_url" class="form-label">
                            <span class="d-inline-flex align-items-center justify-content-center me-1" style="width:20px;height:20px;border-radius:5px;background:#0f1419;color:#fff;font-size:11px;font-weight:700;">X</span>
                            Twitter / X
                        </label>
                        <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{ $settings['social']->firstWhere('key', 'twitter_url')->value ?? '' }}" placeholder="https://x.com/...">
                    </div>
                    <div class="mb-0">
                        <label for="linkedin_url" class="form-label">
                            <span class="d-inline-flex align-items-center justify-content-center me-1" style="width:20px;height:20px;border-radius:5px;background:#0a66c2;color:#fff;font-size:11px;font-weight:700;">in</span>
                            LinkedIn
                        </label>
                        <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $settings['social']->firstWhere('key', 'linkedin_url')->value ?? '' }}" placeholder="https://linkedin.com/...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Général -->
        <div class="col-12">
            <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;box-shadow:0 1px 3px rgba(0,0,0,.06);">
                <div class="d-flex align-items-center gap-2 px-3 py-3" style="background:linear-gradient(135deg,#059669 0%,#10b981 100%);">
                    <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="settings" style="width:18px;height:18px;color:#fff;"></i>
                    </div>
                    <h6 class="mb-0 fw-bold text-white" style="font-size:15px;">Général</h6>
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tawk_widget_id" class="form-label">
                                <i data-lucide="message-circle" style="width:13px;height:13px;" class="me-1 text-muted"></i>Tawk Widget ID
                            </label>
                            <input type="text" class="form-control" id="tawk_widget_id" name="tawk_widget_id" value="{{ $settings['general']->firstWhere('key', 'tawk_widget_id')->value ?? '' }}" placeholder="Identifiant du widget Tawk.to">
                            <small class="text-muted mt-1 d-block">Identifiant pour le chat en ligne Tawk.to</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 mb-4">
        <button type="submit" class="btn btn-primary px-4 py-2">
            <i data-lucide="save" style="width:16px;height:16px;" class="me-1"></i> Enregistrer les paramètres
        </button>
    </div>
</form>

@endsection
