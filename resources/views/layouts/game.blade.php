<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('pageTitle')</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">
  <link id="pagestyle" rel="stylesheet" href="/css/style.css">

</head>

<body class="container-about" style="background-image:none; width:100vw; margin-top:0;">
@include('partials.dark-navbar')
  <div style="width:100vw;" >
    <div style="display:inline-flex; justify-content: space-between; width:100%;">
    	<img src="/img/logoSabiondos.png" style="margin-left: 20px; width:200px; height:52px;" alt="Logo Sabiondos">
    <i class="material-icons cerrar" data-toggle="modal" data-target="#salirDelJuego">close</i>
      </div>
    @yield('content')
  </div>

  <div class="modal fade" id="salirDelJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¿Quieres salir del juego?</h5>
          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Quieres que guardaremos tu puntaje obtenido hasta el momento?</p>
        </div>
        <div class="modal-footer">
          <button id="saveGame" type="button" class="btn btn-primary">Guardar</button>
          <button id="quitGame" type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="guardarElJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Has jugado 10 preguntas</h5>
          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Quieres que guardaremos tu puntaje obtenido hasta el momento?</p>
        </div>
        <div class="modal-footer">
          <button id="saveGame2" type="button" class="btn btn-primary">Guardar</button>
          <button id="continueGame" type="button" class="btn btn-secondary" data-dismiss="modal">Seguir jugando</button>
        </div>
      </div>
    </div>
  </div>

  @include('partials.footer')
</body>
</html>
