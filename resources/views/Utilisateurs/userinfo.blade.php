@extends('Presentation.base')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/USERINFO.CSS">
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile" style="margin-top: 7rem;">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="/images/prince-akachi-i2hoD-C2RUA-unsplash.jpg"
                            alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{-- {{$response['user']['nom'] }} --}}
                            <div style="display: flex;position: absolute;margin-left: 6rem;">
                                <div style="display: flex;position: absolute;margin-left: 10rem;width: 17rem;">
                                    <h3>Solde : {{ $response['user']['Compte']['solde'] }}</h3>
                                </div>

                            </div>

                        </h5>
                        <h2 style="text-transform: uppercase">
                            {{ $response['user']['prenom'] }}&nbsp;&nbsp;
                        </h2>
                        <h2 style="text-transform: uppercase">
                            {{ $response['user']['nom'] }}
                        </h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <span class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('editinfo') }}" class="profile-edit-btn" name="btnAddMore">Modification</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['nom'] == '')
                                        <p>Informaion manquante</p>
                                    @else
                                        <p>{{ $response['user']['nom'] }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Prenom</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['prenom'] == '')
                                        <p>Informaion manquante</p>
                                    @else
                                        <p>{{ $response['user']['prenom'] }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Age</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['atnaissance'] == '')
                                        <p>22 ans</p>
                                    @else
                                        <p>{{ $response['user']['atnaissance'] }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Numero</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['numero'] == '')
                                        <p>Informaion manquante</p>
                                    @else
                                        <p>{{ $response['user']['numero'] }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Adresse</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['adresse'] == '')
                                        <p>Informaion manquante</p>
                                    @else
                                        <p>{{ $response['user']['adresse'] }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Fonction</label>
                                </div>
                                <div class="col-md-6">
                                    @if ($response['user']['fonction'] == '')
                                        <p>Informaion manquante</p>
                                    @else
                                        <p>{{ $response['user']['fonction'] }} </p>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('refilsansbank') }}" class="profile-edit-btn" name="btnAddMore">Recharger son solde</a>
            </div>
            @if ($response['user']['idCompte'])
                <label>Ce compte est déja activé</label>
            @else
                <div class="col-md-2">
                    <a href="{{ route('activercompte') }}" class="profile-edit-btn" name="btnAddMore">Activer son
                        compte</a>
                </div>
            @endif

        </form>
    </div>
@endsection
