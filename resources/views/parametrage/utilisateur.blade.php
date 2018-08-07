@extends('layouts.parametrage.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/parametrage">Paramétrage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gestion Des Utilisateurs</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <section class="col col-sm-12">
    <div class="card">
        <h3 class="card-header">Liste Des Utilisateurs</h3>
        <div class="card-body">
            <a href="{{ route('register') }}" class="btn btn-primary">
                Ajouter Un Utilisateur
            </a>

            <table class="table mt-3 ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom et Prenoms</th>
                        <th>Email</th>
                        <th>Ministère</th>
                        <th>Direction</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->nom }} {{ $user->prenoms }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->ministere }}</td>
                            <td>{{ $user->direction }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-secondary">Modifier</button>
                                    <button type="button" class="btn btn-sm  btn-secondary">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>
    </div>

@endsection
