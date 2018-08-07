@extends('layouts.app')


@section('content')
    <div class="container-fluid">

        <div class="row">
            <section class="col col-sm-3">
                <img src="{{ asset('images/cb.png') }}" width="200" height="200" alt="">
            </section>

            <section class="col col-sm-9">
                <h3>Description</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </section>
        </div>

        <div class="row">
            <section class="col col-sm-12">

                <div class="card">
                    <h3 class="card-header">Liste des anomalies</h3>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anomalieModal">
                            Déclarer une nouvelle anomalie
                        </button>

                        <table class="table mt-4">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Description</th>
                                <th>Ecran</th>
                                <th>Lien</th>
                                <th>Utilisateur</th>
                                <th>Detail</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Calculs Erronés</td>
                                <td>Le système ne charge pas toute les destination budgétaires.
                                    Il semble qu'il ne prenne pas en compte les dernières destinations crée</td>
                                <td>dashboard</td>
                                <td><a href="#"> 215.156.11.14/scob </a></td>
                                <td>@yao.constant</td>
                                <td><a href="#" class="btn btn-sm btn-info">Voir plus</a></td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Problème avec le chargement des fichiers</td>
                                <td>Lorsqu'on uploade des fichiers, ceci ne sont pas enregistré après le chargement.
                                    Il semble que l'application n'ai pas des droit d'écriture sur le serveur.
                                    Message affiché : permission denied on directory "scob/doc".
                                </td>
                                <td>Ajout de pièce jointe</td>
                                <td><a href="#"> 215.156.11.14/scob/projets/anotation </a></td>
                                <td>@yao.constant</td>
                                <td><a href="#" class="btn btn-sm btn-info">Voir plus</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

        <!-- Fenetre de création d'une anomalie -->

        <div class="modal fade" id="anomalieModal" tabindex="-1" role="dialog" aria-labelledby="anomalieModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouvelle anomalie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="libelle">Libelle</label>
                                <input type="text" class="form-control" id="libelle" aria-describedby="libelleHelp" placeholder="Entrez le libelle de l'anomalie">
                                <small id="libelleHelp" class="form-text text-muted">
                                    Le libelle de l'anomalie est doit être expressif (exemple : calcul erroné du budget)
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="ecran">Ecran</label>
                                <input type="text" class="form-control" id="ecran" aria-describedby="ecranHelp" placeholder="Entrez le nom de l'écran">
                                <small id="ecranHelp" class="form-text text-muted">
                                    Le nom de l'écran est le titre de la page ou est survenu l'anomalie.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="lien">Lien de la page</label>
                                <input type="text" class="form-control" id="lien" aria-describedby="lienHelp" placeholder="Entrez le lien de la page">
                                <small id="libelleHelp" class="form-text text-muted">
                                    Rendez vous à la page ou est survenu l'anomalie et copier le contenu de la barre d'adresse de votre navigateur puis coller le ici.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="description">Description du problème</label>
                                <textarea class="form-control" id="description" rows="3" placeholder="Expliquez de manière précise et consise ce que vous souhaitiez faire lorsque l'anomalie s'est déclarée"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="consequence">Conséquence</label>
                                <input type="text" class="form-control" id="consequence" aria-describedby="consequenceHelp" placeholder="Décrivez la conséquence de l'anomalie">
                                <small id="consequenceHelp" class="form-text text-muted">
                                    Expliquez les répercutions de ce bogg sur la suite de votre travail, s'il yen a.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="gravite">Gravité</label>
                                <select class="custom-select">
                                    <option selected>Indiquez le niveau de gravité</option>
                                    <option value="1">faible</option>
                                    <option value="2">Intermédiaire</option>
                                    <option value="3">Blocante</option>
                                </select>
                            </div>



                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection