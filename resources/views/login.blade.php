@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 15vh">
    <div class="row align-content-center">
        <div class="col col-sm-7"  style="padding-left: 40px; padding-right: 20px">
            <h1 style="color: #563d7c; font-size: 70px;">ANOMALIE</h1>
            <h2 style="color: #c82333">Bienvenue sur le système de gestion des anomalies applicatives de la DGBF</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>
        </div>
        <div class="offset-1 col-sm-4 bg-light">
            <h3 class="text-center">Connectez-vous</h3>
            <hr>
            <form method="POST" action="{{ route('login') }}" class="ml-5">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-12 col-form-label text-md-left">Addresse E-Mail </label>

                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label text-md-left">Mot de Passe</label>

                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Connexion
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
