@extends('layout/template-admin')

@section('title', 'Projets')
@section('page-title', 'Gestion des Projets')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="mb-1">Projets</h4>
        <p class="text-muted mb-0" style="font-size:13px;">{{ $projets->count() }} projet(s) enregistré(s)</p>
    </div>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-project">
        <i data-lucide="plus" style="width:16px;height:16px;" class="me-1"></i> Nouveau projet
    </button>
</div>

<!-- Statut badges légende -->
<div class="d-flex flex-wrap gap-2 mb-3">
    @foreach(\App\Models\Projet::$statutLabels as $key => $label)
    <span class="badge rounded-pill px-3 py-1" style="font-size:11px;
        background:{{ match($key) {
            'en_preparation' => '#eff6ff', 'en_cours' => '#ecfdf5',
            'suspendu' => '#fef3c7', 'termine' => '#f1f5f9', 'annule' => '#fef2f2', default => '#f1f5f9'
        } }};
        color:{{ match($key) {
            'en_preparation' => '#2563eb', 'en_cours' => '#059669',
            'suspendu' => '#d97706', 'termine' => '#475569', 'annule' => '#dc2626', default => '#475569'
        } }};">
        {{ $label }}
    </span>
    @endforeach
</div>

<!-- Tableau projets -->
<div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="dt-projets" class="table table-hover mb-0 w-100">
                <thead>
                    <tr>
                        <th style="width:40px">#</th>
                        <th>Projet</th>
                        <th>Structure porteuse</th>
                        <th>Thématique</th>
                        <th>Lieu</th>
                        <th>Statut</th>
                        <th>Avancement</th>
                        <th>Inscription</th>
                        <th>Coût total</th>
                        <th style="width:130px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projets as $index => $projet)
                    <tr>
                        <td><span class="fw-semibold text-muted">{{ $index + 1 }}</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div style="width:32px;height:32px;border-radius:8px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <i data-lucide="folder-kanban" style="width:14px;height:14px;"></i>
                                </div>
                                <span class="fw-semibold" style="font-size:13px;">{{ Str::limit($projet->intitule_projet, 35) }}</span>
                            </div>
                        </td>
                        <td><span style="color:#475569;font-size:13px;">{{ Str::limit($projet->structure_porteuse, 28) }}</span></td>
                        <td>
                            <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">
                                {{ Str::limit($projet->thematique_projet, 20) }}
                            </span>
                        </td>
                        <td><span style="color:#475569;font-size:13px;">{{ Str::limit($projet->lieu_intervention, 20) }}</span></td>
                        <td>
                            @php
                                $statutColors = [
                                    'en_preparation' => ['bg' => '#eff6ff', 'color' => '#2563eb'],
                                    'en_cours'       => ['bg' => '#ecfdf5', 'color' => '#059669'],
                                    'suspendu'       => ['bg' => '#fef3c7', 'color' => '#d97706'],
                                    'termine'        => ['bg' => '#f1f5f9', 'color' => '#475569'],
                                    'annule'         => ['bg' => '#fef2f2', 'color' => '#dc2626'],
                                ];
                                $sc = $statutColors[$projet->statut] ?? ['bg' => '#f1f5f9', 'color' => '#475569'];
                            @endphp
                            <span class="badge rounded-pill px-2 py-1" style="background:{{ $sc['bg'] }};color:{{ $sc['color'] }};font-size:11px;">
                                {{ \App\Models\Projet::$statutLabels[$projet->statut] ?? $projet->statut }}
                            </span>
                        </td>
                        <td style="min-width:90px;">
                            <div class="d-flex align-items-center gap-2">
                                <div class="progress flex-grow-1" style="height:6px;border-radius:4px;">
                                    <div class="progress-bar bg-success" style="width:{{ $projet->completude }}%"></div>
                                </div>
                                <span style="font-size:11px;color:#475569;white-space:nowrap;">{{ $projet->completude }}%</span>
                            </div>
                        </td>
                        <td>
                            @if($projet->inscription_active)
                                <span class="badge bg-success" style="font-size:11px;">Ouvert</span>
                            @else
                                <span class="badge bg-secondary" style="font-size:11px;">Fermé</span>
                            @endif
                        </td>
                        <td><span class="fw-bold" style="font-size:13px;color:#1e293b;">{{ number_format($projet->cout_total, 0, ',', ' ') }} €</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail-project-{{ $projet->id }}" title="Détail">
                                    <i data-lucide="eye" style="width:14px;height:14px;"></i>
                                </button>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update-project-{{ $projet->id }}" title="Modifier">
                                    <i data-lucide="pencil" style="width:14px;height:14px;"></i>
                                </button>
                                <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer"
                                        onclick="return confirm('Supprimer ce projet ?')">
                                        <i data-lucide="trash-2" style="width:14px;height:14px;"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center py-5 text-muted">
                            <i data-lucide="folder-open" style="width:32px;height:32px;" class="mb-2 d-block mx-auto"></i>
                            Aucun projet enregistré. <a href="#" data-bs-toggle="modal" data-bs-target="#add-project">Ajouter le premier.</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════
     MODAL : Détail projet
