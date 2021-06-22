@extends('layouts.admin.app')

@section('content')
    <!-- order table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('project.create')}}" class="btn btn-primary btn-rounded">Ajouter un projet</a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Liste des projets enregistres sur la plateforme</h4>
                    <div class="table-responsive">
                        <table id="default_order" class="table table-striped table-bordered display no-wrap"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Technologie</th>
                                <th>Compagnie</th>
                                <th>Annee</th>
                                <th>Cree le</th>
                                <th>--</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->technology}}</td>
                                    <td>{{$project->company}}</td>
                                    <td>{{$project->moment}}</td>
                                    <td>{{$project->created_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
@endsection
