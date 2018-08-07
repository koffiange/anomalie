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
                <h3 class="card-header">Toutes Vos Déclarations</h3>
                <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="btn btn-lg text-danger" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                <strong>
                                    Non Traité
                                </strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-lg text-warning" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <strong>
                                    En Cours
                                </strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-lg text-success" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <strong>
                                    Traité
                                </strong>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="non traité-tab">
                            <h3 class="mt-3 text-sm-center">Liste des anomalie non traitées.</h3>
                            <table class="table mt-3">
                                <thead>
                                <tr>
                                    <th class="text-danger">#</th>
                                    <th class="text-danger">Libellé</th>
                                    <th class="text-danger">Description</th>
                                    <th class="text-danger">Date</th>
                                    <th class="text-danger">Etat</th>
                                    <th class="text-danger">Détails</th>
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
                                    <td>En cours de Traitement</td>
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
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="en cour-tab">
                            <h3 class="mt-3 text-sm-center">Liste des anomalies en cours.</h3>
                            <table class="table mt-3">
                                <thead>
                                <tr>
                                    <th class="text-warning">#</th>
                                    <th class="text-warning">Libellé</th>
                                    <th class="text-warning">Description</th>
                                    <th class="text-warning">Date</th>
                                    <th class="text-warning">Etat</th>
                                    <th class="text-warning">Détails</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>Non traité</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>Traité</td>
                                </tr>
                                <tr><th scope="row">3</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>En cours de traitement</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>En attente</td>
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="traité-tab">
                            <h3 class="mt-3 text-sm-center">Liste des anomalies traitées.</h3>
                            <table class="table mt-3">
                                <thead>
                                <tr>
                                    <th class="text-success">#</th>
                                    <th class="text-success">Libellé</th>
                                    <th class="text-success">Description</th>
                                    <th class="text-success">Date</th>
                                    <th class="text-success">Etat</th>
                                    <th class="text-success">Détails</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>Non traité</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>Traité</td>
                                </tr>
                                <tr><th scope="row">3</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>En cours de traitement</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>En attente</td>
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    @endsection