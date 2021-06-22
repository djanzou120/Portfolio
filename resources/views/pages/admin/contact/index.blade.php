@extends('layouts.admin.app')

@section('content')
    <!-- order table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des contacts enregistres sur la plateforme</h4>
                    <div class="table-responsive">
                        <table id="default_order" class="table table-striped table-bordered display no-wrap"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Cree le</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $key => $contact)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->created_at}}</td>
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
