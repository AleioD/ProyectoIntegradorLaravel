@extends('layouts.game')
@section('pageTitle',"Categorias")
@section('content')

<section class="container mx-auto">
	<h2 class="h2-about">Elegí una categoría</h2>

	<div class="container justify-content-center">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators" style="position:relative;">
				<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleControls" data-slide-to="1"></li>
				<li data-target="#carouselExampleControls" data-slide-to="2"></li>
				<li data-target="#carouselExampleControls" data-slide-to="3"></li>
				<li data-target="#carouselExampleControls" data-slide-to="4"></li>
				<li data-target="#carouselExampleControls" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner text-center" id="categoriesList">
				<div class="carousel-item active">
					<div class="card category-card" style="margin: 0 auto; width: 25%;">
						<img class="mx-auto" src="/img/categorias/categoria_arte.png" alt="Arte">
						<p class="category-text">Arte</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card category-card">
						<img class="mx-auto" src="/img/categorias/categoria_ciencia.png" alt="Ciencia">
						<p class="category-text">Ciencia</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card category-card">
						<img class="mx-auto" src="/img/categorias/categoria_cultura.png" alt="Cultura General">
						<p class="category-text">Cultura General</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card category-card">
						<img class="mx-auto" src="/img/categorias/categoria_literatura.png" alt="Literatura">
						<p class="category-text">Literatura</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card category-card">
						<img class="mx-auto" src="/img/categorias/categoria_deportes.png" alt="Deportes">
						<p class="category-text">Deportes</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<form action="/game" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="selectedCategory" id="selectedCategory">
			<div class="form-group d-flex justify-content-center">
				<button style="border:none;" class="text-white text-decoration-none p-2 w-auto button-play empezar" id="startGame" type="submit" name="button" value="press">Elegir</button>
				<a style="" class="text-white text-decoration-none p-2 w-auto button-play empezar" href="/game">Jugar sin categoria</a>
			</div>
		</form>

	</div>

</section>

@endsection
