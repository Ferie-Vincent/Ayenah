@extends('layout/template-admin')

@section('title', 'Messages')
@section('page-title', 'Messages reçus')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Messages']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dt-messages" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Expéditeur</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th style="width:140px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $index => $message)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $index + 1 }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div style="width:32px;height:32px;border-radius:8px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px;flex-shrink:0;">
                                            {{ strtoupper(substr($message->nom, 0, 1)) }}
                                        </div>
                                        <span class="fw-semibold">{{ $message->nom }}</span>
                                    </div>
                                </td>
                                <td><span style="color:#475569;font-size:13px;">{{ $message->email }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ $message->telephone }}</span></td>
                                <td><span style="color:#64748b;font-size:12px;">{{ $message->created_at->format('d/m/Y H:i') }}</span></td>
                                <td>
                                    @if($message->status == 1)
                                        <span class="badge rounded-pill px-2 py-1" style="background:#ecfdf5;color:#059669;font-size:11px;">Répondu</span>
                                    @else
                                        <span class="badge rounded-pill px-2 py-1" style="background:#fef2f2;color:#dc2626;font-size:11px;">Non lu</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#message-{{ $message->id }}" title="Lire">
                                            <i data-lucide="eye" style="width:14px;height:14px;"></i>
                                        </button>
                                        <a href="mailto:{{ $message->email }}" class="btn btn-success btn-sm" title="Répondre">
                                            <i data-lucide="mail" style="width:14px;height:14px;"></i>
                                        </a>
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

<!-- Read Modals -->
@foreach ($messages as $message)
<div class="modal fade" id="message-{{ $message->id }}" tabindex="-1" aria-labelledby="message-title-{{ $message->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0" style="border-radius:16px;overflow:hidden;">
            <!-- Header gradient -->
            <div class="modal-header border-0 text-white px-4 py-3" style="background:linear-gradient(135deg,#1e3a5f 0%,#2563eb 100%);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:48px;height:48px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:700;">
                        {{ strtoupper(substr($message->nom, 0, 1)) }}
                    </div>
                    <div>
                        <h6 class="modal-title mb-0 fw-bold" style="font-size:16px;">{{ $message->nom }}</h6>
                        <span style="font-size:12px;opacity:.8;">
                            <i data-lucide="calendar" style="width:12px;height:12px;" class="me-1"></i>{{ $message->created_at->format('d/m/Y à H:i') }}
                        </span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <div class="modal-body p-4" style="background:#f8fafc;">

                <!-- Contact -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge rounded-pill px-3 py-2" style="background:#eff6ff;color:#2563eb;font-size:12px;font-weight:600;">
                        <i data-lucide="mail" style="width:12px;height:12px;" class="me-1"></i>{{ $message->email }}
                    </span>
                    @if($message->telephone)
                    <span class="badge rounded-pill px-3 py-2" style="background:#f1f5f9;color:#475569;font-size:12px;font-weight:600;">
                        <i data-lucide="phone" style="width:12px;height:12px;" class="me-1"></i>{{ $message->telephone }}
                    </span>
                    @endif
                    @if($message->status == 1)
                        <span class="badge rounded-pill px-3 py-2" style="background:#ecfdf5;color:#059669;font-size:12px;font-weight:600;">
                            <i data-lucide="check-circle" style="width:12px;height:12px;" class="me-1"></i>Répondu
                        </span>
                    @else
                        <span class="badge rounded-pill px-3 py-2" style="background:#fef2f2;color:#dc2626;font-size:12px;font-weight:600;">
                            <i data-lucide="clock" style="width:12px;height:12px;" class="me-1"></i>Non lu
                        </span>
                    @endif
                </div>

                <!-- Message -->
                <div class="rounded-3 overflow-hidden" style="background:#fff;border:1px solid #e2e8f0;">
                    <div class="d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f5f9;border-bottom:1px solid #e2e8f0;">
                        <div style="width:28px;height:28px;border-radius:8px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
                            <i data-lucide="message-square" style="width:14px;height:14px;color:#2563eb;"></i>
                        </div>
                        <h6 class="mb-0 fw-semibold" style="font-size:13px;color:#1e293b;">Message</h6>
                    </div>
                    <div class="p-4">
                        <p class="mb-0" style="line-height:1.8;color:#334155;font-size:14px;">{{ $message->message }}</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('messages.update', $message->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-footer border-0 px-4 py-3" style="background:#fff;">
                    <div class="d-flex align-items-center gap-2 me-auto">
                        <span style="font-size:13px;color:#475569;font-weight:500;">Marqué comme lu</span>
                        <span class="form-check form-switch mb-0">
                            <input type="hidden" name="status" value="0">
                            <input class="form-check-input" type="checkbox" role="switch" name="status" value="1" @checked($message->status == 1)>
                        </span>
                    </div>
                    <a href="mailto:{{ $message->email }}" class="btn btn-primary px-4">
                        <i data-lucide="mail" style="width:14px;height:14px;" class="me-1"></i> Répondre
                    </a>
                    <button type="submit" class="btn btn-success px-4">
                        <i data-lucide="check" style="width:14px;height:14px;" class="me-1"></i> Valider
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
