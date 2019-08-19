@extends('layouts.master')
 @section('pageTitle',"Inicio")
@section('content')

<section class="container-section">

  <!--<h1 class="h1-index"><strong>Sabiondos</strong></h1>-->
 <img src="/img/logoSabiondos.png" style="width:280px; margin-top:30px;" alt="Logo Sabiondos">
<h2 class="sub-ppal">Un juego para despertar tu curiosidad</h2>

 <div class="image-mobile">
   <img src="/img/background-mobile.png" alt="imagen de jugadores en podio">
 </div>

 <div class="image-t-desktop">
   <img src="/img/background-home.png" alt="imagen de jugadores en podio">
 </div>

<div class="button-play">
  <a id="buttonP" href="/category">Jugar</a>
</div>

</section>

@endsection
