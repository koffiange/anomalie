@extends('layouts.app')


@section('content')


    <div class="container-fluid">

        <div class="row">
            <section class="col col-sm-3">
                <img src="{{ asset('images/cb.png') }}" width="200" height="200" alt="">
            </section>

            <section class="col col-sm-6">
                <p>
                <span class="font-weight-bold">
                        Gestion de Réferentiel Budgetaire
                        </span>
                    </p>
               
                
                    <p>
                    <span class="font-weight-bold">
                        Description :</br>
                        </span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                         sed do eiusmod tempor incididunt ut<br>
                        labore et dolore magna aliqua. 
                        </p>
                
                       <p>
                       <span class="font-weight-bold">
                        Développeur :
                        </span>
                    </p>
               </section>

        <div class="col col-sm-2">
           <button type="button"class="btn btn-primary">Imprimer</button>
        </div>

        </div>

        <div class="row">
        <section class="col col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-left">
                        Anomalie N°:03072018-02
                    </h3>
                </div>
            <div class="card-body">
                 <h4 class="font-weight-bold">PROBLEME AVEC L'IMPORTATION DES NATURES ECONOMIQUES</h4>
                 
                 <p class="text-right">
                    Etat:Non Traité<br>
                    Date Publication:03/07/2018<br>
                    Date de prise en charge:03/07/2018<br>
                    Correcteur:<br>
                    Nombre de constation:3
                </p>
                
                <p>
                  <span class="font weight-bold">
                     Description de l'Anomalie:<br>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                  sed do eiusmod tempor incididunt ut<br>
                  labore et dolore magna aliqua. 
                </p> 

                 <p>
                  <span class="font weight-bold">
                     Conséquence:<br>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                  sed do eiusmod tempor incididunt ut<br>
                  labore et dolore magna aliqua. 
                </p> 

                <p>
                  <span class="font weight-bold">
                     Gravité:<br>
                  </span>
                 </p> 

                </div>
            </div>
        </section>
        </div>
    </div>


    @endsection