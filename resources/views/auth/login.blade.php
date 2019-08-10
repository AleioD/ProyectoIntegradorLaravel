@extends('layouts.master')
 @section('pageTitle',"Login")
@section('content')
<div class="container mt-5 p-5 containerLoginV2">
  <div class="row justify-content-center">
<form class="col-md-6 offset-md-3" method="POST" action="{{ route('login') }}">
            @csrf
      <div class="form-group fontLatoLabel">
  <label for="email" >E-mail:</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
  <span class="alert alert-danger" role="alert">
    <strong>{{ $message }}</strong>
  </span>
          @enderror
      </div>


  <div class="form-group fontLatoLabel">
<label for="password">Contraseña:</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
          @enderror
  </div>

   <div class="form-check fontLatoLabel mb-5">

          <div class="form-check">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">Recordarme</label>
          </div>
          <br>

<button type="submit" class="btn btn-success">{{ __('Login') }}</button>
<br><br>
       @if (Route::has('password.request'))
<a  href="{{ route('password.request') }}">
                                      ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                                • ¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
          </div>



  </div>
    </form>
</div>
</div>
@endsection
