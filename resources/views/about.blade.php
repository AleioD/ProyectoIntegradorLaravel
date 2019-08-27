@extends('layouts.master')
@section('pageTitle',"Acerca del Juego")
@section('content')



<div class="">


    <section class="container-section">
      <span class="container-about">
        <h2 class="h2-about">De que se trata?</h2>

        <!--carrousel bootstrap-mobile-->

        <div class="carrousel-mobile .d-block .d-sm-none" ">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="position:relative;">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card" style="width: 75%; margin: auto;">
    <img src="img/user_1.png" class="rounded-circle card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Sabiondos es un juego de preguntas y respuestas. El objetivo es contestar preguntas para sumar puntos. </p>
    </div>
  </div>

                </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_2.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Cada pregunta correcta suma 10 puntos. Se considera una partida completa al contestar 10 preguntas.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_8.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Una vez alcanzados los primeros 200 puntos podes competir contra otros usuarios apostando puntaje.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_4.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Suma puntos y gana estrellitas! Cada vez que ganes una estrellita tendrás un premio sorpresa!!</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_12.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><a href="/register">Registrate</a> y empeza a disfrutar de Sabiondos, el juego que pone a prueba tus conocimientos!!</p>
  </div>
</div>

              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!--carrousel bootstrap tablet y desktop-->
        <div class="carrousel-tablet-desktop">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="position:relative;">
              <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
    <img src="img/user_1.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
    <div class="card-body">
      <p class="card-text">Sabiondos es un juego de preguntas y respuestas. El objetivo es contestar preguntas para sumar puntos.</p>
    </div>
  </div>

                </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
    <img src="img/user_8.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
    <div class="card-body">
      <p class="card-text">Cada pregunta correcta suma 10 puntos. Se considera una partida completa al contestar 10 preguntas.</p>
    </div>
  </div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
    <img src="img/user_3.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
    <div class="card-body">
      <p class="card-text">Una vez alcanzados los primeros 200 puntos podes competir contra otros usuarios apostando puntaje.</p>
    </div>
  </div>

              </div>
              <div class="carousel-item">
              <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
  <img src="img/user_4.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
  <div class="card-body">
    <p class="card-text">Suma puntos y gana estrellitas! Cada vez que ganes una estrellita tendrás un premio sorpresa!!</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
              <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
  <img src="img/user_12.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
  <div class="card-body">
    <p class="card-text"><a href="/register">Registrate</a> y empeza a disfrutar de Sabiondos, el juego que pone a prueba tus conocimientos!!</p>
  </div>
  </div>

              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!--FIN-carrousel bootstrap-->

      </span>
      <div class="button-play">
        <a href="/category">Jugar</a>
      </div>
    </section>
</div>

@endsection
