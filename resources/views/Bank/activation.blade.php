<html>

<head>
    <title>Activation</title>
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
                    class="tab w3-btn w3-round-xlarge ">Activation compte</label>
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
                                <label class="label">Nom de la carte</label>
                                <input type="text" name="Name" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Numero de la carte bancaire</label>
                                <input type="text" name="CardNumber" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Date d expiration</label>
                                <input type="text" name="Expiry" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Code</label>
                                <input type="number" name="CVV" class="input">
                            </div>
                            <p id="message"></p>

                            <div class="group">
                                <input type="submit" id="submitButton" onclick="validatePassword()" class="button"
                                    value="Activer compte">
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/REGISTER.JS"></script>

</html>
