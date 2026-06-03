@extends('layout/template-admin')

@section('title', 'Tableau de bord')
@section('page-title', 'Tableau de bord')

@section('content')

<!-- Welcome Banner -->
<div class="welcome-banner">
    <h4>Bienvenue, {{ Auth::user()->name }} !</h4>
    <p>Aperçu de la plateforme AYENAH — Cellule de Coordination</p>
</div>

<!-- Stat Cards -->
<div class="row g-3 mb-4">

    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.projets.index') }}" class="text-decoration-none">
            <div class="card stat-card border-blue">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="stat-label mb-1">Projets soutenus</p>
                            <h3 class="stat-value">{{ $total_projets }}</h3>
                            <small class="text-success">{{ $total_projets_actifs }} ouverts aux candidatures</small>
                        </div>
                        <div class="stat-icon stat-icon-blue">
                            <i data-lucide="folder-kanban"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.enregistrements.index') }}" class="text-decoration-none">
            <div class="card stat-card border-green">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="stat-label mb-1">Candidatures diaspora</p>
                            <h3 class="stat-value">{{ $total_candidatures }}</h3>
                            <small class="text-success">{{ $total_validees }} validée{{ $total_validees > 1 ? 's' : '' }}</small>
                        </div>
                        <div class="stat-icon stat-icon-green">
                            <i data-lucide="users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.enregistrements.index') }}" class="text-decoration-none">
            <div class="card stat-card border-orange">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="stat-label mb-1">En attente de validation</p>
                            <h3 class="stat-value">{{ $total_en_attente }}</h3>
                            <small class="{{ $total_en_attente > 0 ? 'text-warning' : 'text-muted' }}">
                                {{ $total_en_attente > 0 ? 'Action requise' : 'À jour' }}
                            </small>
                        </div>
                        <div class="stat-icon stat-icon-orange">
                            <i data-lucide="clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('message') }}" class="text-decoration-none">
            <div class="card stat-card border-purple">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="stat-label mb-1">Messages non lus</p>
                            <h3 class="stat-value">{{ $total_messages }}</h3>
                            <small class="{{ $total_messages > 0 ? 'text-danger' : 'text-muted' }}">
                                {{ $total_messages > 0 ? 'À traiter' : 'Aucun en attente' }}
                            </small>
                        </div>
                        <div class="stat-icon stat-icon-purple">
                            <i data-lucide="mail"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
<!-- End Stat Cards -->

<!-- Dernières candidatures -->
<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4 class="header-title mb-0">Dernières candidatures diaspora</h4>
                        <small class="text-muted">Processus : Enregistrement → Validation Cellule → Comité de Sélection</small>
                    </div>
                    <a href="{{ route('admin.enregistrements.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
                </div>

                @if($recent_candidatures->isEmpty())
                    <p class="text-muted">Aucune candidature pour le moment.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Candidat</th>
                                    <th>Email</th>
                                    <th>Volet</th>
                                    <th>Projet</th>
                                    <th>Thématique</th>
                                    <th>Statut</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_candidatures as $c)
                                <tr>
                                    <td class="fw-semibold">{{ $c->firstname }} {{ $c->lastname }}</td>
                                    <td class="text-muted" style="font-size:13px;">{{ $c->email }}</td>
                                    <td>
                                        @if($c->volet === 'volet_2_expertise')
                                            <span class="badge rounded-pill px-2 py-1" style="background:#eff6ff;color:#2563eb;font-size:11px;">
                                                <i data-lucide="graduation-cap" style="width:10px;height:10px;"></i> Expertise
                                            </span>
                                        @else
                                            <span class="badge rounded-pill px-2 py-1" style="background:#fef3c7;color:#d97706;font-size:11px;">
                                                <i data-lucide="coins" style="width:10px;height:10px;"></i> Financement
                                            </span>
                                        @endif
                                    </td>
                                    <td style="font-size:13px;">{{ Str::limit($c->project_name, 25) }}</td>
                                    <td>
                                        <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">
                                            {{ Str::limit($c->thematique, 15) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($c->isValidated())
                                            <span class="badge rounded-pill px-2 py-1" style="background:#dcfce7;color:#16a34a;font-size:11px;">
                                                <i data-lucide="check-circle" style="width:10px;height:10px;"></i> Validée
                                            </span>
                                        @else
                                            <span class="badge rounded-pill px-2 py-1" style="background:#fef9c3;color:#ca8a04;font-size:11px;">
                                                <i data-lucide="clock" style="width:10px;height:10px;"></i> En attente
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-muted" style="font-size:12px;">{{ $c->created_at->format('d/m/Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
