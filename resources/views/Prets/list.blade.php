<link rel="stylesheet" href="/css/LOGIN.css">
<body style="background-color:white">
  
    <header class="header" id="top">
      <div class="w3-top">
          <div class="w3-bar  w3-card header">

              <span style="COLOR: rgb(15, 14, 14);MARGIN-LEFT:37REM" class=" logo  w3-padding-large "> <a href="{{ route('index') }}"  rel="noopener noreferrer">APOLOAN</a> </span>

          </div>
      </div>



  </header>
@if (!$response['success'])
    <div style="color:black; font-size: 45px; text-align: center; top: 40%; position: relative; ">
        <label>Aucun prêt realisé pour le moment</label>

    </div>
@else
    <div class="col-md-2">
        <a href="{{ route('activercompte') }}" class="profile-edit-btn" name="btnAddMore">Activer son
            compte</a>
    </div>
@endif
</body>

