@extends('Layouts/App')
@section('content')
<button class="btn btn-success offset-11" data-bs-toggle="modal" data-bs-target="#exampleModal2">Ajouter</button>
<!-- <form class="form-inline my-4 ml-5">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputSearch" class="sr-only">Recherche</label>
    <input type="text" class="form-control" id="inputSearch" placeholder="Rechercher...">
  </div>
  <button type="submit" class="btn btn-warning mb-2">Recherche</button>
</form> -->

<button type="button" class="card mb-3 ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <!-- <div class="card mb-3 ml-5" style="max-width: 560px;"> -->
  <div class="row no-gutters">
    
    <div class="col-md-2 ml-3 mt-1">
      <h1>S N</h1>
      <img style="width: 170px; height: 190px;" src="{{asset('assets/images/avatar-4.jpg')}}" alt="...">
      <h6 class="mt-3 text-center">Signature</h6>
    </div>
    <div class="col-md-8 ml-5">
      <div class="card-body ml-2">
        <h6 class="card-title text-secondary text-center ">REPUBLIQUE DU SENEGAL</h6>
        <h6 class="card-title text-secondary text-center">PERMIS DE CONDUIRE</h6>
        <ol class="text-left">
          <li>Nom</li>
          <h6>DIAGNE</h6>

          <li>Prenom</li>
          <h6>MOUSTAPHA</h6>

          <li>Date et Lieu de naissance</li>
          <h6>18/11/2002 Thies</h6>
          
          <li> Date d'emission <span class="font-weight-bold ml-2"> 02/12/2021</span></li>
          <li> Date d'expiration <span class="font-weight-bold ml-2">02/12/2031</span></li>
          <li> Delivration par <span class="font-weight-bold ml-2">MITTD</span></li>
          <li> N Permis <span class="font-weight-bold ml-2">10812473</span></li>
          <li> Categorie <span class="font-weight-bold ml-2">A & B</span></li>
        </ol>
      </div>
    </div>
  </div>
<!-- </div> -->
</button>

<div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row no-gutters">
    
    <div class="col-md-2 ml-3 mt-1">
      <h1>S N</h1>
      <img style="width: 170px; height: 190px;" src="{{asset('assets/images/avatar-4.jpg')}}" alt="...">
      <h6 class="mt-3 text-center">Signature</h6>
    </div>
    <div class="col-md-8 ml-5">
      <div class="card-body ml-2">
        <h6 class="card-title text-secondary text-center ">REPUBLIQUE DU SENEGAL</h6>
        <h6 class="card-title text-secondary text-center">PERMIS DE CONDUIRE</h6>
        <ol class="text-left">
          <li>Nom</li>
          <h6>DIAGNE</h6>

          <li>Prenom</li>
          <h6>MOUSTAPHA</h6>

          <li>Date et Lieu de naissance</li>
          <h6>18/11/2002 Thies</h6>
          
          <li> Date d'emission <span class="font-weight-bold ml-2"> 02/12/2021</span></li>
          <li> Date d'expiration <span class="font-weight-bold ml-2">02/12/2031</span></li>
          <li> Delivration par <span class="font-weight-bold ml-2">MITTD</span></li>
          <li> N Permis <span class="font-weight-bold ml-2">10812473</span></li>
          <li> Categorie <span class="font-weight-bold ml-2">A & B</span></li>
        </ol>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <!-- <button type="button" class="btn btn-primary">Modifier</button> -->
        <button type="button" class="btn btn-danger">Supprimer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade modal-dialog-scrollable" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout Chauffeur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row no-gutters">
    
    <div class="col-md-2 ml-3 mt-1">
      <h1>S N</h1>
      <div class="upload">
      <img src="{{asset('assets/images/noprofil.jpg')}}" width = 100 height = 100 alt="">
      <div class="round">
        <input type="file">
        <i class = "fa fa-camera" style = "color: #fff;"></i>
      </div>
    </div>
      <h6 class="mt-3 text-center">Signature</h6>
    </div>
    <div class="col-md-8 ml-5">
      <div class="card-body ml-2">
        <h6 class="card-title text-secondary text-center ">REPUBLIQUE DU SENEGAL</h6>
        <h6 class="card-title text-secondary text-center">PERMIS DE CONDUIRE</h6>
        <ol class="text-left">
            <form action="">
          <li>Nom</li>
          <input type="text" class="form-control">

          <li>Prenom</li>
          <input type="text" class="form-control">

          <li>Date et Lieu de naissance</li>
          <input type="text" class="form-control">
          
          <li> Date d'emission <span class="font-weight-bold ml-2"><input type="date" class="form-control"></span></li>
          <li> Date d'expiration <span class="font-weight-bold ml-2"><input type="date" class="form-control"></span></li>
          <li> Delivration par <span class="font-weight-bold ml-2"><input type="text" class="form-control"></span></li>
          <li> N Permis <span class="font-weight-bold ml-2"><input type="text" class="form-control"></span></li>
          <li> Categorie <span class="font-weight-bold ml-2">
            <select name="" id="" class="form-control">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="B">C</option>
                <option value="B">D</option>
            </select>
          </span>
          </li>
          </form>
        </ol>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <!-- <button type="button" class="btn btn-primary">Modifier</button> -->
        <button type="button" class="btn btn-success">Ajouter</button>
      </div>
    </div>
  </div>
</div>

@endsection