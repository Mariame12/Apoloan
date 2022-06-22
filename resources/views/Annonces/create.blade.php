<<<<<<< HEAD

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer Annonce</title>
</head>
<body>
 <div class="main">  	

        <div class="signup">
            <form method="POST" action="{{ route('save.create') }}">
                @csrf
                <label >Creation de l'annonce</label>
                <select name="type">
                    <option disabled="disabled" selected="selected">Types</option>
                    <option value="EMPRUNT">Emprunt</option>
                    <option value="PRET">Pret</option>
                </select>
                <select name="duree">
                    <option selected="selected">"Duree"</option>
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
                <input class="input--style-3 js-datepicker" type="number" placeholder="Montant" name="montant">
                <select name="modalitePaiement">
                    <option >"Modalite du paiement"</option>
                    <option value=1>Chaque 1 mois</option>
                    <option value=2>Chaque 2 mois</option>
                    <option value=3>Chaque 3 mois</option>
                </select>

                <button type="submit">Valider l annonce</button>
            </form>
            </div>

    </div>


    {{-- STYLE --}}

    <style>
        body{
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Jost', sans-serif;
      background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
  }
  .main{
      width: 350px;
      background: red;
      overflow: hidden;
      background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
      border-radius: 10px;
      box-shadow: 5px 20px 50px #000;
  }

  .signup{
      position: relative;
      width:100%;
      height: 100%;
  }
  label{
      color: #fff;
      font-size: 2.3em;
      justify-content: center;
      display: flex;
      margin: 60px;
      font-weight: bold;
      cursor: pointer;
      transition: .5s ease-in-out;
  }
  input{
      width: 60%;
      height: 20px;
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 20px auto;
      padding: 10px;
      border: none;
      outline: none;
      border-radius: 5px;
  }
  select{
    width: 60%;
      height: 20px;
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 20px auto;
      padding: 10px;
      color: #000;
      border-radius: 5px;

  }
  button{
      width: 60%;
      height: 40px;
      margin: 10px auto;
      justify-content: center;
      display: block;
      color: #fff;
      background: #573b8a;
      font-size: 1em;
      font-weight: bold;
      margin-top: 20px;
      outline: none;
      border: none;
      border-radius: 5px;
      transition: .2s ease-in;
      cursor: pointer;
  }
  button:hover{
      background: #6d44b8;
  }

    </style>
    </body>
    </html>
 
=======
<html>

<head>
    <title>Page creer annonce</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/LOGIN.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header" id="top">
        <div class="w3-top">
            <div class="w3-bar  w3-card header">

                <span style="COLOR: WHITE;MARGIN-LEFT:37REM" class=" logo  w3-padding-large ">APOLOAN</span>

            </div>
        </div>



    </header>
    <div style="    min-height: 750px;
    " class="login-wrap">
        <div class="az">
            <div class="login-html">
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label
                    style="    margin: -67px 51px 1px 108px;
                " for="tab-2"
                    class="tab w3-btn w3-round-xlarge ">Creation d une annonce</label>
                <div class="login-form">

                    <form method="POST" action="{{ route('save.create') }}">
                        @csrf

                        <div class="sign-up-htm">
                        @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="table-danger">{{ $error }}</div>
                                @endforeach
                        @endif
                            
                            <div class="group">
                                <label class="label">Type</label>
                                <select name="type" class="input">
                                    <option disabled="disabled" selected="selected">Types</option>
                                    <option value="EMPRUNT">Emprunt</option>
                                    <option value="PRET">Pret</option>
                                </select>
                            </div>
                            <div class="group">
                                <label class="label"> Durée</label>
                                <select name="duree" class="input">
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
                            </div>
                            <div class="group">
                                <label class="label">Montant</label>
                                <input type="number" name="montant" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Modalite du paiement</label>
                                <select name="modalitePaiement" class="input">
                                    <option >Modalite du paiement</option>
                                    <option value=1>Chaque 1 mois</option>
                                    <option value=2>Chaque 2 mois</option>
                                    <option value=3>Chaque 3 mois</option>
                                </select>
                            </div>
                            
                            <p id="message"></p>

                            <div class="group">
                                <input type="submit" id="submitButton" onclick="validatePassword()" class="button"
                                    value="Valider l annonce">
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/REGISTER.JS"></script>

</html>
>>>>>>> 09547d1a9a232210a0e3a604ddbce9e43bf009d0
