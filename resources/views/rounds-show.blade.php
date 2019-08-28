@extends('layouts.master')
@section('pageTitle',"Partidas")
@section('content')




        <section class="topRounds">


  <h2 class="h2-rounds">Historial de partidas de  {{Auth::user()->userName}}</h2>
    <h3 class="h3-rounds">Puntaje total:  {{Auth::user()->score}} puntos</h3>

  <div class="alert alert-light containerRounds"     role="alert">
  <ul>
    @foreach ($roundsByUser as $unaRonda)
    <li class="card-title" style="width:100%;display:inline-flex;justify-content: space-around; border-bottom: 1px solid blue;"><p><b>Fecha: </b> {{ date('d/m/Y',strtotime($unaRonda->created_at))}}</p><p>
    <b>Puntaje de Ronda: </b> {{ $unaRonda->score }}</p> </li>
     @endforeach
  </ul>
  </div>
</div>


{{-- <div class="topRounds">
  <div class="nombre-perfil">
Historial de partidas de: {{Auth::user()->userName}}
  </div>
    <div class="puntaje-perfil ">
    Puntaje total: {{Auth::user()->score}}
    </div> --}}


{{-- <div class="">

  <div class="card" style="width: 100vw; color:black;">
    <ul class="list-group list-group-flush">
      @foreach ($roundsByUser as $unaRonda)
      <li class="list-group-item"><b>FECHA: </b> {{ $unaRonda->created_at }}  ---
    <b>SCORE RONDA: </b> {{ $unaRonda->score }} </li>
      @endforeach
    </ul>
  </div><br>
</div>


</div>--}}
</section><br>

@endsection
