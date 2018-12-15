@extends('layouts.default')
@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('main')

	<!-- CARRUSEL -->

	<div id="carouselExampleIndicators" class="carousel slide fotos" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="imagenes/carousel/remera2.png" alt="foto 1">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="imagenes/carousel/remera3.png" alt="foto 2">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="imagenes/carousel/remera1.png" alt="foto 3">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>


	<!-- Categorias -->
	<section class="categorias">

	<div id="galeria">
		<div class="categ">
			<a href="remeras.php">
				<!-- <h4>REMERAS</h4> -->
				<img src="imagenes/Categorias/hombre/cate3.png" alt="calse remera 1">
			</a>
		</div>
		<div>
			<a href="">
				<!-- <h4>CAMPERAS</h4> -->
				<img src="imagenes/Categorias/hombre/cate3.png" alt="calse remera 2">
			</a>
		</div>
		<div>
			<a href="">
				<!-- <h4>PANTALONES</h4> -->
				<img src="imagenes/Categorias/hombre/cate3.png" alt="calse remera 3">
			</a>
		</div>



	</div>

</section>
@endsection


@section('footer')
	@include('includes.footer')
@endsection

<script src="js/registerValidate.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
