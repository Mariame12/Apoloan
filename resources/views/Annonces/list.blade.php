
@extends('Presentation.base')
@section('content')
    <section style="margin-top: 7rem;"class="w3-container ">
        <div class="new-arrived-products  " id="new-arrivals">
            @foreach ($response['list'] as $as)
                <div style="height: 350px;width: 29%;color: gray;"
                    class=" w3-container  w3-card w3-round-xlarge w3-center new-product  s12 m3 l3">

                    <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">
                        <div class="card-body">
                            <h3 class="card-title">Annonce</h3>
                                <p class="card-text">
                                <h6>Identifiant:{{ $as['id'] }}</h6>
                                <h6>Type:{{ $as['type'] }}</h6>
                                <h6>Duree du credit :{{ $as['duree'] }} </h6>
                                <h6>Montant:{{ $as['montant'] }}</h6>
                                <h6>Modalite du paiement :{{ $as['modalitePaiement'] }}</h6>
                                <!-- <h6>code :{{ $as['codeUser'] }}</h6> -->
                                </p>
                                <a href="{{ route('creerproposit') }}" class="btn btn-primary">Faire une proposition</a><br>
                                <a href="{{ route('editannonce') }}" class="btn btn-primary">Modifier l annonce</a>
                                <a href="{{ route('supprimerannonce') }}" class="btn btn-primary">Supprimer l annonce</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
       <h1> <a href="{{ route('creer') }}" class="btn btn-primary">Créer une annonce</a></h1>
    </section>
@endsection
