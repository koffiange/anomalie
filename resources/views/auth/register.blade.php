@extends('.layouts.parametrage.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/parametrage">Paramétrage</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/parametrage/utilisateurs">Gestion Des Utilisateurs</a></li>
            <li class="breadcrumb-item active" aria-current="page">Création d'un utilisateur</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <section class="col col-sm-12">
            <div class="card">
                <h3 class="card-header">Créer un nouvel utilisateurs</h3>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">

                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control {{ $errors->has('nom') ? ' is-invalid' : 'invalid'}}"
                                       id="nom"
                                       value="{{ old('nom') }}"
                                       placeholder="Votre nom ici."
                                       autofocus>
                                @if($errors->has('nom'))
                                    <span id="nomMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="prenoms">Prenoms</label>
                                <input type="text" name="prenoms" class="form-control {{ $errors->has('prenoms') ? ' is-invalid' : 'invalid'}}"
                                       id="prenoms"
                                       placeholder="Votre prenom ici.">
                                @if($errors->has('nom'))
                                    <span id="prenomsMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('prenoms') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : 'invalid'}}"
                                       id="email" placeholder="Votre email ici.">
                                @if($errors->has('email'))
                                    <span id="emailMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="direction">Direction</label>
                                <input type="text" name="direction" class="form-control {{ $errors->has('direction') ? ' is-invalid' : 'invalid'}}"
                                       id="direction"
                                       placeholder="Votre direction ici.">
                                @if($errors->has('direction'))
                                    <span id="directionMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="ministere">Ministère</label>
                                <input type="text" name="ministere" class="form-control {{ $errors->has('ministere') ? ' is-invalid' : 'invalid'}}"
                                       id="ministere" placeholder="Votre ministère ici.">
                                @if($errors->has('ministere'))
                                    <span id="ministereMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('ministere') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="custom-select {{ $errors->has('role') ? ' is-invalid' : 'invalid'}}">
                                    <option selected>Indiquez le Role</option>
                                    <option value="testeur">Testeur</option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="correcteur">Correcteur</option>
                                </select>
                                @if($errors->has('role'))
                                    <span id="roleMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : 'invalid'}}"
                                       id="lien" placeholder="Votre mot de passe ici.">
                                @if($errors->has('password'))
                                    <span id="passwordMessageError" class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirmer le mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       id="password_confirmation" placeholder="Confirmer le mot de passe">
                            </div>

                            <div class="row mt-5 justify-content-end">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                                </div>
                                <div class="col-sm-2">
                                    <a href="/parametrage/utilisateurs" class="btn btn-secondary btn-block" data-dismiss="modal">Annuler</a>
                                </div>
                            </div>


                    </form>

                </div>
            </div>
        </section>
    </div>

@endsection