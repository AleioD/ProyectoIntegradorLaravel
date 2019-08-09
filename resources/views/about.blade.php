@extends('layouts.master')

@section('content')

 <div class="container-ppal"> <!-- Contenedor ppal -->


    <section class="container-section">
      <span class="container-about">
        <h2 class="h2-about">De que se trata?</h2>

        <!--carrousel bootstrap-mobile-->

        <div class="carrousel-mobile .d-block .d-sm-none">
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
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

                </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_2.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_8.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_4.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto;">
  <img src="img/user_12.png" class="rounded-circle card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

                </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
    <img src="img/user_8.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

              </div>
              <div class="carousel-item">
                <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
    <img src="img/user_3.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

              </div>
              <div class="carousel-item">
              <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
  <img src="img/user_4.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

              </div>
              <div class="carousel-item">
              <div class="card" style="width: 75%; margin: auto; flex-direction: row; ">
  <img src="img/user_12.png" class="rounded-circle card-img-top" style="margin: 10px; "alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
        <a href="#">Jugar</a>
      </div>

    </section>
  </div>

@endsection