@extends('layout/template-admin')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-10">
                <h4 class="page-title mb-0">Liste des contributeurs</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nom </th>
                                <th>Prénoms</th>
                                <th>Email</th>
                                <th>Téléphone </th>
                                <th>Profession </th>
                                <th>Lieu d'habitation </th>
                                <th>Proposition de contribution</th>
                                <th>Projet sélectionné</th>
                                <th>Motivation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contributors as $contributor)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $contributor->lastname }}</td>
                                <td>{{ $contributor->firstname }}</td>
                                <td>{{ $contributor->email }}</td>
                                <td>{{ $contributor->phone }}</td>
                                <td>{{ $contributor->profession }}</td>
                                <td>{{ $contributor->location }}</td>
                                <td>{{ $contributor->amount }}</td>
                                <td>
                                @isset($projets)
                                    @foreach ($projets as $projet)
                                        @if ($projet->id == $contributor->projet_id)
                                            {{ $projet->intitule_projet }}
                                        @endif
                                    @endforeach
                                @endisset
                                </td>
                                <td>{{ $contributor->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
@endsection