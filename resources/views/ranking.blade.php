@extends('layouts.master')
@section('pageTitle',"Ranking")
@section('content')

  <?php
  $rankingList =
  [
    [
      'username' => 'cata1952',
      'categoria' => 'principiante',
      'puntos' => 5000,
      'porcentaje' => 100,
      'imagen' => '/img/user_1.png',
      'rating' => 2,
    ]
  ];
  //var_dump($questionArrayList);
  // https://psicologiaymente.com/miscelanea/preguntas-cultura-general
  ?>



  <div class="container mx-auto mt-5">
    <div class="row d-flex flex-row justify-content-around">
      <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
        <h1 class="titulo-seccion">Ranking</h1>
        <div class="ranking-wrap row">
          <?php foreach ($rankingList as $oneUser) : ?>
            <img class="rounded-circle user-img mx-5" src="<?=$oneUser['imagen']?>" alt="user">
            <div class="col-xs-12 col-md-8 user-data">
              <div class="progress">
                <div class="progress-bar light-green" style="width:<?=$oneUser['porcentaje']?>%"></div>
              </div>
              <div class="row">
                <div class="col-6 rating">
                  <?php for ($i = 1; $i <= $oneUser['rating']; $i++) : ?>
                    <i class="material-icons estrellita active">star</i>
                  <?php endfor; ?>
                  <?php for ($i = 1; $i <= 5 - $oneUser['rating']; $i++) : ?>
                    <i class="material-icons estrellita">star</i>
                  <?php endfor; ?>
                </div>
                <div class="col-6 puntaje">
                  <p><?=$oneUser['puntos']?> pts.</p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>

@endsection
