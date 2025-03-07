@extends('layout/template-admin')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-10">
                <h4 class="page-title mb-0">Messages Reçus </h4>
                
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
                                <th>Nom & Prénoms</th>
                                <th>Email</th>
                                <th>Téléphone </th>
                                <th>Date</th>
                                <th>
                                    Message
                                </th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $index => $message)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$message->nom}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->telephone}}</td>
                                <td>{{$message->created_at}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#{{$message->email}}">
                                        <i class="fa fa-file" aria-hidden="true"></i>
                                        Lire le Messsage
                                    </button>
                                </td>
                                <td>
                                <span class="badge {{ $message->status === 1 ? 'bg-success' : 'bg-danger' }}">
                                        {{ $message->status === 1 ? 'Déjà répondu' : 'Non Lu' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="mailto:{{$message->email}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </a>
                                    <!-- <a href="" class="btn btn-danger btn-sm" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a> -->
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

    <!-- modal content -->
     @foreach ($messages as $message)
    <div class="modal fade" id="{{$message->email}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-4">
                        <p class="text-muted pt-0 p-4">
                            {{$message->message}}
                        </p>
                    </div>
                </div><!-- /.modal-content -->
                <form action="{{route('messages.update', $message->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-footer bg-secondary">
                        <p class="text-white">
                            Confirmation de lecture
                            <input type="hidden" name="status" value="0">
                            <input type="checkbox" data-size="small" data-plugin="switchery" data-color="#1bb99a" id="statusSwitch" name="status"
                            value="1" @checked((isset($message) ? $message->status : old('status')) == 1)/>
                        </p>
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    @endforeach

</div>
@endsection