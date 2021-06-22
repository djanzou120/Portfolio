@extends('layouts.admin.app')
{{--{{dd($errors)}}--}}
@section('content')
    <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <div class="card">
            <div class="card-body">
                <form action="{{route('project.store')}}" class="mt-4" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nom du projet</label>
                        <input type="text" class="form-control" value="" name="name" id="name" maxlength="120" required>
                    </div>
                    <div class="form-group">
                        <label for="technology">Technologie utilisee</label>
                        <input type="text" class="form-control" value="" name="technology" id="technology" maxlength="40" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Compagnie</label>
                        <input type="text" class="form-control" value="" name="company" id="company" maxlength="120" required>
                    </div>
                    <div class="form-group">
                        <label for="year"></label>
                        <input type="month" class="form-control" value="2021-08" name="moment" id="year" required>
                    </div>
                    <fieldset class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" required>
                    </fieldset>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-warning">Enregistrer</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
