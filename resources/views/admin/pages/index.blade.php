@extends('layout/template-admin')

@section('title', 'Pages du site')
@section('page-title', 'Pages du site')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Pages du site']]" />
@endsection

@section('content')

<div class="row g-3">
    @foreach ($pages as $slug => $page)
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('admin.pages.edit', $slug) }}" class="text-decoration-none">
                <div class="card border-0 h-100 page-card-v2">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="page-icon-box">
                            <i data-lucide="{{ $page['icon'] }}" style="width:24px;height:24px;"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 text-dark fw-semibold">{{ $page['label'] }}</h6>
                            <span class="text-muted" style="font-size:13px;">{{ $page['sections_count'] }} section{{ $page['sections_count'] > 1 ? 's' : '' }} modifiable{{ $page['sections_count'] > 1 ? 's' : '' }}</span>
                        </div>
                        <div class="page-arrow text-muted">
                            <i data-lucide="chevron-right" style="width:20px;height:20px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection

@push('styles')
<style>
    .page-card-v2 {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.04);
        transition: all .2s ease;
        cursor: pointer;
    }
    .page-card-v2:hover {
        box-shadow: 0 10px 25px rgba(0,0,0,.08);
        transform: translateY(-2px);
    }
    .page-card-v2:hover .page-icon-box {
        background: #2563eb;
        color: #fff;
    }
    .page-card-v2:hover .page-arrow {
        color: #2563eb !important;
        transform: translateX(3px);
    }
    .page-icon-box {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #eff6ff;
        color: #2563eb;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: all .2s ease;
    }
    .page-arrow {
        flex-shrink: 0;
        transition: all .2s ease;
    }
</style>
@endpush
