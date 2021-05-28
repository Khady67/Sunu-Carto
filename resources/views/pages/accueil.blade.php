@extends('app')

@section('content')

@section('title', 'Accueil - Autorité de Régulation des Télécommunications et des Postes')


<form class="form-inline justify-content-center" action="#" method="POST">
    
         <input id="search" type="text" class="form-control col-sm-6" name="search"  placeholder= "Rechercher les stations dans votre zone"/>
        
        <button id="search_btn" class="btn btn-success" disabled="true" type="submit">Rechercher</button>
        
</form>

@endsection
 

