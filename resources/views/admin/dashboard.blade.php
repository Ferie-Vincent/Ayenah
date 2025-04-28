@extends('layout/template-admin')

@section('content')

<div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Tableau de bord</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-4 col-md-4">
                <a data-bs-toggle="modal" data-bs-target="#add-project">
                    <div class="card shadow">
                        <div class="card-body bg-success ">
                            <i class="bx bx-plus fa fa-2x float-end m-0 h2 text-white"></i>
                            <h3 class=" text-uppercase mt-0 text-white">Ajout de Projet</h3>
                            <h3 class="mb-3 text-white" data-plugin="counterup">Cliquez ici pour ajouter un projet</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{route('visit')}}">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-layer float-end m-0 h2 text-muted"></i>
                        <h3 class="text-muted text-uppercase mt-0">Nombre de projets postés</h3>
                        <h3 class="mb-3 text-danger" data-plugin="counterup">
                            {{$total_projets}}
                        </h3>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4">
                <a href="{{route('contributors')}}">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-user float-end m-0 h2 text-muted"></i>
                        <h3 class="text-muted text-uppercase mt-0">Contributeurs</h3>
                        <h3 class="mb-3 text-danger"><span data-plugin="counterup">
                            {{$total_contributors}}
                        </span></h3>
                    </div>
                </div>
                </a>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-5">Liste des Projets enregistrés</h4>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Structure porteuse de projet </th>
                                    <th>Interlocuteur Local</th>
                                    <th>Téléphone Local</th>
                                    <th>Courriel Local</th>
                                    <th>Partenaire de la Diaspora</th>
                                    <th>Interlocuteur Diaspora </th>
                                    <th>Téléphone Diaspora </th>
                                    <th>Courriel Diaspora</th>
                                    <th>Intituté du Projet </th>
                                    <th>Lieu d'Intervention</th>
                                    <th>Thématique du projet</th>
                                    <th>Autre partenaires du projet</th>
                                    <th>Durée totale du projet </th>
                                    <th>Coût totale du projet</th>
                                    <th>Participation du Projet Ayenah</th>
                                    <th>Fichier de Présentation du projet</th>
                                    <th>Photo ou logo d'illustration </th>
                                    <th>Actions </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($projets as $index => $projet)
                                <tr>
                                    <td> {{ $index + 1 }} </td>
                                    <td>{{$projet->structure_porteuse}}</td>
                                    <td>{{$projet->interlocuteur_local}}</td>
                                    <td>{{$projet->telephone_local}}</td>
                                    <td>{{$projet->courriel_local}}</td>
                                    <td>{{$projet->partenaire_diaspora}}</td>
                                    <td>{{$projet->interlocuteur_diaspora}}</td>
                                    <td>{{$projet->telephone_diaspora}}</td>
                                    <td>{{$projet->courriel_diaspora}}</td>
                                    <td>{{$projet->intitule_projet}}</td>
                                    <td>{{$projet->lieu_intervention}}</td>
                                    <td>
                                        <p>
                                            {{$projet->thematique_projet}}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{$projet->autres_partenaires}}
                                        </p>
                                    </td>
                                    <td>{{$projet->duree_totale}}</td>
                                    <td>{{$projet->cout_total}}</td>
                                    <td>
                                        {{$projet->participation_ayenah}}
                                    </td>
                                    <td><a href="{{ asset('storage/' . $projet->fichier_presentation) }}" class="btn btn-primary btn-xs" download>
                                            <i class="fa fa-download" aria-hidden="true"></i> Télécharger
                                        </a>
                                    <td>
                                        <img src="{{ asset('storage/' . $projet->photo_logo) }}" alt="Illustration du projet" width="100" class="rounded shadow">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-warning btn-xs me-2" data-bs-toggle="modal" data-bs-target="#update-project-{{ $projet->id }}">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <form action="{{route('projets.destroy', $projet->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
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

    </div> <!-- container -->

</div> <!-- content -->

