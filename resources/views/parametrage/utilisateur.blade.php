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
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Marie Yao</td>
                        <td>marielaureyao2016@gmail.com</td>
                        <td>Ministère de l'économie et des finances</td>
                        <td>DGBF</td>
                        <td>Testeur</td>
                        <td>Active</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-sm btn-secondary">Modifier</button>
                                <button type="button" class="btn btn-sm  btn-secondary">Supprimer</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Marie Yao</td>
                        <td>marielaureyao2016@gmail.com</td>
                        <td>Ministère de l'économie et des finances</td>
                        <td>DGBF</td>
                        <td>Testeur</td>
                        <td>Active</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-sm btn-secondary">Modifier</button>
                                <button type="button" class="btn btn-sm  btn-secondary">Supprimer</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    </div>

@endsection
