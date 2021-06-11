<div class="auth-box row text-center">
    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('admin/assets/images/big/3.jpg')}});">
    </div>
    <div class="col-lg-5 col-md-7 bg-white">
        <div class="p-3">
            <img src="{{asset('admin/assets/images/big/icon.png')}}" alt="wrapkit">
            <h2 class="mt-3 text-center">Mot de passe oublie</h2>
            @include('components.alert.main')
            <form class="mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Votre nom d'utilisateur">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        J'ai mon mot de passe ? <a href="{{route('login')}}" class="text-danger">Se Connecter</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
