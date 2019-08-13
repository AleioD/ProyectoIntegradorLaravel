@extends('layouts.game')
@section('pageTitle',"Categorias")
@section('content')

<h2 class="h2-about mb-5">Pregunta 1</h2>

<div class="row">
	<div class="col-md-6">
		<button class="col-md-12 btn btn-light btn-lg m-2 correct" type="button" name="button">Respuesta 1</button>
	</div>
	<div class="col-md-6">
		<button class="col-md-12 btn btn-light btn-lg m-2 incorrect" type="button" name="button">Respuesta 1</button>
	</div>
	<div class="col-md-6">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button">Respuesta 1</button>
	</div>
	<div class="col-md-6">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button">Respuesta 1</button>
	</div>
</div>

<div class="row m-5 w-85">
	<span class="col-md-12 answer-result color-correct">
		<p>Tu respuesta es correcta</p>
	</span>
</div>

<div class="row m-5">
	<span class="col-md-12 answer-result color-incorrect">
		<p>Tu respuesta es incorrecta</p>
	</span>
</div>

@endsection
