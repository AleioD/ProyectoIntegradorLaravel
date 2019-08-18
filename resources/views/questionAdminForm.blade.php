@extends('layouts.master')
@section('pageTitle',"Agregar Preguntas")
@section('content')
  <div class="mt-5 mb-5 pt-5">
    <div class=" justify-content-center p-1">

      <form class="fontLatoLabel offset-md-3" method="POST" action="questionAdminForm">
        @csrf

        <div class="row justify-content-center ">

          <!--hay q controlar este campo-ES AGREGADO NUEVO-->
          <div class="col-md-12">
            <div class="form-group">
              <label for="question">Ingresar pregunta</label>
              <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question') }}" required autocomplete="question" autofocus>
                @error('question')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>
            <!--FIN DE AGREGADO-->

            <div class="col-md-12">
              <div class="form-group">
                <label for="correctAnswer" >Ingresar respuesta correcta</label>
                <input id="correctAnswer" type="text" class="form-control @error('correctAnswer') is-invalid @enderror" name="correctAnswer" value="{{ old('correctAnswer') }}" required autocomplete="correctAnswer">
                  @error('correctAnswer')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>

              <div class="col-md-12 ">
                <div class="form-group">
                  <label for="answer">Ingresar respuesta incorrecta</label>
                  <input id="answer" type="text" class="form-control @error('answer') is-invalid @enderror" name="answer" value="{{ old('answer') }}" required autocomplete="answer" autofocus>
                    @error('answer')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label for="answer_1">Ingresar respuesta incorrecta</label>
                    <input id="answer_1" type="text" class="form-control @error('answer_1') is-invalid @enderror" name="answer_1" value="{{ old('answer_1') }}" required autocomplete="answer_1" autofocus>
                      @error('answer_1')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12 ">
                    <div class="form-group">
                      <label for="answer_2">Ingresar respuesta incorrecta</label>
                      <input id="answer_2" type="text" class="form-control @error('answer_2') is-invalid @enderror" name="answer_2" value="{{ old('answer_2') }}" required autocomplete="answer_2" autofocus>
                        @error('answer_2')
                          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>
                      <div class="col-md-12 ">
                    <div class="form-group">
                      <label for="">Seleccione una categoría</label>
                      <select class="form-control" name="category_id">
                        <option value="">Elegí una categoria</option>
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  </div>
                  <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success ">Guardar</button>
                  </div>

                </form>

              </div>
            </div>
          @endsection
