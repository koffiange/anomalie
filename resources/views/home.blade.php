@extends('layouts.app')


@section('content')

    <div class="row mb-3">
        <div class="col">
           <a href="/declarations" class="btn btn-primary">Nouvelle Anomalie</a>
        </div>
    </div>

    <div class="row">
        <section class="col col-sm-12">
            <div class="card">
                <h3 class="card-header">Vos Dernières Déclarations</h3>
                <div class="card-body">

                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Etat</th>
                            <th>Détails</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Non traité</td>
                            <td>
                               <a href="/anomalies/details" title="cliquez-ici">details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Traité</td>
                            <td>
                              <a href="/anomalies/details" title="cliquez-ici">details</a>
                            </td>
                        </tr>
                        <tr><th scope="row">3</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>En cours de traitement</td>
                            <td>
                               <a href="/anomalies/details" title="cliquez-ici">details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>En attente</td>
                            <td>
                               <a href="/anomalies/details" title="cliquez-ici">details</a>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Non traité</td>
                            <td>
                            <a href="/anomalies/details" title="cliquez-ici">details</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <div class="row mt-3 justify-content-end">
        <div class="col col-3">
            <a href="/anomalies/all" class="btn btn-info">Voir toutes les anomalies par état</a>
        </div>
    </div>

@endsection
