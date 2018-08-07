@extends('layouts.app')


@section('content')


    <div class="row">
    <section class="col col-sm-12">

        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#Etape-1">
                        <strong>
                        Etape 1<br />
                            <small>
                                Choix de l'application
                            </small>
                        </strong>
                    </a>
                </li>
                <li><a href="#Etape-2">
                        <strong>
                        Etape 2<br />
                            <small>
                                Vérification
                            </small>
                        </strong>
                    </a>
                </li>

                <li><a href="#Etape-3">
                        Etape 3<br />
                        <small>
                            Remplissez le Formulaire
                        </small>
                    </a>
                </li>
            </ul>

            <div>
                <div id="Etape-1" class="">
                    <h3 class="border-bottom border-gray pb-2">
                        <p>
                            <span class="font-weight-bold">
                                Etape 1 :
                            </span>
                            Choisissez Une Application
                        </p>

                    </h3>
                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Description</th>
                            <th>Correcteur</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1"></label>
                                </div>
                            </th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2"></label>
                                </div>
                            </th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                        </tr>
                        <tr><th scope="row">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3"></label>
                                </div>
                            </th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4"></label>
                                </div>
                            </th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="Etape-2" class="">
                    <h4 class="border-bottom border-gray pb-2">
                        <span class="font-weight-bold">
                                Etape 2 :
                        </span>
                        <small>
                            Vérifier que l'anomalie que vous déésirez déclarer n'a pas été déja constatée.</br>
                            <span class="help-block">
                                Si oui, cliquez sur le bouton <em>
                                    <b>Nouvelle Constatation</b>
                                </em>  Si non cliquez sur le
                                bouton <em>
                                    <b>Suivant</b>
                                </em>
                                </span>
                        </small>
                    </h4>

                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>

                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Description</th>
                            <th>Auteur</th>
                            <th>Etat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Traité</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>En Cour</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Nouvelle Constatation</button>
                            </td>
                        </tr>
                        <tr><th scope="row">3</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Non Traité</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Nouvelle Constatation</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>lorem ipsum</td>
                            <td>Traité</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="Etape-3" class="">

                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Libelle</label>
                            <input type="Prenom" class="form-control" id="exampleFormControlInput1" placeholder="libellé">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Conséquences</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="conséquence">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date de constatation</label>
                            <input type="anomalie" class="form-control" id="exampleFormControlInput1" placeholder="Anomalie">
                        </div>
                        <div class="form-group">
                            <label for="Role">Gravité</label>
                            <select class="custom-select">
                                <option selected>Indiquez La Gravité</option>
                                <option value="1">Faible</option>
                                <option value="2">Intermédiaire</option>
                                <option value="3">Blocante</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description de l'anomalie</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Importation de capture d'ecran
                            </label>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>
</div>


@endsection