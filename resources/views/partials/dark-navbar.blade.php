<?php
$navAdmin = [
  "Preguntas" => "questionAdminForm",
];
?>


<header> <!-- Encabezadp -->
  <nav class="dark-navbar">

    @auth
    <nav id="sidebar" >
      <!-- sidebar-->
      <div id="dismiss">
        <i>X</i>
      </div>
      <h3>Perfil</h3>
      <div>
        <h1 class="h1-profile"><strong>{{Auth::user()->getFullName()}}</strong></h1>
        <div class="foto-perfil">
          <img src={{ Auth::user()->avatar ?
            Auth::user()->avatar :
            "./img/user_8.png" }}  alt="Foto del usuario">
          </div>
          <div class="nombre-perfil">
            {{Auth::user()->userName}}
          </div>
          <div class="email-perfil">
            {{Auth::user()->email}}
          </div>
          <div class="puntaje-perfil ">
            {{Auth::user()->score}}
          </div>
          <div class="estrellas-perfil">
            <i class="material-icons estrellita active" >star</i>
          </div>
        </div>
        <div class="menu-perfil">
          <ul>
            <li style="display:block; background:rgba(0,0,0,0.2);padding: 5px;border-radius: 5px; margin: 0 0 10px 0;">  @foreach ($navAdmin as $linkAdmin => $linkUrl)
              @if (Auth::user()->isAdmin() == 1 && $linkAdmin == "Preguntas")
              <a style=" background:rgba(0,0,0,0);" href="{{$linkUrl}}">{{$linkAdmin}}
              </a></li>
              @endif
              @endforeach
              <li style="display:block; background:rgba(0,0,0,0.2);padding: 5px;border-radius: 5px;  margin:0 0 10px 0;">
                <a style=" background:rgba(0,0,0,0);"href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
          <br>
          <h5>Cambiar Tema:</h5>
          <button data-theme="/css/style.css"  id="stylesheet1" class="btn btn-primary btn-theme btn-sm"> <a style="background:#007bff;">ORIGINAL</a></button>
          <button data-theme="/css/style2.css" id="stylesheet2" class="btn btn-danger btn-theme btn-sm"> <a  style="background:#dc3545;">ON FIRE</a></button>
          <button data-theme="/css/style3.css" id="stylesheet3" class="btn btn-light btn-theme btn-sm"> <a style="background:#F8F9Fa;">PEACE</a></button>
          <br>
        </div>
      </nav>
      @endauth




      <!-- probando el menu desplegable de bootstrap-->
      <div class="game-navbar-div-user">
        @auth
        <img id="sidebarCollapse" class="img rounded-circle img-navbar" src="{{ Auth::user()->avatar ?
          Auth::user()->avatar :
          "./img/user_8.png" }}" alt="">
          @endauth
          @guest
          <img class="img rounded-circle img-navbar" src="./img/user_8.png" alt="">
          @endguest
          <div class="game-navbar-div">
            @auth
            <span class="game-text-title">{{Auth::user()->getFullName()}}</span>
            @endauth
            @guest
            <span class="game-text-title">Anónimo</span>
            @endguest
            <span class="game-text-subtitle">@yield('category')</span>
          </div>
          <!--  AUDIO  -->
          <div class="audio">
            <br>

            <button class="button-volume material-icons" id="buttonS" style="display:none; color:white;"> <i id="activeS">
              volume_up
            </i></button>
            <button class="button-volume material-icons" id="buttonB"  style="color:white;"> <i id="activeB">
              volume_off
            </i></button>
            <audio id="audio" autoplay loop>
              <source src="/audio/audioSabiondos.ogg"  type="audio/ogg"  >
                <source src="/audio/audioSabiondos.mp3"  type="audio/mp3"  >
                  <source src="/audio/audioSabiondos.wav"  type="audio/wav"  >
                    <object data="mediaplayer.swf?audio=/audio/audioSabiondos.mp3">
                      <param name="movie" value="mediaplayer.swf?audio=/audio/audioSabiondos.mp3">
                    </object>
                  </audio>
                </div>
                <!--  FIN AUDIO  -->
              </div>

              <div class="game-navbar-div">
                <span class="time" id="timer" style="display:none;">Tiempo: 25s</span>
              </div>

              <div class="game-navbar-div">
                <span class="game-text-title" id="score">0</span>
                <div class="rating-game" style="display:none;">
                  <i class="material-icons estrellita active">star</i>
                  <i class="material-icons estrellita active">star</i>
                  <i class="material-icons estrellita active">star</i>
                  <i class="material-icons estrellita">star</i>
                  <i class="material-icons estrellita">star</i>
                </div>
              </div>

            </nav>
          </header>
