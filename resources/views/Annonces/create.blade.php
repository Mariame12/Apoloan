
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
 