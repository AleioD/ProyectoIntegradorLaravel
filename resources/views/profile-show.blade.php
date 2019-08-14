@extends('layouts.master')
 @section('pageTitle',"Perfil")
@section('content')




        <section class="sectionPerfil p-5">

  <h1 class="h1-index"><strong>{{$user->getFullName()}}</strong></h1>

          <div class="foto-perfil">
            <img src="{{$user->avatar}}"  alt="Foto del usuario">
          </div>

          <div class="nombre-perfil">
        {{$user->userName}}
          </div>

          <div class="email-perfil">
            {{$user->email}}
          </div>

            <div class="puntaje-perfil ">
            {{$user->score}}
            </div>

            <div class="estrellas-perfil">
            <i class="material-icons estrellita active" >star</i>
            </div>

      </section>

@endsection
