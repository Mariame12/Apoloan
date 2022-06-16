@extends('Presentation/base')
@section('content')
    <main>
        <div class="hero-section w3-animate-left " id="home">
            <div class="hero-section-main">
                <div class="hero-section-into-text w3-margin-top">


                    <p>
                    <h1 class="w3-text-white">Avec APOLOAN</h1>
                    <span class=" tt w3-text-white w3-xxxlarge">
                        Faites un prêt, <br> </span>
                    <span class="tt w3-text-white w3-xxxlarge">Changer une vie..:</span> </p>

                    <p class="w3-right w3-text-white w3-small hero-qoute ">Des outils simples et intelligents pour
                        emprunter, gagner de l'argent et
                        apporter un grand changement dans
                        la vie de quelqu'un.</p>
                    <div class="w3-text-white l " style="margin-top:60px">
                        <p>Nous suivre sur les reseaux</p>
                        <div class="w3-margin-top">


                            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity icons"></i></a>
                            <a href="#"><i class="fa fa-instagram w3-hover-opacity icons"></i></a>
                            <a href="#"><i class="fa fa-snapchat w3-hover-opacity icons"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity icons"></i></a>
                            <a href="#"><i class="fa fa-twitter w3-hover-opacity icons"></i></a>
                            <a href="#"><i class="fa fa-linkedin w3-hover-opacity icons"></i></a>
                        </div>
                    </div>
                    <a href="#new-arrivals" class="">
                        <button class="w3-text-white w3-small w3-round w3-red w3-btn w3-margin-top">En savoir plus

                        </button>
                    </a>

                </div>
            </div>
        </div>

        </div>
    </main>

    <section class="w3-container  w3-margin">
        <div class="w3-container w3-card" style="margin-bottom: 2rem;">
            <h2 class="section-text-header w3-xxlarge">Votre prêt, sur mesure <br>et pour vous</h2>
            <div style="width: 72%">
                <h3 style=" margin: 35px 100px;font-size:20px;    margin-top: -44px;">Consolidation de dettes ?
                    Payer pour une grosse dépense
                    comme la rénovation domiciliaire ou une occasion spéciale ? Nous avons ce qu'il vous faut.</h3>
            </div>

        </div>
        <div class="new-arrived-products  " id="new-arrivals">
            <div class="w3-third w3-container  w3-card w3-round-xlarge w3-center new-product  s12 m3 l3">

                <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">
                    <object class="w3-animate-fading card-1 " style="margin: 2rem" width="100px" height="100px"
                        data="/images/asset 18.svg" type=""></object>
                    <p class=" pa w3-white">Bénéficiez d'un tarif réduit</p>
                    <p style="font-size:16px;    margin-top: 3rem;text-overflow:ellipsis">Obtenez un prêt avec un taux fixe
                        bas qui n'augmente
                        jamais. Vérifiez votre tarif en ligne instantanément.</p>
                </div>
            </div>
            <div class="w3-third w3-container   w3-card w3-round-xlarge w3-center new-product s12 m3 l3">

                <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">

                    <object class="w3-animate-fading card-1 " style="margin: 2rem" width="100px" height="100px"
                        data="/images/asset 19.svg" type=""></object>
                    <p class="pa w3-white">Payez à votre rythme</p>
                    <p style="font-size:16px; margin-top: 3rem;text-overflow:ellipsis">Remboursez votre prêt avec des durées
                        fixes de 3 ou 5
                        ans 2 et un paiement mensuel unique et économique.</p>
                </div>
            </div>
            <div class=" w3-third w3-container  w3-card w3-round-xlarge w3-center new-product s12 m3 l3">

                <div class="w3-margin-top w3-margin-bottom" style="overflow: hidden; padding:0px 20px;">
                    <object class="w3-animate-fading card-1 " style="margin: 2rem" width="100px" height="100px"
                        data="/images/asset 20.svg" type=""></object>
                    <p class="pa w3-white">Économiser de l'argent</p>
                    <p style="font-size:16px; margin-top: 3rem;text-overflow:ellipsis">Économisez de l'argent sans pénalités
                        de remboursement
                        anticipé.</p>
                </div>
            </div>


        </div>



        <div class="w3-light-gray w3-round-xlarge" style="margin-top: 40px; padding: 50px 0px;" id="testimony">


            <div class="feedback">
                <div class="w3-container ">
                    <h2 class="section-text-header w3-xxlarge" style="margin-top: 0px !important;">Comment Apoloan
                        fonctionne</h2>
                </div>
                <div class="Customer-feedback" style="display: flex;justify-content: space-evenly;flex-wrap: wrap;">
                    <div class="card">
                        <div class="customer-feedback-header">
                            <div class="customer-profile">
                                <img src="/images/Puzzle.jpg" />
                            </div>
                        </div>
                        <div>
                            <p class="w3-small">Choisissez un emprunteur qui vous inspire ou choisissez une cause que
                                vous soutenez.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="customer-feedback-header">
                            <div class="customer-profile">
                                <img src="/images/Lend.jpg" />
                            </div>
                        </div>
                        <div>
                            <p class="w3-small">Prêtez manuellement ou automatiquement.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="customer-feedback-header">
                            <div class="customer-profile">
                                <img src="/images/Piggy.jpg" alt="Robert Godwin" />
                            </div>
                        </div>
                        <div>
                            <p class="w3-small">Faites-vous rembourser avec des interet</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="customer-feedback-header">
                            <div class="customer-profile">
                                <img src="/images/camera-flash.jpg" />
                            </div>
                        </div>
                        <div>
                            <p class="w3-small">Répéter à l'infinie</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <div class="w3-light-gray w3-round-xlarge w3-row" style="margin-top: 40px; padding: 50px 0px;" id="testimony">


            <div class="feedback">
                <div class="w3-container ">
                    <h2 class="section-text-header w3-xxlarge" style="margin-top: 0px !important;">Prêts en ligne et bien
                        plus encore
                    </h2>
                </div>
                <div class="Customer-feedback" style="display:flex;justify-content: space-evenly;flex-wrap: wrap;">

                    <p style="font-size: 20px" class=" w3-twothird">Prenez en charge vos finances avec une solution
                        personnalisée simple et
                        rapide. Utilisez la plateforme Prosper pour consolider vos dettes , financer des rénovations
                        domiciliaires , payer des soins de santé , demander une marge de crédit sur valeur domiciliaire
                        ou obtenir une carte de crédit en quelques étapes simples.</p>
                </div>
                <div class=" w3-third">
                </div>
            </div>
            <div style="padding: 23px;border-radius: 10px;margin: 26px;" class="w3-right ">
                <div>
                    <video style="border-radius: 0.875rem" src="/images/Make a loan, change a life.mp4" autoplay loop muted
                        playsinline></video>
                </div>
            </div>
            <div class="foto">

                <img style="width:440px; border-radius: 10px;" src="/images/f546b6b4fc45cc3f3352b457f33eb055.jpg" />
            </div>

        </div>

        <div style="margin-bottom: 55px;margin-top: 55px;text-align: center;  padding: 30px;" class="">


            <h2 class=" w3-xxlarge"
                style="text-transform: uppercase;font-weight: 600;">
                Faites un prêt aujourd'hui! </h2>
                <a href="#"
                class="action w3-teal w3-btn w3-round-xlarge">Trouver un emprunteur</a>

        </div>

    </section>
@endsection
