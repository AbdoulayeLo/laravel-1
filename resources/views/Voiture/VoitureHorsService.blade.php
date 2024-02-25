@extends('Layouts/App')
@section('content')
<!-- <button class="btn btn-success offset-11">Ajouter</button> -->
<!-- <div class="bod col-md-12 ">
<div class="card ml-2">
    <div class="imgbx"></div>
    <div class="content">
        <span class="price"></span>
    </div>
</div>
<div class="card ml-5">
    <img src="{{asset('assets/images/avatar-4.jpg')}}" class="imgbx">   
</img>
    <div class="content">
        <span class="price">
            <h6>100000</h6>
        </span>
    </div>
</div>
<div class="card ml-5">
    <div class="imgbx"></div>
    <div class="content">
        <span class="price"></span>
    </div>
</div>
</div> -->
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
    <a href="#" class="btn btn-primary float-end">Voir Plus</a>

  </div>
</div>
<div class="card ml-4" style="width: 22rem; height:31rem;">
  <img src="{{asset('assets/images/avatar-4.jpg')}}" style="width: 100%;" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Marque</h5>
    <h5 class="card-title">Model</h5>
    <h5 class="card-title">Annee</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="#" class="btn btn-primary float-end">Voir Plus</a>

  </div>
</div>
<div class="card ml-4" style="width: 22rem; height:31rem;">
  <img src="{{asset('assets/images/avatar-4.jpg')}}" style="width: 100%;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Marque</h5>
    <h5 class="card-title">Model</h5>
    <h5 class="card-title">Annee</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <!-- <div class="card-body">
        <h6>Model</h6>
        <h6>Annee</h6>
    </div> -->
    
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Voir Plus
</button>


  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="{{asset('assets/images/avatar-4.jpg')}}" class="img-fluid w-50 h-50 custom-image" alt="...">
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, at officia ullam, repellendus officiis sit exercitationem voluptate perferendis quia soluta quas minima quod odio voluptatum iste deleniti corrupti eligendi hic.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <button type="button" class="btn btn-primary">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
      </div>
    </div>
  </div>
</div>
@endsection