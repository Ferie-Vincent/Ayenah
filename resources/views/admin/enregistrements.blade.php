@extends('layout/template-admin')

@section('title', 'Inscriptions')
@section('page-title', 'Inscriptions')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Inscriptions']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dt-enregistrements" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Inscrit</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Profession</th>
                                <th>Localisation</th>
                                <th>Projet</th>
                                <th>Montant</th>
                                <th>Thématique</th>
                                <th>Date</th>
                                <th style="width:100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enregistrements as $enregistrement)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $loop->iteration }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div style="width:32px;height:32px;border-radius:8px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:11px;flex-shrink:0;">
                                            {{ strtoupper(substr($enregistrement->firstname, 0, 1)) }}{{ strtoupper(substr($enregistrement->lastname, 0, 1)) }}
                                        </div>
                                        <div>
                                            <span class="fw-semibold d-block" style="font-size:13px;">{{ $enregistrement->firstname }} {{ $enregistrement->lastname }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span style="color:#475569;font-size:13px;">{{ $enregistrement->email }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ $enregistrement->phone }}</span></td>
                                <td><span class="badge rounded-pill px-2 py-1" style="background:#eff6ff;color:#2563eb;font-size:11px;">{{ $enregistrement->profession }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ $enregistrement->location }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ Str::limit($enregistrement->project_name, 20) }}</span></td>
                                <td><span class="fw-bold" style="color:#16a34a;">{{ number_format($enregistrement->amount, 0, ',', ' ') }} €</span></td>
                                <td><span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">{{ Str::limit($enregistrement->thematique, 15) }}</span></td>
                                <td><span style="color:#64748b;font-size:12px;">{{ $enregistrement->created_at->format('d/m/Y') }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail-{{ $enregistrement->id }}" title="Voir">
                                            <i data-lucide="eye" style="width:14px;height:14px;"></i>
                                        </button>
                                        @if($enregistrement->isValidated())
                                            <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;" title="Validé le {{ $enregistrement->validated_at->format('d/m/Y') }}">
                                                <i data-lucide="check-circle" style="width:11px;height:11px;"></i> Validé
                                            </span>
                                        @else
                                            <form action="{{ route('admin.enregistrements.validate', $enregistrement->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" title="Valider et envoyer le lien de candidature"
                                                    onclick="return confirm('Valider et envoyer le lien /demande-financement à {{ $enregistrement->email }} ?')">
                                                    <i data-lucide="check-circle" style="width:14px;height:14px;"></i>
                                                </button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.enregistrements.destroy', $enregistrement->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete-confirm" title="Supprimer">
                                                <i data-lucide="trash-2" style="width:14px;height:14px;"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
@foreach ($enregistrements as $enregistrement)
<div id="detail-{{ $enregistrement->id }}" class="modal fade" tabindex="-1" aria-labelledby="detail-title-{{ $enregistrement->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <!-- Header gradient -->
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#1e3a5f 0%,#2563eb 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:48px;height:48px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:700;">
                        {{ strtoupper(substr($enregistrement->firstname, 0, 1)) }}{{ strtoupper(substr($enregistrement->lastname, 0, 1)) }}
                    </div>
                    <div>
                        <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;">{{ $enregistrement->firstname }} {{ $enregistrement->lastname }}</h6>
                        <span style="font-size:12px;opacity:.8;">
                            Inscrit le {{ $enregistrement->created_at->format('d/m/Y') }}
                        </span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <div class="modal-body p-4" style="background:#f8fafc;">

                <!-- Badges -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge rounded-pill px-3 py-2" style="background:#ecfdf5;color:#059669;font-size:12px;font-weight:600;">
                        <i data-lucide="tag" style="width:12px;height:12px;" class="me-1"></i>{{ $enregistrement->thematique }}
                    </span>
                    <span class="badge rounded-pill px-3 py-2" style="background:#fef3c7;color:#d97706;font-size:12px;font-weight:600;">
                        <i data-lucide="coins" style="width:12px;height:12px;" class="me-1"></i>{{ number_format($enregistrement->amount, 0, ',', ' ') }} €
                    </span>
                    <span class="badge rounded-pill px-3 py-2" style="background:#eff6ff;color:#2563eb;font-size:12px;font-weight:600;">
                        <i data-lucide="briefcase" style="width:12px;height:12px;" class="me-1"></i>{{ $enregistrement->profession }}
                    </span>
                </div>

                <!-- Informations personnelles -->
                <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="user" style="width:14px;height:14px;color:#2563eb;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Informations personnelles</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Nom complet</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $enregistrement->firstname }} {{ $enregistrement->lastname }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Profession</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $enregistrement->profession }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Email</span>
                                <a href="mailto:{{ $enregistrement->email }}" class="fw-medium" style="color:#2563eb;text-decoration:none;">
                                    <i data-lucide="mail" style="width:12px;height:12px;" class="me-1"></i>{{ $enregistrement->email }}
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Téléphone</span>
                                <span class="fw-medium" style="color:#1e293b;">
                                    <i data-lucide="phone" style="width:12px;height:12px;" class="me-1 text-muted"></i>{{ $enregistrement->phone }}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Localisation</span>
                                <span class="fw-medium" style="color:#1e293b;">
                                    <i data-lucide="map-pin" style="width:12px;height:12px;" class="me-1 text-muted"></i>{{ $enregistrement->location }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projet -->
                <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#e0e7ff;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="folder-kanban" style="width:14px;height:14px;color:#4f46e5;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Projet</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Nom du projet</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $enregistrement->project_name }}</span>
                            </div>
                            <div class="col-md-3">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Montant</span>
                                <span class="fw-bold" style="font-size:18px;color:#16a34a;">{{ number_format($enregistrement->amount, 0, ',', ' ') }} €</span>
                            </div>
                            <div class="col-md-3">
                                <span class="d-block text-muted" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Thématique</span>
                                <span class="fw-medium" style="color:#1e293b;">{{ $enregistrement->thematique }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message -->
                @if($enregistrement->message)
                <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="message-square" style="width:14px;height:14px;color:#d97706;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Message</h6>
                    </div>
                    <div class="p-3">
                        <p class="mb-0" style="color:#475569;line-height:1.7;">{{ $enregistrement->message }}</p>
                    </div>
                </div>
                @endif

            </div>

            <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                <a href="mailto:{{ $enregistrement->email }}" class="btn btn-primary px-4">
                    <i data-lucide="mail" style="width:14px;height:14px;" class="me-1"></i> Contacter
                </a>
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
