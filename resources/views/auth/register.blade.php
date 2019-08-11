@extends('layouts.master')
 @section('pageTitle',"Registrarse")
@section('content')
<div class="mt-5 mb-5 pt-5">
    <div class=" justify-content-center p-1">



        <form class="fontLatoLabel offset-md-3" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-center ">

<!--hay q controlar este campo-ES AGREGADO NUEVO-->
        <div class="col-6">
  				<div class="form-group">
          <label for="name">Nombre de Usuario:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>
<!--FIN DE AGREGADO-->

        <div class="col-6 ">
          <div class="form-group">
          <label for="email" >E-Mail:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>


				<div class="col-6 ">
					<div class="form-group">
          <label for="name">Nombre:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>


<!--hay q controlar este campo-ES AGREGADO NUEVO-->
        <div class="col-6 ">
        	<div class="form-group">
          <label for="name">Apellido:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>


        <div class="col-6 ">
          <div class="form-group">
          <label for="name">Elegí un país:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>


        <div class="col-6 ">
          <div class="form-group">
          <label for="name">Sube un Avatar:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
          </div>
        </div>



<!--FIN DE AGREGADO-->

        <div class="col-6">
          <div class="form-group">
          <label for="password" class="col-md-10 col-form-label ">Contraseña:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
          <label for="password-confirm" class="col-md-10 col-form-label ">Repetir Contraseña:</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>



      </div>
      <div class="row justify-content-center">
          <button type="submit" class="btn btn-success ">Registrarse</button>
      </div>

      </form>


   </div>
</div>
@endsection
