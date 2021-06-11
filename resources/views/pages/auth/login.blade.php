@extends('layouts.admin.auth')

@section('content')

    <div class="auth-box row">
        <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('admin/assets/images/big/3.jpg')}});">
        </div>
        <div class="col-lg-5 col-md-7 bg-white">
            <div class="p-3">
                <div class="text-center">
                    <img src="{{asset('admin/assets/images/big/icon.png')}}" alt="wrapkit">
                </div>
                <h2 class="mt-3 text-center">Connexion</h2>
                <p class="text-center">Connecter pour acceder au Panel</p>

                @include('components.alert.main')

                <form class="mt-4" method="POST" action="{{route('login.process')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="uname">Nom d'utilisateur</label>
                                <input class="form-control" id="uname" type="text"
                                       placeholder="Votre nom d'utilisateur" name="username">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="pwd">Password</label>
                                <input class="form-control" id="pwd" type="password"
                                       placeholder="Votre mot de passe" name="password">
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Se connecter</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            Mot de passe oublie ? <a href="{{route('forgot_password')}}" class="text-danger">Procedure</a>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>

@endsection
