@extends('layouts.master')
@section('pageTitle',"Ranking")
@section('content')



  {{-- <div class="container mx-auto mt-5">

    <div class="row d-flex flex-row justify-content-around">
      <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
 --}}

<div class="container-ppal" style="margin-top:10%;">
   <section class="blank-wrapper col-md-12 shadow-lg p-3 mb-5 bg-white">
        <h1 class="titulo-seccion">Ranking</h1>
        <ul>
          @foreach ($topScorers as $unUsuario)
                    <li>
         <div class="ranking-wrap row ">

             <img class="rounded-circle user-img " style="width:180px;" src="storage/avatars/{{$unUsuario->avatar}}" alt="Foto del usuario" >


            <div class="col-xs-12 col-md-8 col-lg-10 user-data ">
             <div class="progress">
               <div class="progress-bar light-green" style="width:{{ ($unUsuario->score)*100/8000 }}%"></div>
             </div>
               <div class="row">
             <div class="col-6"style="font-size:1.2em; color: #707070; font-weight: bolder">
             {{ $unUsuario->username }}
             </div>
            <div class="col-6 puntaje" >
            <p>{{ $unUsuario->score }} pts.</p>
            </div>
          </div>
</div>
</div>
        </li>
      </ul>

            @endforeach

      </section>
</div>

@endsection
