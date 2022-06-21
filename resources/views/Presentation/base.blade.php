<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="/css/ACCUEIL.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <script type="text/javascript" src="/js/ACCUEIL.js"></script>

    <title>Apoloan</title>
</head>

<body>
    <header class="header" id="top">
        <div class="w3-top">
            <div class="w3-bar  w3-card header">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                    href="javascript:void(0)" onclick="barShow()" title="Toggle Navigation Menu"><i
                        class=" bar fa fa-bars"></i></a>
                      <a href="#" class=" logo w3-button w3-padding-large ">APOLOAN</a>
                
                        @isset($_COOKIE['token'])
               
                    <span class="w3-display-right">


                        <a href="{{ route('index') }}" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">ACCUEIL</a>
                        <a href="{{ route('annoncelist') }}"
                            class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">ANNONCES</a>
                        <a href="{{ route('index') }}" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">PRET
                        </a>
                        <a href="{{ route('empruntlist') }}"
                            class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">EMPRUNT</a>

                    </span>
                    <a href="{{ route('logout') }}" class="login w3-light-blue w3-right  w3-btn w3-round-xlarge  w3-hide-small "
                    {{-- onclick="logout()" --}}>Se deconnecter</a>
                @else
                <span style="right: 2%;" class="w3-display-right">

                    <a href="{{ route('register') }}"
                        class="login w3-light-blue w3-right  w3-btn w3-round-xlarge  w3-hide-small " onclick="barShow()"
                        for="tab-2">S'inscrire</a>
                    <a href="{{ route('login') }}"
                        class="login w3-light-blue w3-right  w3-btn w3-round-xlarge  w3-hide-small " onclick="barShow()">Se
                        connecter</a>
                </span>

                @endisset


          



            </div>
        </div>

    </header>

    @yield('content')

    <hr>
    <div class=" contact" id="contact">
        <div class=" w3-left-align w3-margin-top contact-info ">
            <p>EMPRUNTER</p>
            <h5 class="w3-xsmall  ">Des prêts pour les entrepreneurs <br> qui font des
                choses incroyables
            </h5>
            <p>PRÊTER</p>
            <h5 class="w3-xsmall  ">Faire un prêt, changer une vie.
            </h5>

            <h4 style="font-weight: 600;">Suivez-nous </h4>

            <i class="fa fa-facebook-official w3-hover-opacity icons"></i>
            <i class="fa fa-instagram w3-hover-opacity icons"></i>
            <i class="fa fa-snapchat w3-hover-opacity icons"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity icons"></i>
            <i class="fa fa-twitter w3-hover-opacity icons"></i>
            <i class="fa fa-linkedin w3-hover-opacity icons"></i>
        </div>

        <div class="w3-left-align w3-margin-top contact-info">
            <p>APPRENDRE A NOUS CONNAITRE</p>
            <ul style="list-style: none;
            color: #009688;
            font-size: small;margin:1rem">
                <li style="margin: 1rem;"> <a class="ahover" href="">À propos de nous</a></li>
                <li style="margin: 1rem;"> <a class="ahover" href="">Comment Kiva fonctionne</a></li>
                <li style="margin: 1rem;"> <a class="ahover" href="">FAQ</a></li>
                <li style="margin: 1rem;"> <a class="ahover" href="">Faites équipe avec nous</a></li>
                <li style="margin: 1rem;"> <a class="ahover" href="">Contactez-nous</a></li>
            </ul>

        </div>

    </div>


    </div>


    <div class="w3-flat-midnight-blue w3-padding w3 w3-center w3-margin-top">
        <p>Powered by Abal khassim TRAORE</p>
    </div>

    <body>
