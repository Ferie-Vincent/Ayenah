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
                            <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marie</td>
                                <td>yaomarie@gmail.com</td>
                                <td>01-02-30-04</td>
                                <td>Enseignant</td>
                                <td>Abidjan</td>
                                <td>4.000 €</td>
                                <td>Vente d'huile de coco</td>
                                <td>
                                    <ul>
                                        <li>Réalisation d'une campagne de promotion pour la vente d'huile de coco</li>
                                        <li>Création d'une page Facebook pour la promotion de la vente d'huile de coco</li>
                                        <li>Création d'une page Instagram pour la promotion de la vente d'huile de coco</li>
                                    </ul>
                                </td>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
@endsection