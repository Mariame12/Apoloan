{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Post List</title>
</head>
<body>
    <h1 float:center>Liste des annonces</h1>
      <div>
      
        <div class="card" style="width: 18rem;">
       <!--  @foreach ($response['list'] as $as)-->
            <div class="card-body">
              <h3 class="card-title">Postes</h5>
              <p class="card-text">
                <h6>Type:{{$as['id']}}</h6>
                 <h6>Duree du credit :{{$as['duree']}} </h6>
                <h6>Montant:{{$as['montant']}}</h6>
                <h6>Modalite  du paiement :{{$as['modalitePaiement']}}</h6>
              </p>
              <a href="#" class="btn btn-primary">Plus d info</a>
            </div>
        <!--  @endforeach-->
        </div>
    </div>
    <a href="{{route('creer')}}"><h1>Créer un post</h1></a>
      {{-- Style --}}

<!--<style>

      body{ background-color: #ffccff;}

      </style>-->
</body>

</html> --}}

@extends('Presentation/base')
@section('content')
    <section  style="margin-top: 7rem;"class="w3-container ">
        <div class="new-arrived-products  " id="new-arrivals">
              @foreach ($response['list'] as $as)
            
            <div style="height: 350px;width: 29%;color: gray;" 
            class=" w3-container  w3-card w3-round-xlarge w3-center new-product  s12 m3 l3">

                <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">
                  <div class="card-body">
                    <h3 class="card-title">Postes</h5>
                    <p class="card-text">
                      <h6>Type:{{$as['type']}}</h6>
                       <h6>Duree du credit :{{$as['duree']}} </h6>
                      <h6>Montant:{{$as['montant']}}</h6>
                      <h6>Modalite  du paiement :{{$as['modalitePaiement']}}</h6>
                      <h6>code :{{$as['codeUser']}}</h6>
                    </p>
                    <a href="#" class="btn btn-primary">Plus d info</a>
                  </div>
                </div>    
            </div>
               @endforeach


        </div>


    </section>
@endsection
