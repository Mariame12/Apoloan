<!doctype html>
<html lang="en">
<head<>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modification</title>
    </head>

    <body>


        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-danger">
                            <h3 class="card-title " id="horz-layout-card-center">Mise à jour des annonces </h3>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="table-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form action="{{ route('save.editannonce') }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <label for="">Code de l annonce:</label>
                                        <input type="number" name="idAnnonce" class="form-control">
                                        <label for="">Types:</label>
                                        <select name="type" class="form-control"><br>
                                            <option disabled="disabled" selected="selected">Types</option>
                                            <option value="EMPRUNT">Emprunt</option>
                                            <option value="PRET">Pret</option>
                                        </select>
                                        <label for="">Duree:</label>
                                        <select name="duree" class="form-control"><br>
                                            <option selected="selected">Duree</option>
                                            <option value="1">1 mois</option>
                                            <option value="2">2 mois</option>
                                            <option value="3">3 mois</option>
                                            <option value="4">4 mois</option>
                                            <option value="5">5 mois</option>
                                            <option value="6">6 mois</option>
                                            <option value="7">7 mois</option>
                                            <option value="8">8 mois</option>
                                            <option value="9">9 mois</option>
                                            <option value="10">10 mois</option>
                                            <option value="11">11 mois</option>
                                            <option value="12">12 mois</option>
                                        </select>
                                        <label for="">Modalite du paiement:</label>
                                        <select name="modalitePaiement" class="form-control"><br>
                                            <option selected="selected">Modalite du paiement</option>
                                            <option value=1>Chaque 1 mois</option>
                                            <option value=2>Chaque 2 mois</option>
                                            <option value=3>Chaque 3 mois</option>
                                        </select>

                                        <label for="">Montant:</label>
                                        <input type="number" name="montant" class="form-control"><br>


                                    </div 
                                    <div class="form-actions center">

                                    <button type="submit" class="btn btn-success">
                                        <i class="icon-note"></i> Enregistrer
                                    </button>
                            </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
-->
    </body>

</html>
