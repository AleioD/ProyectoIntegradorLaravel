@extends('layouts.game')
@section('pageTitle',"Categorias")
@section('content')

	<section class="container-section">
			<h2 class="h2-about">Elegí una categoría</h2>

			<div class="container">
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
								<img class="mx-auto" src="/img/categorias/categoria_cultura.png" alt="Cultura">
								<p class="category-text">Cultura</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="card category-card">
								<img class="mx-auto" src="/img/categorias/categoria_general.png" alt="General">
								<p class="category-text">General</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="card category-card">
								<img class="mx-auto" src="/img/categorias/categoria_geografia.png" alt="Geografía">
								<p class="category-text">Geografía</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="card category-card">
								<img class="mx-auto" src="/img/categorias/categoria_literatura.png" alt="Literatura">
								<p class="category-text">Literatura</p>
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
			</div>

			<div class="button-play empezar" id="startGame">
				<a href="/game">Empezar</a>
			</div>
		</section>

	@endsection
