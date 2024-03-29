<?php
$navAdmin = [
  "Preguntas" => "questionAdminForm",
];
$navAccess=[
  "Inicio" => "/index",
  "Acerca de" => "/about",
  "FAQ's" => "/faq",
  "Login" => "/login",
  "Registrarse" => "/register",
];
$navLog=[
  "Inicio" => "/index",
  "Acerca de" => "/about",
  "FAQ's" => "/faq",
];
?>
<header> <!-- Encabezadp -->
  <nav class="main-nav" >
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
            <img src= "storage/avatars/{{Auth::user()->avatar}}" alt="Foto del usuario">
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
            <br>
            {{-- <div class="estrellas-perfil">
              <i class="material-icons estrellita active" >star</i>
            </div> --}}
          </div>
          <div class="menu-perfil">
            <ul>
              @foreach ($navAdmin as $linkAdmin => $linkUrl)

                @if (Auth::user()->isAdmin() == 1 && $linkAdmin == "Preguntas")
                  <li style="display:block; background:rgba(0,0,0,0.2);padding: 5px;border-radius: 5px; margin: 0 0 10px 0;">
                  <a style=" background:rgba(0,0,0,0);" href="{{$linkUrl}}">{{$linkAdmin}}
                  </a></li>
                @endif
              @endforeach
              <li style="display:block; background:rgba(0,0,0,0.2);padding: 5px;border-radius: 5px; margin: 0 0 10px 0;">
                <a style=" background:rgba(0,0,0,0);" href="{{ route('rounds') }}">Partidas
                  </a></li>
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

      <!-- Page Content  -->

      <div id="content">
        <!-- este boton es para q abra el sidebar  -->

        <div class="nav-profile-ico" >
          <div class="btn-group">
            <button id="sidebarCollapse" type="button" class="btn btn-link"  >
              <i class="material-icons">account_circle</i>
            </button>
            @if (Request::url() != Request::is('index'))
                    <div>
                      <img src="/img/logoSabiondos.png" style="width:50%;" alt="Logo Sabiondos">
                    </div>

              @endif
          </div>




              </div>
              <div class="overlay"></div>

            </div>

            <div class="toggle-nav">
              <div class="btn-group">

                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">menu</i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">
                    @foreach ($navLog as $linkLog => $linkLs)
                      <li class="navLink"><a href="{{$linkLs}}"> {{$linkLog}}</a>
                      </li>
                    @endforeach
                  </button>

                </div>
              </div>
            </div>
          @endauth

          @guest
            <div class="toggle-nav">
              <div class="btn-group">

                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">menu</i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">
                    @foreach ($navAccess as $linkAcc => $links)
                      <li class="navLink"><a href="{{$links}}"> {{$linkAcc}}</a></li>
                    @endforeach</ul></ul>

                  </button>
                </div>
              </div>
            </div>
          @endguest

          @auth
            <ul class="nav-access">
              <?php foreach ($navLog as $linkLog => $linkLs) : ?>
                <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkLog; ?> </a></li>
              <?php endforeach; ?> </ul>

            @endauth
            @guest

              @if (Request::url() != Request::is('index'))
                      <div>
                        <img src="/img/logoSabiondos.png" style="width:50%; margin:20px;" alt="Logo Sabiondos">
                      </div>
                @endif


              <ul class="nav-access">
                @foreach ($navAccess as $linkAcc => $links)
                  <li class="navLink"><a href="{{$links}}"> {{$linkAcc}}</a>
                  </li>
                @endforeach
              </ul>

            @endguest


          </nav>

        </header>
