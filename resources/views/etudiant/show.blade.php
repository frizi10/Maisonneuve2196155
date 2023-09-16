@extends('layouts.layout')
@section('title', 'Ajoutre un article')
@section('content')

        <div class="row">
            <div class="col-8 text-center mx-auto pt- mb-3  ">
                <h2 class="display-one">
                    Coordonnées de l'étudiant {{$etudiant->nom}}
                </h2>
           
         </div>
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-8">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Adresse</th>
                      <th scope="col">Ville</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Date de naissance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    
                      <td>{{$etudiant->nom}}</td>
                      <td>{{$etudiant->adresse}}</td>
                      <td> {{$etudiant->studentHasCity->nom}}</td>
                      <td>{{$etudiant->phone}}</td>
                      <td>{{$etudiant->email}}</td>
                      <td>{{$etudiant->date_de_naissance}}</td>
                    </tr> 
                  </tbody>
              </table>
             </div>
          </div>
        </div> 
        
        @endsection
       
        