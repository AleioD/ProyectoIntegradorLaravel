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
  <nav class="main-nav">
    <!-- probando el menu desplegable de bootstrap-->


    <div class="toggle-nav">
      <div class="btn-group">

        <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">menu</i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">
            <?php foreach ($navAccess as $linkAcc => $links) : ?>
              <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
            <?php endforeach; ?>
          </button>

        </div>
      </div>
    </div>

    @auth
      <div class="nav-profile-ico">
        <div class="btn-group">
          <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">account_circle</i>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <button class="dropdown-item" type="button">

<li><a style="color:#FFFFFF; font-size:1.2em ;" href="profile">
Perfil</a></li>
              <li>  @foreach ($navAdmin as $linkAdmin => $linkUrl)
                @if (Auth::user()->isAdmin() == 1 && $linkAdmin == "Preguntas")
                <a style="color:#FFFFFF; font-size:1.2em ;" href="{{$linkUrl}}">{{$linkAdmin}}
                </a></li>
                @endif
                @endforeach
                <a class="dropdown-item" style="color:#FFFFFF; font-size:1.2em ;" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>



            </button>

            </div>
          </div></div>

          <div class="toggle-nav">
            <div class="btn-group">

              <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">menu</i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">
                  <?php foreach ($navLog as $linkL => $linkLs) : ?>
                    <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkL; ?> </a></li>
                  <?php endforeach; ?>
                </button>
              </div>
            </div>
          </div>
        @endauth


        @auth
          <ul class="nav-profile">

            <div class="btn-group">
              <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
              </button>
              <div class="dropdown-menu dropdown-menu-left">
                <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navAdmin as $linkAdmin => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkAdmin; ?>
                    </a></li>
                  <?php endforeach; ?></button>

                </div>
              </div></ul>


              <ul class="nav-access">
                <?php foreach ($navLog as $linkLog => $linkLs) : ?>
                  <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkLog; ?> </a></li>
                <?php endforeach; ?> </ul>

              @endauth

              @guest

                <ul class="nav-access">
                  <?php foreach ($navAccess as $linkAcc => $links) : ?>
                    <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
                  <?php endforeach; ?></ul>

                @endguest


              </nav>
            </header>
