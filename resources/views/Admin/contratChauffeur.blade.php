@extends('Layouts/App')
@section('content')

<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <h6>Moustapha DIAGNE <span class="text-right ">Ville de Dakar</span> </h6>
        
      </div>
      <h4>KAAY GNOU DEMM</h4>
    </div>
    <div class="card-body">
        <div class="row">
          <h1>Objet : Contrat de travail - Chauffeur <br>
          <br></h1>
          <h6>
            Entre l'employeur <strong>[Nom de l'employeur]</strong>, domicilié à <strong>[Adresse de l'employeur]</strong>, représenté par <strong>[Nom du représentant]</strong>, en sa qualité de <strong>[Fonction du représentant]</strong>, d'une part,
          </h6>
        <h6>
            Et le salarié <strong>Moustapha DIAGNE</strong>, né le <strong>[Date de naissance]</strong> à <strong>[Lieu de naissance]</strong>, demeurant à <strong>[Adresse du salarié]</strong>, titulaire du permis de conduire n°<strong>[Numéro du permis]</strong>, d'autre part,
          </h6>
        <h6>
            Il a été convenu et arrêté ce qui suit :
          </h6>
        <h5>Article 1 - Fonction</h5>
        <h6>
            Le salarié est engagé en qualité de chauffeur.
          </h6>
        <h5>Article 2 - Durée</h5>
        <h6>
            Le présent contrat est conclu pour une durée de <input type="date" name="" id=""> à compter du [Date de début] et prendra fin le <input type="date" name="" id="">.
          </h6>
        <h5>Article 3 - Rémunération</h5>
        <h6>
            Le salarié percevra une rémunération mensuelle de [Montant de la rémunération].
          </h6>
        <h5>Article 4 - Obligations du salarié</h5>
        <h6>
            Le salarié s'engage à respecter les horaires de travail et les consignes de sécurité, à entretenir le véhicule qui lui est confié, etc.
          </h6>
        <h5>Article 5 - Obligations de l'employeur</h5>
        <h6>
            L'employeur s'engage à fournir au salarié un véhicule en bon état de fonctionnement, à lui verser sa rémunération mensuelle, etc.
          </h6>
        <h5>Article 6 - Résiliation</h5>
        <h6>
            En cas de résiliation du contrat, un préavis de [Durée du préavis] devra être respecté par l'une ou l'autre des parties.
          </h6>
        </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-success float-end ml-3">Approuver</button>
      <button class="btn btn-warning float-end">Annuler</button>
    </div>
  </div>
</div>

@endsection