<!-- Ajout de Projet Modal -->
<div id="add-project" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-4 mb-4">
                    <h2>Ajout de Projet</h2>
                </div>
                <form class="px-3" action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="structure_porteuse" class="form-label">Structure porteuse de projet</label>
                        <input class="form-control" type="text" id="structure_porteuse" name="structure_porteuse" required placeholder="Entrez la structure porteuse">
                    </div>

                    <div class="mb-3">
                        <label for="interlocuteur_local" class="form-label">Interlocuteur Local</label>
                        <input class="form-control" type="text" id="interlocuteur_local" name="interlocuteur_local" required placeholder="Entrez le nom de l'interlocuteur local">
                    </div>

                    <div class="mb-3">
                        <label for="telephone_local" class="form-label">Téléphone Local</label>
                        <input class="form-control" type="tel" id="telephone_local" name="telephone_local" required placeholder="xx-xx-xx-xx-xx">
                    </div>

                    <div class="mb-3">
                        <label for="courriel_local" class="form-label">Courriel Local</label>
                        <input class="form-control" type="email" id="courriel_local" name="courriel_local" required placeholder="Entrez le courriel local">
                    </div>

                    <div class="mb-3">
                        <label for="partenaire_diaspora" class="form-label">Partenaire de la Diaspora</label>
                        <input class="form-control" type="text" id="partenaire_diaspora" name="partenaire_diaspora" required placeholder="Entrez le nom du partenaire de la diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="interlocuteur_diaspora" class="form-label">Interlocuteur Diaspora</label>
                        <input class="form-control" type="text" id="interlocuteur_diaspora" name="interlocuteur_diaspora" required placeholder="Entrez le nom de l'interlocuteur diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="telephone_diaspora" class="form-label">Téléphone Diaspora</label>
                        <input class="form-control" type="tel" id="telephone_diaspora" name="telephone_diaspora" required placeholder="xx-xx-xx-xx-xx">
                    </div>

                    <div class="mb-3">
                        <label for="courriel_diaspora" class="form-label">Courriel Diaspora</label>
                        <input class="form-control" type="email" id="courriel_diaspora" name="courriel_diaspora" required placeholder="Entrez le courriel diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="intitule_projet" class="form-label">Intitulé du Projet</label>
                        <input class="form-control" type="text" id="intitule_projet" name="intitule_projet" required placeholder="Entrez l'intitulé du projet">
                    </div>

                    <div class="mb-3">
                        <label for="lieu_intervention" class="form-label">Lieu d'Intervention</label>
                        <input class="form-control" type="text" id="lieu_intervention" name="lieu_intervention" required placeholder="Entrez le lieu d'intervention">
                    </div>

                    <div class="mb-3">
                        <label for="thematique_projet" class="form-label">Thématique du Projet</label>
                        <input class="form-control" type="text" id="thematique_projet" name="thematique_projet" required placeholder="Entrez la thématique">
                    </div>

                    <div class="mb-3">
                        <label for="autres_partenaires" class="form-label">Autres partenaires du projet</label>
                        <input class="form-control" type="text" id="autres_partenaires" name="autres_partenaires" placeholder="Entrez les autres partenaires">
                    </div>

                    <div class="mb-3">
                        <label for="duree_totale" class="form-label">Durée totale du projet</label>
                        <input class="form-control" type="text" id="duree_totale" name="duree_totale" required placeholder="Entrez la durée totale">
                    </div>

                    <div class="mb-3">
                        <label for="cout_total" class="form-label">Coût total du projet</label>
                        <input class="form-control" type="number" step="0.01" id="cout_total" name="cout_total" required placeholder="Entrez le coût total">
                    </div>

                    <div class="mb-3">
                        <label for="participation_ayenah" class="form-label">Participation du Projet Ayenah</label>
                        <input class="form-control" type="number" step="0.01" id="participation_ayenah" name="participation_ayenah" placeholder="Entrez la participation Ayenah">
                    </div>

                    <div class="mb-3">
                        <label for="fichier_presentation" class="form-label">Fichier de Présentation</label>
                        <input class="form-control" type="file" id="fichier_presentation" name="fichier_presentation" accept=".pdf,.docx">
                    </div>

                    <div class="mb-3">
                        <label for="photo_logo" class="form-label">Photo ou logo d'illustration</label>
                        <input class="form-control" type="file" id="photo_logo" name="photo_logo" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100 waves-effect waves-light mt-4" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modification de Projet Modal -->
