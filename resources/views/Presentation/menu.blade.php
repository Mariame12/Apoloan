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
                <span class="w3-display-right">

                
                    <a href="#" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">ACCUEIL</a>
                    <a href="{{ route('annoncelist') }}" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">ANNONCES</a>
                    <a href="{{ route('index') }}" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">PRET </a>
                    <a href="{{ route('empruntlist') }}" class="w3-btn w3-round-xlarge  w3-hide-small w3-hide-small">EMPRUNT</a>
                    
                </span>

                <a href="{{ route('index') }}" class="login w3-light-blue w3-right  w3-btn w3-round-xlarge  w3-hide-small "
                    onclick="barShow()">Se deconnecter</a>

            </div>
        </div>        
    </header>
    @yield('content')
<body>