@extends('layout/template-admin')

@section('title', 'Actualités')
@section('page-title', 'Actualités')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Actualités']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="header-title mb-0">Liste des Actualités</h4>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-visite">
                        <i data-lucide="plus" style="width:16px;height:16px;" class="me-1"></i> Ajouter
                    </button>
                </div>

                <div class="table-responsive">
                    <table id="dt-visites" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Titre</th>
                                <th>Lieu</th>
                                <th>Date</th>
                                <th style="width:130px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visites as $index => $visite)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $index + 1 }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div style="width:32px;height:32px;border-radius:8px;background:#fef3c7;color:#d97706;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i data-lucide="newspaper" style="width:14px;height:14px;"></i>
                                        </div>
                                        <span class="fw-semibold" style="font-size:13px;">{{ Str::limit($visite->title, 50) }}</span>
                                    </div>
                                </td>
                                <td><span class="badge rounded-pill px-2 py-1" style="background:#eff6ff;color:#2563eb;font-size:11px;">{{ $visite->region }}</span></td>
                                <td><span style="color:#64748b;font-size:12px;">{{ $visite->dateVisited }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#read-article-{{ $visite->id }}" title="Voir">
                                            <i data-lucide="eye" style="width:14px;height:14px;"></i>
                                        </button>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update-visite-{{ $visite->id }}" title="Modifier">
                                            <i data-lucide="pencil" style="width:14px;height:14px;"></i>
                                        </button>
                                        <form action="{{ route('visites.destroy', $visite->id) }}" method="POST">
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

<!-- Modal Ajout -->
<div id="add-visite" class="modal fade" tabindex="-1" aria-labelledby="addVisiteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#059669 0%,#10b981 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="plus-circle" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;" id="addVisiteLabel">Nouvelle Actualité</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body p-4" style="background:#f8fafc;">
                <form action="{{ route('visites.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Informations -->
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="info" style="width:14px;height:14px;color:#2563eb;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Informations</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Titre de l'article</label>
                                    <input class="form-control" type="text" name="title" required placeholder="Saisissez le titre de l'article">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lieu / Région</label>
                                    <input class="form-control" type="text" name="region" required placeholder="Ex: Abidjan (Cocody)">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input class="form-control" type="date" name="dateVisited" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="add-description" class="form-control rich-editor" rows="8" required placeholder="Rédigez le contenu de l'article..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Médias -->
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="image" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Médias</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Photo de couverture <span class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="cover_image" required accept="image/*">
                                    <small class="text-muted">Image principale affichée en haut de l'article</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image 1</label>
                                    <input class="form-control" type="file" name="image1" accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image 2</label>
                                    <input class="form-control" type="file" name="image2" accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image 3</label>
                                    <input class="form-control" type="file" name="image3" accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image 4</label>
                                    <input class="form-control" type="file" name="image4" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success w-100 py-2 mt-2" type="submit">
                        <i data-lucide="save" style="width:16px;height:16px;" class="me-1"></i> Publier l'actualité
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modals de Modification -->
@foreach($visites as $visite)
<div id="update-visite-{{ $visite->id }}" class="modal fade" tabindex="-1" aria-labelledby="update-visite-title-{{ $visite->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#d97706 0%,#f59e0b 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="pencil" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;">Modifier : {{ Str::limit($visite->title, 40) }}</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body p-4" style="background:#f8fafc;">
                <form action="{{ route('visites.update', $visite->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Informations -->
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="info" style="width:14px;height:14px;color:#2563eb;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Informations</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Titre de l'article</label>
                                    <input class="form-control" type="text" name="title" required value="{{ old('title', $visite->title) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lieu / Région</label>
                                    <input class="form-control" type="text" name="region" required value="{{ old('region', $visite->region) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input class="form-control" type="date" name="dateVisited" required value="{{ old('dateVisited', $visite->dateVisited) }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="edit-description-{{ $visite->id }}" class="form-control rich-editor" rows="8" required>{{ old('description', $visite->description) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Médias -->
                    <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                            <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                                <i data-lucide="image" style="width:14px;height:14px;color:#d97706;"></i>
                            </div>
                            <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Médias</h6>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Photo de couverture</label>
                                    <input class="form-control" type="file" name="cover_image" accept="image/*">
                                    @if($visite->cover_image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $visite->cover_image) }}" alt="Couverture - {{ $visite->title }}" class="rounded-3" style="max-height:100px;">
                                    </div>
                                    @endif
                                </div>
                                @for($i = 1; $i <= 4; $i++)
                                <div class="col-md-6">
                                    <label class="form-label">Image {{ $i }}</label>
                                    <input class="form-control" type="file" name="image{{ $i }}" accept="image/*">
                                    @if($visite->{'image'.$i})
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $visite->{'image'.$i}) }}" alt="Image {{ $i }} - {{ $visite->title }}" class="rounded-3" style="max-height:80px;">
                                    </div>
                                    @endif
                                </div>
                                @endfor
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

