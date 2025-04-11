@extends('layout/template-admin')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-10">
                <h4 class="page-title mb-0">Visites réalisées</h4>
            </div>
            <div class="col-lg-2">
                <a data-bs-toggle="modal" data-bs-target="#add-project" class="btn btn-primary btn-sm float-end">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Ajouter une visite
                </a>
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
                                <th>Titre de l'article</th>
                                <th>Lieu </th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visites as $index => $visite)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $visite->title }}</td>
                                <td>{{ $visite->region }}</td>
                                <td>{{ $visite->dateVisited }}</td>
                                <td class="d-flex align-items-center gap-2">
                                    <button data-bs-toggle="modal" data-bs-target="#read-article-{{ $visite->id }}" class="btn btn-primary btn-xs">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#update-visite-{{ $visite->id }}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <form action="{{ route('visites.destroy', $visite->id) }}" method="post" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette visite ?')">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
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

<!-- modal content -->
<div id="add-project" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-4 mb-4">
                    <div class="auth-logo">
                        <h2>Ajout de Visite</h2>
                    </div>
                </div>

                <form class="px-3" action="{{route('visites.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titre de l'article :</label>
                        <input class="form-control" type="text" id="title" name="title" required placeholder="Entrez le titre">
                    </div>

                    <div class="mb-3">
                        <label for="region" class="form-label">Région :</label>
                        <input class="form-control" type="text" id="region" name="region" required placeholder="Entrez la région">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date :</label>
                        <input class="form-control" type="date" id="date" name="dateVisited" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea name="description" id="description" class="form-control" style="height: 300px;" required placeholder="Entrez la description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Photo de couverture :</label>
                        <input class="form-control" type="file" id="cover_image" name="cover_image" required accept="image/*">
                    </div>

                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image1_left" class="form-label">Image 1 :</label>
                                    <input class="form-control" type="file" id="image1_left" name="image1" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="image2_left" class="form-label">Image 2 :</label>
                                    <input class="form-control" type="file" id="image2_left" name="image2" accept="image/*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image1_right" class="form-label">Image 3 :</label>
                                    <input class="form-control" type="file" id="image1_right" name="image3" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="image2_right" class="form-label">Image 4 :</label>
                                    <input class="form-control" type="file" id="image2_right" name="image4" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100 waves-effect waves-light mt-4" type="submit">Ajouter</button>
                    </div>
                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@foreach($visites as $visite)

<div id="update-visite-{{$visite->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-4 mb-4">
                    <div class="auth-logo">
                        <h2>Ajout de Visite</h2>
                    </div>
                </div>

                <form class="px-3" action="{{route('visites.update', $visite->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titre de l'article :</label>
                        <input class="form-control" type="text" id="title" name="title" required placeholder="Entrez le titre" value="{{ old('title', $visite->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="region" class="form-label">Région :</label>
                        <input class="form-control" type="text" id="region" name="region" required placeholder="Entrez la région" value="{{ old('region', $visite->region) }}">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date :</label>
                        <input class="form-control" type="string" id="date" name="dateVisited" required value="{{ old('dateVisited', $visite->dateVisited) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea name="description" id="description" class="form-control" style="height: 300px;" required placeholder="Entrez la description">{{ old('description', $visite->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Photo de couverture :</label>
                        <input class="form-control" type="file" id="cover_image" name="cover_image" required accept="image/*">
                        <p class="mt-1">Image actuelle :
                            <img src="{{ asset('storage/' . $visite->cover_image) }}" alt="" width="200" class="rounded shadow">
                        </p>
                    </div>

                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image1_left" class="form-label">Image 1 :</label>
                                    <input class="form-control" type="file" id="image1_left" name="image1" required accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="image2_left" class="form-label">Image 2 :</label>
                                    <input class="form-control" type="file" id="image2_left" name="image2" required accept="image/*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image1_right" class="form-label">Image 3 :</label>
                                    <input class="form-control" type="file" id="image1_right" name="image3" required accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="image2_right" class="form-label">Image 4 :</label>
                                    <input class="form-control" type="file" id="image2_right" name="image4" required accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100 waves-effect waves-light mt-4" type="submit">Mettre à jour</button>
                    </div>
                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach

@foreach($visites as $visite)
<!-- modal content -->
<div class="modal fade" id="read-article-{{ $visite->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="{{ asset('storage/' . $visite->cover_image) }}" alt="" style="margin-top: -8%" class="img-fluid shadow rounded" width="50%">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-lg-6 d-flex justify-content-end">
                                <h4 class="text-muted mt-2">
                                    <i class="fa-solid fa-location-dot text-warning"></i>&nbsp;Région : {{ $visite->region }}
                                </h4>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-start">
                                <h4 class="text-muted mt-2">
                                    <i class="fa-solid fa-calendar text-warning"></i>&nbsp;Date : {{ $visite->dateVisited }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <div class="text-center mt-4">
                    <div class="auth-logo">
                        <h2> {{ $visite->title }} </h2>
                    </div>
                    <p class="text-muted pt-0 p-4">
                        {{ $visite->description }}
                    </p>
                    <p>
                    <div class="container">
                        <div class="row mb-3 g-0">
                            <div class="col-6 text-center">
                                <img src=" {{ asset('storage/' . $visite->image1) }} " alt="" class="img-fluid" width="40%">
                            </div>
                            <div class="col-6 text-center">
                                <img src="{{ asset('storage/' . $visite->image2) }}" alt="" class="img-fluid" width="40%">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-6 text-center">
                                <img src="{{ asset('storage/' . $visite->image4) }}" alt="" class="img-fluid" width="40%">
                            </div>
                            <div class="col-6 text-center">
                                <img src="{{ asset('storage/' . $visite->image3) }}" alt="" class="img-fluid" width="40%">
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.modal -->
@endforeach

@endsection