@extends('layout/template-admin')

@section('title', 'Modifier — ' . $meta['label'])
@section('page-title', 'Modifier — ' . $meta['label'])

@section('breadcrumb')
<x-admin-breadcrumb :items="[
    ['label' => 'Pages du site', 'url' => route('admin.pages.index')],
    ['label' => $meta['label']],
]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        @if ($contents->isEmpty())
            <div class="alert alert-info">
                <i data-lucide="info" style="width:16px;height:16px;" class="me-2"></i>
                Aucune section définie. Lancez le seeder pour initialiser le contenu.
            </div>
        @else
            <form action="{{ route('admin.pages.update', $page) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    @foreach ($contents as $index => $content)
                    <div class="col-12">
                        <div class="card border-0 section-card-v2">
                            <div class="card-body p-0">
                                <div class="section-header d-flex align-items-center gap-3 p-3" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                                    <div class="section-number">{{ $index + 1 }}</div>
                                    <h6 class="mb-0 fw-semibold flex-grow-1">{{ ucfirst(str_replace('_', ' ', $content->section)) }}</h6>
                                    <span class="section-type-badge">
                                        @if($content->type === 'html')
                                            <i data-lucide="code" style="width:14px;height:14px;" class="me-1"></i>HTML
                                        @elseif($content->type === 'textarea')
                                            <i data-lucide="align-left" style="width:14px;height:14px;" class="me-1"></i>Texte
                                        @else
                                            <i data-lucide="type" style="width:14px;height:14px;" class="me-1"></i>Court
                                        @endif
                                    </span>
                                    <i data-lucide="chevron-down" style="width:18px;height:18px;" class="section-chevron text-muted"></i>
                                </div>
                                <div id="collapse-{{ $index }}" class="collapse {{ $index === 0 ? 'show' : '' }}">
                                    <div class="section-editor-area px-3 pb-3">
                                        <textarea class="form-control rich-editor" name="{{ $content->section }}" id="section-{{ $content->section }}" rows="6">{{ old($content->section, $content->content) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-4 mb-4 d-flex align-items-center gap-3">
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        <i data-lucide="save" style="width:16px;height:16px;" class="me-1"></i> Enregistrer les modifications
                    </button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-light px-4 py-2">Retour</a>
                </div>
            </form>
        @endif
    </div>
</div>

@endsection

@push('styles')
<style>
    .section-card-v2 {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0,0,0,.05);
        overflow: hidden;
        transition: box-shadow .2s ease;
    }
    .section-card-v2:has(.collapse.show) {
        box-shadow: 0 4px 15px rgba(0,0,0,.08);
    }
    .section-header {
        cursor: pointer;
        border-bottom: 1px solid transparent;
        transition: background .15s ease;
        border-radius: 12px;
    }
    .section-header:hover {
        background: #f8fafc;
    }
    .section-header[aria-expanded="true"] {
        border-bottom-color: #e2e8f0;
        border-radius: 12px 12px 0 0;
    }
    .section-header[aria-expanded="true"] .section-chevron {
        transform: rotate(180deg);
    }
    .section-chevron {
        transition: transform .2s ease;
    }
    .section-number {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #eff6ff;
        color: #2563eb;
        font-weight: 700;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .section-type-badge {
        display: inline-flex;
        align-items: center;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .5px;
        color: #64748b;
        background: #f1f5f9;
        padding: 4px 10px;
        border-radius: 6px;
    }
    .section-editor-area {
        padding-top: 8px;
    }
    .section-editor-area .note-editor {
        border-radius: 8px !important;
        border-color: #e2e8f0 !important;
    }
</style>
@endpush
