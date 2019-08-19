<header> <!-- Encabezadp -->
  <nav class="dark-navbar">
    <!-- probando el menu desplegable de bootstrap-->
    <div class="game-navbar-div-user">
      @auth
      <img class="img rounded-circle img-navbar" src="{{ Auth::user()->avatar ?
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
