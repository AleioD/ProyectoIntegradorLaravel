@extends('layouts.game')
@section('pageTitle',"Juego")
@section('category',$categoryName ?? 'Categoria al Azar')
@section('content')

{{-- <!-- {{$question}};
{{$answers}}; --> --}}

<div style="width:100vw; display:flex;flex-wrap: wrap; flex-direction: column; justify-content: center;" >
<form action="/saveGame" method="post" id="formScore" style="display:none;">
	@csrf
	<input type="text" name="columnaAguardar" id="scoreInput">
</form>


<div style="background-color: rgba(0, 0, 0, 0.2); margin: 5% 0; height:auto; display:flex; flex-wrap: wrap; justify-content: center;">
<h2 class="h2-game"   id="questionTitle">{{$question['question']}}</h2>
</div>
<div class="row ">
	<div class="col-md-6 buttonAnswer" id="a1">
		<button class="col-md-12 btn btn-light btn-lg mt-2" type="button" name="button" value="{{$answers[0]['isCorrect']}}">{{$answers[0]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a2">
		<button class="col-md-12 btn btn-light btn-lg mt-2" type="button" name="button" value="{{$answers[1]['isCorrect']}}">{{$answers[1]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a3">
		<button class="col-md-12 btn btn-light btn-lg mt-2" type="button" name="button" value="{{$answers[2]['isCorrect']}}">{{$answers[2]['answer']}}</button>
	</div>
	<div class="col-md-6 buttonAnswer" id="a4">
		<button class="col-md-12 btn btn-light btn-lg mt-2" type="button" name="button" value="{{$answers[3]['isCorrect']}}">{{$answers[3]['answer']}}</button>
	</div>
</div>

<div class="row m-5 w-85" style="display:none;" id="resultCorrect">
	<span class="col-md-12 answer-result color-correct">
		<p> Correcto </p>
	</span>
</div>

<div class="row m-5 p-5" style="display:none;" id="resultIncorrect">
	<span class="col-md-12 answer-result color-incorrect">
		<p> Incorrecto </p>
	</span>
</div>
</div>
<!-- <form class="" action="/game" method="post">
{{ csrf_field() }};
<input type="text" name="score" value="10">
<button type="submit" name="button">siguiente</button>
</form> -->

<br><br>
@endsection
