@extends('layout/template-admin')

@section('title', 'FAQ')
@section('page-title', 'FAQ')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'FAQ']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="header-title mb-0">Foire aux questions</h4>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-faq">
                        <i data-lucide="plus" style="width:16px;height:16px;" class="me-1"></i> Ajouter une FAQ
                    </button>
                </div>

                <div class="table-responsive">
                    <table id="dt-faqs" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Question</th>
                                <th style="width:80px">Ordre</th>
                                <th style="width:80px">Actif</th>
                                <th style="width:120px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $loop->iteration }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div style="width:28px;height:28px;border-radius:7px;background:#fef3c7;color:#d97706;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i data-lucide="help-circle" style="width:14px;height:14px;"></i>
                                        </div>
                                        <span class="fw-medium" style="font-size:13px;">{{ Str::limit($faq->question, 80) }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge rounded-pill px-2 py-1" style="background:#f1f5f9;color:#475569;font-size:12px;font-weight:600;">{{ $faq->order }}</span>
                                </td>
                                <td>
                                    @if ($faq->is_active)
                                        <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">Oui</span>
                                    @else
                                        <span class="badge rounded-pill px-2 py-1" style="background:#f1f5f9;color:#94a3b8;font-size:11px;">Non</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit-faq-{{ $faq->id }}" title="Modifier">
                                            <i data-lucide="pencil" style="width:14px;height:14px;"></i>
                                        </button>
                                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST">
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

<!-- Add FAQ Modal -->
<div id="add-faq" class="modal fade" tabindex="-1" aria-labelledby="addFaqLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#059669 0%,#10b981 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="plus-circle" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;">Nouvelle FAQ</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4" style="background:#f8fafc;">
                    <div class="rounded-3 p-3 mb-3" style="background:#fff;border:1px solid #e2e8f0;">
                        <label for="add-question" class="form-label">Question</label>
                        <textarea class="form-control" id="add-question" name="question" rows="3" required placeholder="Saisissez la question...">{{ old('question') }}</textarea>
                    </div>
                    <div class="rounded-3 p-3 mb-3" style="background:#fff;border:1px solid #e2e8f0;">
                        <label for="add-answer" class="form-label">Réponse</label>
                        <textarea class="form-control rich-editor" id="add-answer" name="answer" rows="5" style="height:200px;" required>{{ old('answer') }}</textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="rounded-3 p-3" style="background:#fff;border:1px solid #e2e8f0;">
                                <label for="add-order" class="form-label">Ordre d'affichage</label>
                                <input class="form-control" type="number" id="add-order" name="order" value="{{ old('order', 0) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded-3 p-3" style="background:#fff;border:1px solid #e2e8f0;">
                                <label class="form-label d-block">Statut</label>
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="add-is_active" name="is_active" value="1" checked>
                                    <label class="form-check-label" for="add-is_active">Activer cette FAQ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success px-4">
                        <i data-lucide="save" style="width:14px;height:14px;" class="me-1"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit FAQ Modals -->
@foreach ($faqs as $faq)
<div id="edit-faq-{{ $faq->id }}" class="modal fade" tabindex="-1" aria-labelledby="editFaqLabel-{{ $faq->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#d97706 0%,#f59e0b 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;">
                        <i data-lucide="pencil" style="width:20px;height:20px;"></i>
                    </div>
                    <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;">Modifier la FAQ</h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4" style="background:#f8fafc;">
                    <div class="rounded-3 p-3 mb-3" style="background:#fff;border:1px solid #e2e8f0;">
                        <label for="edit-question-{{ $faq->id }}" class="form-label">Question</label>
                        <textarea class="form-control" id="edit-question-{{ $faq->id }}" name="question" rows="3" required>{{ old('question', $faq->question) }}</textarea>
                    </div>
                    <div class="rounded-3 p-3 mb-3" style="background:#fff;border:1px solid #e2e8f0;">
                        <label for="edit-answer-{{ $faq->id }}" class="form-label">Réponse</label>
                        <textarea class="form-control rich-editor" id="edit-answer-{{ $faq->id }}" name="answer" rows="5" style="height:200px;" required>{{ old('answer', $faq->answer) }}</textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="rounded-3 p-3" style="background:#fff;border:1px solid #e2e8f0;">
                                <label for="edit-order-{{ $faq->id }}" class="form-label">Ordre d'affichage</label>
                                <input class="form-control" type="number" id="edit-order-{{ $faq->id }}" name="order" value="{{ old('order', $faq->order) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded-3 p-3" style="background:#fff;border:1px solid #e2e8f0;">
                                <label class="form-label d-block">Statut</label>
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="edit-is_active-{{ $faq->id }}" name="is_active" value="1" {{ $faq->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="edit-is_active-{{ $faq->id }}">Activer cette FAQ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning px-4">
                        <i data-lucide="save" style="width:14px;height:14px;" class="me-1"></i> Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
