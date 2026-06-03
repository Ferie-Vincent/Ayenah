@extends('layout/template-admin')

@section('title', 'Contributeurs')
@section('page-title', 'Contributeurs')

@section('breadcrumb')
<x-admin-breadcrumb :items="[['label' => 'Contributeurs']]" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card border-0" style="border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dt-contributors" class="table table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Contributeur</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Profession</th>
                                <th>Lieu</th>
                                <th>Contribution</th>
                                <th>Projet</th>
                                <th>Motivation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contributors as $contributor)
                            <tr>
                                <td><span class="fw-semibold text-muted">{{ $loop->iteration }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div style="width:32px;height:32px;border-radius:8px;background:#ecfdf5;color:#059669;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px;flex-shrink:0;">
                                            {{ strtoupper(substr($contributor->firstname, 0, 1)) }}{{ strtoupper(substr($contributor->lastname, 0, 1)) }}
                                        </div>
                                        <div>
                                            <span class="fw-semibold d-block" style="font-size:13px;">{{ $contributor->firstname }} {{ $contributor->lastname }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span style="color:#475569;font-size:13px;">{{ $contributor->email }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ $contributor->phone }}</span></td>
                                <td><span class="badge rounded-pill px-2 py-1" style="background:#eff6ff;color:#2563eb;font-size:11px;">{{ $contributor->profession }}</span></td>
                                <td><span style="color:#475569;font-size:13px;">{{ $contributor->location }}</span></td>
                                <td><span class="fw-bold" style="color:#16a34a;">{{ $contributor->amount }}</span></td>
                                <td>
                                    @isset($projets)
                                        @foreach ($projets as $projet)
                                            @if ($projet->id == $contributor->projet_id)
                                                <span style="color:#475569;font-size:13px;">{{ Str::limit($projet->intitule_projet, 25) }}</span>
                                            @endif
                                        @endforeach
                                    @endisset
                                </td>
                                <td><span style="color:#64748b;font-size:12px;">{{ Str::limit($contributor->message, 30) }}</span></td>
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
