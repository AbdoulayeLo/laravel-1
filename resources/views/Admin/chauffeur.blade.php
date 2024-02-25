@extends('Layouts/App')
@section('content')

<form class="form-inline my-4 ml-5">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputSearch" class="sr-only">Recherche</label>
    <input type="text" class="form-control" id="inputSearch" placeholder="Rechercher...">
  </div>
  <button type="submit" class="btn btn-warning mb-2">Recherche</button>
</form>
<div class="row col-md-12 ml-4">
<div class="card ml-4" style="width: 22rem; height:31rem;">
  <img src="{{asset('assets/images/avatar-4.jpg')}}" style="width: 100%;" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Marque</h5>
    <h5 class="card-title">Model</h5>
    <h5 class="card-title">Annee</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="{{ url('ContratChauffeur') }}" class="btn btn-primary float-end">Voir Plus</a>

  </div>
</div>
</div>
@endsection