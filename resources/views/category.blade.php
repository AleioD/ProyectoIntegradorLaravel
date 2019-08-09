@extends('layouts.master')

@section('content')

<div class="container-ppal"> <!-- Contenedor ppal -->


	<section class="container-section">
		<span class="container-about">
			<h2 class="h2-about">Elegí una categoría</h2>

			<!--carrousel bootstrap-mobile-->

			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-sm-3 bg-white">
								<img src="/img/categorias/categoria_arte.png">
							</div>
							<div class="col-sm-3  ">
								<img src="/img/categorias/categoria_ciencia.png">
							</div>
							<div class="col-sm-3">
								<img src="/img/categorias/categoria_cultura.png">
							</div>
							<div class="col-sm-3">
								<img src="/img/categorias/categoria_geografia.png">
							</div>
						</div>
						<!--/row-->
					</div>
					<div class="item">
					<div class="row">
						<div class="col-sm-3">
							<img src="/img/categorias/categoria_literatura.png">
						</div>
						<div class="col-sm-3">
							<img src="/img/categorias/categoria_general.png">
						</div>
					</div>
				</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!--FIN-carrousel bootstrap-->
</span>


<div class="button-play">
	<a href="#">Jugar</a>
</div>

</section>
</div>

@endsection