<!-- Modals de Lecture -->
@foreach($visites as $visite)
<div class="modal fade" id="read-article-{{ $visite->id }}" tabindex="-1" aria-labelledby="read-article-title-{{ $visite->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <!-- Cover Image as header -->
            @if($visite->cover_image)
            <div style="height:220px;overflow:hidden;position:relative;">
                <img src="{{ asset('storage/' . $visite->cover_image) }}" alt="Couverture - {{ $visite->title }}" class="w-100" style="object-fit:cover;height:100%;">
                <div style="position:absolute;inset:0;background:linear-gradient(transparent 40%,rgba(0,0,0,.7));"></div>
                <button type="button" class="btn-close btn-close-white position-absolute" style="top:16px;right:16px;" data-bs-dismiss="modal" aria-label="Fermer"></button>
                <div class="position-absolute px-4 pb-3" style="bottom:0;left:0;right:0;">
                    <h5 class="text-white fw-bold mb-1" style="font-size:18px;">{{ $visite->title }}</h5>
                    <div class="d-flex gap-3">
                        <span class="text-white" style="font-size:12px;opacity:.85;">
                            <i data-lucide="map-pin" style="width:12px;height:12px;" class="me-1"></i>{{ $visite->region }}
                        </span>
                        <span class="text-white" style="font-size:12px;opacity:.85;">
                            <i data-lucide="calendar" style="width:12px;height:12px;" class="me-1"></i>{{ $visite->dateVisited }}
                        </span>
                    </div>
                </div>
            </div>
            @else
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#1e3a5f 0%,#2563eb 100%);">
                <div>
                    <h6 class="modal-title mb-1 fw-bold" style="font-size:16px;">{{ $visite->title }}</h6>
                    <div class="d-flex gap-3">
                        <span style="font-size:12px;opacity:.8;">
                            <i data-lucide="map-pin" style="width:12px;height:12px;" class="me-1"></i>{{ $visite->region }}
                        </span>
                        <span style="font-size:12px;opacity:.8;">
                            <i data-lucide="calendar" style="width:12px;height:12px;" class="me-1"></i>{{ $visite->dateVisited }}
                        </span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            @endif

            <div class="modal-body p-4" style="background:#f8fafc;">
                <!-- Description -->
                <div class="rounded-3 mb-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="p-4" style="line-height:1.9;color:#334155;font-size:14px;">
                        {!! \Mews\Purifier\Facades\Purifier::clean($visite->description) !!}
                    </div>
                </div>

                <!-- Gallery -->
                @php
                    $images = array_filter([
                        $visite->image1,
                        $visite->image2,
                        $visite->image3,
                        $visite->image4
                    ]);
                @endphp
                @if(count($images) > 0)
                <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#fef3c7;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="images" style="width:14px;height:14px;color:#d97706;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Galerie</h6>
                    </div>
                    <div class="p-3">
                        <div class="row g-2">
                            @foreach($images as $img)
                            <div class="col-6">
                                <img src="{{ asset('storage/' . $img) }}" alt="Photo - {{ $visite->title }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Fermer</button>
                <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#update-visite-{{ $visite->id }}">
                    <i data-lucide="pencil" style="width:14px;height:14px;" class="me-1"></i> Modifier
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
