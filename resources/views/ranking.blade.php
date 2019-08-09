@extends('layouts.master')
 
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
  ],
  [
    'username' => 'Alejandro',
    'categoria' => 'experto',
    'puntos' => 4000,
    'porcentaje' => 90,
    'imagen' => '/img/user_2.png',
    'rating' => 4,
  ],
  [
    'username' => 'Luciano',
    'categoria' => 'principiante',
    'puntos' => 3800,
    'porcentaje' => 70,
    'imagen' => '/img/user_3.png',
    'rating' => 3,
  ],
  [
    'username' => 'Fernanda',
    'categoria' => 'intermedio',
    'puntos' => 1500,
    'porcentaje' => 50,
    'imagen' => '/img/user_4.png',
    'rating' => 5,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 758,
    'porcentaje' => 50,
    'imagen' => '/img/user_5.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 750,
    'porcentaje' => 50,
    'imagen' => '/img/user_6.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_7.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_8.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_9.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_10.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_11.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_12.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_13.png',
    'rating' => 1,
  ],
  [
    'username' => 'userDemo',
    'categoria' => 'intermedio',
    'puntos' => 700,
    'porcentaje' => 40,
    'imagen' => '/img/user_14.png',
    'rating' => 1,
  ],

];

//var_dump($questionArrayList);
// https://psicologiaymente.com/miscelanea/preguntas-cultura-general

?>
 
        <div class="row justify-content-md-center">
          <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
            <h1 class="titulo-seccion">Ranking</h1>
            <div class="ranking-wrap row">
              <?php foreach ($rankingList as $oneUser) : ?>
              <img class="rounded-circle user-img" src="<?=$oneUser['imagen']?>" alt="user">
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
 
@endsection