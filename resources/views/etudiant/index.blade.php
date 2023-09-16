@extends('layouts.layout')
@section('title', " Liste des étudiants")
@section('content')
<div class="container">
    <h1 class="text-center mb-5">Liste des etudiants</h1> 
    <div class="col-md-4">
      <a href="{{route('etudiant.create')}}" class='btn btn-primary'>Ajouter un étudiant</a>
  </div>
    <div class="col-md-8 mx-auto ">
        <table class="table">
         
            <tbody>
              @foreach ($etudiants as $etudiant)     
              <tr>   
                <td><strong>{{$etudiant->nom}} </strong> </td>
                <td><a href="{{route('etudiant.show', $etudiant->id)}}" class='btn btn-primary '>Afficher</a> </td>
                <td><a href="{{route('etudiant.edit', $etudiant->id)}}" class='btn btn-secondary'>Modifier</a> </td>
                <td> <form action="{{route('etudiant.delete', $etudiant->id)}}" method="post">
                  @csrf
                  @method('delete')
                  <input type="submit" value="effacer" class="btn btn-danger ">
                  
              </form></td>
                
               
              </tr>
              @endforeach   
            </tbody>
          </table>
        
  
    </ul>
</div>
@endsection

