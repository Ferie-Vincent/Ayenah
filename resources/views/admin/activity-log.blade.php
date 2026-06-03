@extends('layout/template-admin')

@section('title', 'Journal d\'activité')
@section('page-title', 'Journal d\'activité')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Journal d\'activité']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dt-activity-log" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>IP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logs as $log)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $loop->iteration }}</span></td>
                                <td>
                                    @if($log->user)
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="width:28px;height:28px;border-radius:7px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:11px;flex-shrink:0;">
                                                {{ strtoupper(substr($log->user->name, 0, 1)) }}
                                            </div>
                                            <span class="fw-semibold" style="font-size:13px;">{{ $log->user->name }}</span>
                                        </div>
                                    @else
                                        <span class="text-muted" style="font-size:13px;">Système</span>
                                    @endif
                                </td>
                                <td>
                                    @switch($log->action)
                                        @case('create')
                                            <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">
                                                <i data-lucide="plus" style="width:10px;height:10px;" class="me-1"></i>Création
                                            </span>
                                            @break
                                        @case('update')
                                            <span class="badge rounded-pill px-2 py-1" style="background:#fef3c7;color:#d97706;font-size:11px;">
                                                <i data-lucide="pencil" style="width:10px;height:10px;" class="me-1"></i>Modification
                                            </span>
                                            @break
                                        @case('delete')
                                            <span class="badge rounded-pill px-2 py-1" style="background:#fef2f2;color:#dc2626;font-size:11px;">
                                                <i data-lucide="trash-2" style="width:10px;height:10px;" class="me-1"></i>Suppression
                                            </span>
                                            @break
                                        @default
                                            <span class="badge rounded-pill px-2 py-1" style="background:#f1f5f9;color:#475569;font-size:11px;">{{ $log->action }}</span>
                                    @endswitch
                                </td>
                                <td><span style="color:#334155;font-size:13px;">{{ $log->description ?? '-' }}</span></td>
                                <td><span style="color:#64748b;font-size:12px;">{{ $log->created_at->format('d/m/Y H:i') }}</span></td>
                                <td><code style="background:#f1f5f9;padding:3px 8px;border-radius:5px;font-size:12px;color:#475569;">{{ $log->ip_address }}</code></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
