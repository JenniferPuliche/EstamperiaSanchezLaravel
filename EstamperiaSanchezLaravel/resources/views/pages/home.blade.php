@extends('layouts.default')

@section('title')
<title>Home</title>
@endsection

@section('header')
@include('includes.header')
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