══════════════════════════════════════════ --}}
@foreach($projets as $projet)
<div id="detail-project-{{ $projet->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#1e3a5f 0%,#2563eb 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="folder-kanban" style="width:20px;height:20px;"></i>
                    </div>
                    <div>
                        <h6 class="modal-title mb-0 fw-bold">{{ $projet->intitule_projet }}</h6>
                        <span style="font-size:12px;opacity:.8;">
                            <i data-lucide="map-pin" style="width:12px;height:12px;" class="me-1"></i>{{ $projet->lieu_intervention }}
                            &nbsp;|&nbsp;
                            <i data-lucide="clock" style="width:12px;height:12px;" class="me-1"></i>{{ $projet->duree_totale }}
                        </span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4" style="background:#f8fafc;">

                {{-- Badges statut + inscription --}}
                <div class="d-flex flex-wrap gap-2 mb-4">
                    @php $sc = $statutColors[$projet->statut] ?? ['bg' => '#f1f5f9', 'color' => '#475569']; @endphp
                    <span class="badge rounded-pill px-3 py-2" style="background:{{ $sc['bg'] }};color:{{ $sc['color'] }};font-size:12px;font-weight:600;">
                        {{ \App\Models\Projet::$statutLabels[$projet->statut] ?? $projet->statut }}
                    </span>
                    <span class="badge rounded-pill px-3 py-2" style="background:#ecfdf5;color:#059669;font-size:12px;font-weight:600;">
                        <i data-lucide="tag" style="width:12px;height:12px;" class="me-1"></i>{{ $projet->thematique_projet }}
                    </span>
                    @if($projet->inscription_active)
                    <span class="badge rounded-pill px-3 py-2 bg-success text-white" style="font-size:12px;">
                        <i data-lucide="user-check" style="width:12px;height:12px;" class="me-1"></i>Inscriptions ouvertes
                    </span>
                    @endif
                </div>

                {{-- Avancement --}}
                @if($projet->completude > 0 || $projet->date_debut)
                <div class="p-3 rounded-3 mb-4" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="fw-semibold" style="font-size:13px;">Avancement</span>
                        <span class="fw-bold text-success">{{ $projet->completude }}%</span>
                    </div>
                    <div class="progress mb-2" style="height:8px;border-radius:6px;">
                        <div class="progress-bar bg-success" style="width:{{ $projet->completude }}%"></div>
                    </div>
                    <div class="d-flex gap-4" style="font-size:12px;color:#64748b;">
                        @if($projet->date_debut)
                        <span><i data-lucide="calendar" style="width:12px;height:12px;" class="me-1"></i>Début : {{ $projet->date_debut->format('d/m/Y') }}</span>
                        @endif
                        @if($projet->date_fin_prevue)
                        <span><i data-lucide="calendar-check" style="width:12px;height:12px;" class="me-1"></i>Fin prévue : {{ $projet->date_fin_prevue->format('d/m/Y') }}</span>
                        @endif
                    </div>
                </div>
                @endif

                {{-- Description --}}
                @if($projet->description)
                <div class="p-3 rounded-3 mb-4" style="background:#fff;border:1px solid #e2e8f0;">
                    <h6 class="fw-semibold mb-2" style="font-size:13px;">Description</h6>
                    <p style="font-size:13px;color:#475569;margin:0;">{{ $projet->description }}</p>
                </div>
                @endif

                {{-- Financement --}}
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 rounded-3" style="background:#fff;border:1px solid #e2e8f0;">
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:40px;height:40px;border-radius:10px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                    <i data-lucide="coins" style="width:20px;height:20px;color:#d97706;"></i>
                                </div>
                                <div>
                                    <span class="text-muted d-block" style="font-size:11px;font-weight:600;text-transform:uppercase;">Coût total</span>
                                    <span class="fw-bold" style="font-size:20px;color:#1e293b;">{{ number_format($projet->cout_total, 0, ',', ' ') }} €</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3" style="background:#fff;border:1px solid #e2e8f0;">
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:40px;height:40px;border-radius:10px;background:#dcfce7;display:flex;align-items:center;justify-content:center;">
                                    <i data-lucide="hand-coins" style="width:20px;height:20px;color:#16a34a;"></i>
                                </div>
                                <div>
                                    <span class="text-muted d-block" style="font-size:11px;font-weight:600;text-transform:uppercase;">Part. AYENAH</span>
                                    <span class="fw-bold" style="font-size:20px;color:#16a34a;">{{ number_format($projet->participation_ayenah ?? 0, 0, ',', ' ') }} €</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Partenaire Local --}}
                <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="map-pin" style="width:14px;height:14px;color:#2563eb;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Local</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Structure porteuse</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->structure_porteuse }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Interlocuteur</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->interlocuteur_local }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Téléphone</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->telephone_local }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Email</span>
                                <a href="mailto:{{ $projet->courriel_local }}" style="color:#2563eb;">{{ $projet->courriel_local }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Partenaire Diaspora --}}
                <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#e0e7ff;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="globe" style="width:14px;height:14px;color:#4f46e5;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Diaspora</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Organisation</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->partenaire_diaspora }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Interlocuteur</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->interlocuteur_diaspora }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Téléphone</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $projet->telephone_diaspora }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;">Email</span>
                                <a href="mailto:{{ $projet->courriel_diaspora }}" style="color:#2563eb;">{{ $projet->courriel_diaspora }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Documents --}}
                @if($projet->fichier_presentation || $projet->photo_logo)
                <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="paperclip" style="width:14px;height:14px;color:#d97706;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Documents</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-3 align-items-center">
                            @if($projet->fichier_presentation)
                            <div class="col-md-6">
                                <a href="{{ route('admin.projets.presentation.download', $projet) }}" class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-decoration-none" style="background:#eff6ff;color:#2563eb;font-weight:500;font-size:13px;">
                                    <i data-lucide="download" style="width:16px;height:16px;"></i> Télécharger le fichier
                                </a>
                            </div>
                            @endif
                            @if($projet->photo_logo)
                            <div class="col-md-6 text-center">
                                <img src="{{ asset('storage/' . $projet->photo_logo) }}" alt="{{ $projet->intitule_projet }}" class="img-fluid rounded-3" style="max-height:100px;object-fit:cover;">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif

            </div>

            <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Fermer</button>
                <button class="btn btn-warning px-4" data-bs-toggle="modal" data-bs-target="#update-project-{{ $projet->id }}">
                    <i data-lucide="pencil" style="width:14px;height:14px;" class="me-1"></i> Modifier
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- ══════════════════════════════════════════
     MODAL : Ajouter projet