@foreach ($projets as $index => $projet)
<div id="update-project-{{ $projet->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-4 mb-4">
                    <div class="auth-logo">
                        <h2>Modification du Projet</h2>
                    </div>
                </div>
                <form class="px-3" action="{{ route('projets.update', $projet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Méthode HTTP pour la mise à jour -->

                    <div class="mb-3">
                        <label for="structure_porteuse" class="form-label">Structure porteuse de projet</label>
                        <input class="form-control" type="text" id="structure_porteuse" name="structure_porteuse" value="{{ old('structure_porteuse', $projet->structure_porteuse) }}" required placeholder="Entrez la structure porteuse">
                    </div>

                    <div class="mb-3">
                        <label for="interlocuteur_local" class="form-label">Interlocuteur Local</label>
                        <input class="form-control" type="text" id="interlocuteur_local" name="interlocuteur_local" value="{{ old('interlocuteur_local', $projet->interlocuteur_local) }}" required placeholder="Entrez le nom de l'interlocuteur local">
                    </div>

                    <div class="mb-3">
                        <label for="telephone_local" class="form-label">Téléphone Local</label>
                        <input class="form-control" type="tel" id="telephone_local" name="telephone_local" value="{{ old('telephone_local', $projet->telephone_local) }}" required placeholder="xx-xx-xx-xx-xx">
                    </div>

                    <div class="mb-3">
                        <label for="courriel_local" class="form-label">Courriel Local</label>
                        <input class="form-control" type="email" id="courriel_local" name="courriel_local" value="{{ old('courriel_local', $projet->courriel_local) }}" required placeholder="Entrez le courriel local">
                    </div>

                    <div class="mb-3">
                        <label for="partenaire_diaspora" class="form-label">Partenaire de la Diaspora</label>
                        <input class="form-control" type="text" id="partenaire_diaspora" name="partenaire_diaspora" value="{{ old('partenaire_diaspora', $projet->partenaire_diaspora) }}" required placeholder="Entrez le nom du partenaire de la diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="interlocuteur_diaspora" class="form-label">Interlocuteur Diaspora</label>
                        <input class="form-control" type="text" id="interlocuteur_diaspora" name="interlocuteur_diaspora" value="{{ old('interlocuteur_diaspora', $projet->interlocuteur_diaspora) }}" required placeholder="Entrez le nom de l'interlocuteur diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="telephone_diaspora" class="form-label">Téléphone Diaspora</label>
                        <input class="form-control" type="tel" id="telephone_diaspora" name="telephone_diaspora" value="{{ old('telephone_diaspora', $projet->telephone_diaspora) }}" required placeholder="xx-xx-xx-xx-xx">
                    </div>

                    <div class="mb-3">
                        <label for="courriel_diaspora" class="form-label">Courriel Diaspora</label>
                        <input class="form-control" type="email" id="courriel_diaspora" name="courriel_diaspora" value="{{ old('courriel_diaspora', $projet->courriel_diaspora) }}" required placeholder="Entrez le courriel diaspora">
                    </div>

                    <div class="mb-3">
                        <label for="intitule_projet" class="form-label">Intitulé du Projet</label>
                        <input class="form-control" type="text" id="intitule_projet" name="intitule_projet" value="{{ old('intitule_projet', $projet->intitule_projet) }}" required placeholder="Entrez l'intitulé du projet">
                    </div>

                    <div class="mb-3">
                        <label for="lieu_intervention" class="form-label">Lieu d'Intervention</label>
                        <input class="form-control" type="text" id="lieu_intervention" name="lieu_intervention" value="{{ old('lieu_intervention', $projet->lieu_intervention) }}" required placeholder="Entrez le lieu d'intervention">
                    </div>

                    <div class="mb-3">
                        <label for="thematique_projet" class="form-label">Thématique du Projet</label>
                        <input class="form-control" type="text" id="thematique_projet" name="thematique_projet" value="{{ old('thematique_projet', $projet->thematique_projet) }}" required placeholder="Entrez la thématique">
                    </div>

                    <div class="mb-3">
                        <label for="autres_partenaires" class="form-label">Autres partenaires du projet</label>
                        <input class="form-control" type="text" id="autres_partenaires" name="autres_partenaires" value="{{ old('autres_partenaires', $projet->autres_partenaires) }}" placeholder="Entrez les autres partenaires">
                    </div>

                    <div class="mb-3">
                        <label for="duree_totale" class="form-label">Durée totale du projet</label>
                        <input class="form-control" type="text" id="duree_totale" name="duree_totale" value="{{ old('duree_totale', $projet->duree_totale) }}" required placeholder="Entrez la durée totale">
                    </div>

                    <div class="mb-3">
                        <label for="cout_total" class="form-label">Coût total du projet</label>
                        <input class="form-control" type="number" step="0.01" id="cout_total" name="cout_total" value="{{ old('cout_total', $projet->cout_total) }}" required placeholder="Entrez le coût total">
                    </div>

                    <div class="mb-3">
                        <label for="participation_ayenah" class="form-label">Participation du Projet Ayenah</label>
                        <input class="form-control" type="number" step="0.01" id="participation_ayenah" name="participation_ayenah" value="{{ old('participation_ayenah', $projet->participation_ayenah) }}" placeholder="Entrez la participation Ayenah">
                    </div>

                    <div class="mb-3">
                        <label for="fichier_presentation" class="form-label">Fichier de Présentation</label>
                        <input class="form-control" type="file" id="fichier_presentation" name="fichier_presentation" accept=".pdf,.docx">
                        @if ($projet->fichier_presentation)
                        <p class="mt-1">Fichier actuel :
                            <a href="{{ asset('storage/' . $projet->fichier_presentation) }}" target="_blank">Voir le fichier</a>
                        </p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="photo_logo" class="form-label">Photo ou logo d'illustration</label>
                        <input class="form-control" type="file" id="photo_logo" name="photo_logo" accept="image/*">
                        @if ($projet->photo_logo)
                        <p class="mt-1">Image actuelle :
                            <img src="{{ asset('storage/' . $projet->photo_logo) }}" alt="Logo du projet" width="200" class="rounded shadow">
                        </p>
                        @endif
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


@endsection