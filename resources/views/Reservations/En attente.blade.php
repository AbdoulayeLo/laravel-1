@extends('Layouts/App')
@section('content')
<div class="row col-md-12 ml-4">

<style>
  .pending-validation {
    position: absolute;
    top: 45px;
    right: -20px;
    background-color: rgba(255, 255, 0, 0.7); /* Jaune avec 50% d'opacité */
    color: black;
    padding: 7px;
    border-radius: 5px;
    z-index: 1; /* Assure que le tampon est au-dessus de l'image */
    transform: rotate(45deg); /* Rotation de 45 degrés dans le sens anti-horaire */
    transform-origin: top right; /* Point d'origine de la rotation */
  }
</style>

<div class="card ml-4" style="width: 22rem; height:31rem; position: relative;">
  <span class="pending-validation">En attente</span>
  <img src="{{asset('assets/images/avatar-4.jpg')}}" style="width: 100%;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Marque</h5>
    <h5 class="card-title">Model</h5>
    <h5 class="card-title">Annee</h5>    
    <button type="button" class="btn btn-warning text-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Suivi Reservation
    </button>
  </div>
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
        <button type="button" class="btn btn-success">Valider</button>
      </div>
    </div>
  </div>
</div>
@endsection('content')