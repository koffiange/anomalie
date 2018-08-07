@extends('layouts.app')


@section('content')

<div class="row mb-3">
        <div class="col">
           <a href="/declarations" class="btn btn-primary">Nouvelle Anomalie</a>
        </div>
    </div>

   <div class="row">
        <section class="col col-sm-11">
    <div class="card">
        <h3 class="card-header">Liste Des Anomalies Traitées</h3>
        <div class="card-body">
            
             <table class="table mt-3 ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#anomalieModal">
                            Avis
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anomalieModal">
                           Avis
                        </button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>
                        <button type="button" class="btn btn-primary  " data-toggle="modal" data-target="#anomalieModal">
                           Avis
                        </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </section>
    </div>

    <!--  fenetre Modal -->
    <div class="modal fade" id="anomalieModal" tabindex="-1" role="dialog" aria-labelledby="utilisateurModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Traitement Déja Effectué</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="container-fluid">
       <div class="card-body">
            <h5 class="font-weight-bold">
        "Confirmer ou Infirmer Le Traitement De l'Anomalie N°.... a été bien traité"
             </h5>
            
             <div class="form-group">
                       <label for="Role">Avis</label>
                       <select class="custom-select">
                           <option selected>donnez votre avis</option>
                           <option value="1">Satisfait</option>
                           <option value="2">Pas Satisfait</option>
                         </select>
                   </div>

                   <div class="form-group">
                       <label for="description">Remarque</label>
                       <textarea class="form-control" id="description" rows="3"></textarea>
                       <small id="libelleHelp" class="form-text text-muted">
                           Expliquez de façon bref ce que vous constatez
                       </small>

                          <button type="button" class="btn btn-primary ">Small button</button>

                   </div>

           </div>
       </div>
   </section>
   </div>
</div>
@endsection