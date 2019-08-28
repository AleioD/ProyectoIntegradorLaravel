@extends('layouts.game')
@section('pageTitle',"Juego")
@section('category',$categoryName ?? 'Sin categoría')
@section('content')

<!-- {{$question}};
{{$answers}}; -->

<form action="/guardarScore" method="post" id="formScore">
	@csrf
	<input type="text" name="columnaAguardar" id="scoreInput">
</form>

<button type="button" id="saveScore">Guardar Partida</button>


<h2 class="h2-about mb-5" id="questionTitle">{{$question['question']}}</h2>

<div class="row">
	<div class="col-md-6 buttonAnswer" id="a1">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button" value="{{$answers[0]['isCorrect']}}">{{$answers[0]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a2">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button" value="{{$answers[1]['isCorrect']}}">{{$answers[1]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a3">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button" value="{{$answers[2]['isCorrect']}}">{{$answers[2]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a4">
		<button class="col-md-12 btn btn-light btn-lg m-2" type="button" name="button" value="{{$answers[3]['isCorrect']}}">{{$answers[3]['answer']}}</button>
	</div>
</div>

<div class="row m-5 w-85" style="display:none;" id="resultCorrect">
	<span class="col-md-12 answer-result color-correct">
		<p>Tu respuesta es correcta</p>
	</span>
</div>

<div class="row m-5" style="display:none;" id="resultIncorrect">
	<span class="col-md-12 answer-result color-incorrect">
		<p>Tu respuesta es incorrecta</p>
	</span>
</div>

<!-- <form class="" action="/game" method="post">
{{ csrf_field() }};
<input type="text" name="score" value="10">
<button type="submit" name="button">siguiente</button>
</form> -->

<br><br>

<script>
	var scoreInput = document.querySelector('#scoreInput');
	setInterval(function () {
		scoreInput.value = sessionStorage.getItem("score");
	}, 1000)

	var formScore = document.querySelector("#formScore");
	var btnSaveScore = document.querySelector("#saveScore");

	btnSaveScore.addEventListener("click", function () {
		formScore.submit();
	})
</script>
@endsection