══════════════════════════════════════════ --}}
<div id="add-project" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#059669 0%,#10b981 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="plus-circle" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold">Nouveau Projet</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4" style="background:#f8fafc;">
                <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Infos projet --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#ecfdf5;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="info" style="width:14px;height:14px;color:#059669;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Informations du projet</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Intitulé du projet <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="intitule_projet" required placeholder="Nom du projet">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Description du projet..."></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lieu d'intervention <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="lieu_intervention" required placeholder="Ville / Région">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Thématique <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="thematique_projet" required placeholder="Ex: Agriculture, Éducation...">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Statut</label>
                                    <select class="form-select" name="statut">
                                        @foreach(\App\Models\Projet::$statutLabels as $key => $label)
                                        <option value="{{ $key }}">{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date de début</label>
                                    <input class="form-control" type="date" name="date_debut">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date de fin prévue</label>
                                    <input class="form-control" type="date" name="date_fin_prevue">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Durée totale <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="duree_totale" required placeholder="Ex: 12 mois">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Avancement (%)</label>
                                    <input class="form-control" type="number" name="completude" min="0" max="100" value="0" placeholder="0">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Inscriptions ouvertes</label>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" name="inscription_active" value="1" id="inscription_active_add">
                                        <label class="form-check-label" for="inscription_active_add">Autoriser les inscriptions diaspora</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Partenaire Local --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="map-pin" style="width:14px;height:14px;color:#2563eb;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Local</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Structure porteuse <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="structure_porteuse" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Interlocuteur <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="interlocuteur_local" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input class="form-control" type="tel" name="telephone_local" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="courriel_local" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Partenaire Diaspora --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#e0e7ff;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="globe" style="width:14px;height:14px;color:#4f46e5;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Diaspora</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Organisation <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="partenaire_diaspora" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Interlocuteur <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="interlocuteur_diaspora" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input class="form-control" type="tel" name="telephone_diaspora" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="courriel_diaspora" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Financement --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="coins" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Financement</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Coût total (€) <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" step="0.01" name="cout_total" required placeholder="0.00">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Participation AYENAH (€)</label>
                                    <input class="form-control" type="number" step="0.01" name="participation_ayenah" placeholder="0.00">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Autres partenaires</label>
                                    <input class="form-control" type="text" name="autres_partenaires" placeholder="Optionnel">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Documents --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="paperclip" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Documents</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Fichier de présentation</label>
                                    <input class="form-control" type="file" name="fichier_presentation" accept=".pdf,.docx">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Photo / Logo</label>
                                    <input class="form-control" type="file" name="photo_logo" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success w-100 py-2 mt-2" type="submit">
                        <i data-lucide="save" style="width:16px;height:16px;" class="me-1"></i> Enregistrer le projet
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════
     MODALS : Modifier projet
══════════════════════════════════════════ --}}
@foreach($projets as $projet)
<div id="update-project-{{ $projet->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#d97706 0%,#f59e0b 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="pencil" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold">Modifier : {{ Str::limit($projet->intitule_projet, 40) }}</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4" style="background:#f8fafc;">
                <form action="{{ route('projets.update', $projet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Infos projet --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#ecfdf5;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="info" style="width:14px;height:14px;color:#059669;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Informations du projet</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Intitulé du projet</label>
                                    <input class="form-control" type="text" name="intitule_projet" value="{{ old('intitule_projet', $projet->intitule_projet) }}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="3">{{ old('description', $projet->description) }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lieu d'intervention</label>
                                    <input class="form-control" type="text" name="lieu_intervention" value="{{ old('lieu_intervention', $projet->lieu_intervention) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Thématique</label>
                                    <input class="form-control" type="text" name="thematique_projet" value="{{ old('thematique_projet', $projet->thematique_projet) }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Statut</label>
                                    <select class="form-select" name="statut">
                                        @foreach(\App\Models\Projet::$statutLabels as $key => $label)
                                        <option value="{{ $key }}" {{ old('statut', $projet->statut) === $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date de début</label>
                                    <input class="form-control" type="date" name="date_debut" value="{{ old('date_debut', $projet->date_debut?->format('Y-m-d')) }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date de fin prévue</label>
                                    <input class="form-control" type="date" name="date_fin_prevue" value="{{ old('date_fin_prevue', $projet->date_fin_prevue?->format('Y-m-d')) }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Durée totale</label>
                                    <input class="form-control" type="text" name="duree_totale" value="{{ old('duree_totale', $projet->duree_totale) }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Avancement (%)</label>
                                    <input class="form-control" type="number" name="completude" min="0" max="100" value="{{ old('completude', $projet->completude) }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Inscriptions ouvertes</label>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" name="inscription_active" value="1"
                                            id="inscription_active_{{ $projet->id }}"
                                            {{ old('inscription_active', $projet->inscription_active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inscription_active_{{ $projet->id }}">Autoriser</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Partenaire Local --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="map-pin" style="width:14px;height:14px;color:#2563eb;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Local</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Structure porteuse</label>
                                    <input class="form-control" type="text" name="structure_porteuse" value="{{ old('structure_porteuse', $projet->structure_porteuse) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Interlocuteur</label>
                                    <input class="form-control" type="text" name="interlocuteur_local" value="{{ old('interlocuteur_local', $projet->interlocuteur_local) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input class="form-control" type="tel" name="telephone_local" value="{{ old('telephone_local', $projet->telephone_local) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="courriel_local" value="{{ old('courriel_local', $projet->courriel_local) }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Partenaire Diaspora --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#e0e7ff;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="globe" style="width:14px;height:14px;color:#4f46e5;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Partenaire Diaspora</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Organisation</label>
                                    <input class="form-control" type="text" name="partenaire_diaspora" value="{{ old('partenaire_diaspora', $projet->partenaire_diaspora) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Interlocuteur</label>
                                    <input class="form-control" type="text" name="interlocuteur_diaspora" value="{{ old('interlocuteur_diaspora', $projet->interlocuteur_diaspora) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input class="form-control" type="tel" name="telephone_diaspora" value="{{ old('telephone_diaspora', $projet->telephone_diaspora) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="courriel_diaspora" value="{{ old('courriel_diaspora', $projet->courriel_diaspora) }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Financement --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="coins" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Financement</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Coût total (€)</label>
                                    <input class="form-control" type="number" step="0.01" name="cout_total" value="{{ old('cout_total', $projet->cout_total) }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Participation AYENAH (€)</label>
                                    <input class="form-control" type="number" step="0.01" name="participation_ayenah" value="{{ old('participation_ayenah', $projet->participation_ayenah) }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Autres partenaires</label>
                                    <input class="form-control" type="text" name="autres_partenaires" value="{{ old('autres_partenaires', $projet->autres_partenaires) }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Documents --}}
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="paperclip" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Documents</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Fichier de présentation</label>
                                    <input class="form-control" type="file" name="fichier_presentation" accept=".pdf,.docx">
                                    @if($projet->fichier_presentation)
                                    <small class="text-muted mt-1 d-block">
                                        Actuel : <a href="{{ route('admin.projets.presentation.download', $projet) }}" target="_blank" style="color:#2563eb;">Voir</a>
                                    </small>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Photo / Logo</label>
                                    <input class="form-control" type="file" name="photo_logo" accept="image/*">
                                    @if($projet->photo_logo)
                                    <img src="{{ asset('storage/' . $projet->photo_logo) }}" class="img-fluid rounded-3 mt-2" style="max-height:60px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-warning w-100 py-2 mt-2" type="submit">
                        <i data-lucide="save" style="width:16px;height:16px;" class="me-1"></i> Mettre à jour
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
