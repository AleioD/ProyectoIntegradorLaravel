@extends('layouts.master')
@section('pageTitle',"Registrarse")
@section('content')
  <div class="mt-5 mb-5 pt-5">
    <div class=" justify-content-center p-1">



      <form class="fontLatoLabel offset-md-3" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-center ">

          <!--hay q controlar este campo-ES AGREGADO NUEVO-->
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Nombre de Usuario:</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>
            <!--FIN DE AGREGADO-->

            <div class="col-md-6 ">
              <div class="form-group">
                <label for="email" >E-Mail:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>


              <div class="col-md-6 ">
                <div class="form-group">
                  <label for="name">Nombre:</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>



                <div class="col-md-6 ">
                  <div class="form-group">
                    <label for="name">Apellido:</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                      @enderror
                    </div>
                  </div>

                    <div class="col-md-6">
                  <div class="form-group">
                    <label for="country">Elegí un país:</label>
                    <select id="country" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country') }}" required autocomplete="country" autofocus>
                      <option>Arte</option>
                      <option>Literatura</option>
                      <option>Cultura General</option>
                      <option>Ciencia</option>
                      <option>Deportes</option>
                    </select>
                    @error('country')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6" style="display:none">
                <div class="form-group">
                <label for="state">Elegí una provincia:</label>
                <select id="state" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ old('state') }}" required autocomplete="state" autofocus>
                  <option>Arte</option>
                  <option>Literatura</option>
                  <option>Cultura General</option>
                  <option>Ciencia</option>
                  <option>Deportes</option>
                </select>
                @error('state')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                </div>
                </div>



                    <div class="col-md-6 ">



                        <div class="form-group ">
                          <label for="avatar">Sube un avatar: </label>
                          <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input @error('avatar') is-invalid @enderror" id="customFileLang" lang="es" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                              <label class="custom-file-label"  for="customFileLang">Seleccionar Archivo</label>
                            </div>
                          </div>
                          @error('avatar')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                          @enderror
                        </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="password" class="col-form-label ">Contraseña:</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password-confirm" class="col-form-label ">Repetir Contraseña:</label>
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
                <br><br>
              @endsection
