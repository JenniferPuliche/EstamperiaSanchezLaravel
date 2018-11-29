@extends('layouts.default')

@section('title')
<title>Remeras</title>
@endsection
	<link rel="stylesheet" type="text/css" href="css/remeras.css">

@section('header')
@include('includes.header')
@endsection

@section('main')

<div class="botones">
	<h3>Remeras</h3>
	<input type="button" name="hombre" value="Hombre" >
	<input type="button" name="mujer" value="Mujer" onclick="mostrar()">
</div>

<section>
<div class="remeras">
	<div class="remera" id="hombre">
		<a href="producto">
			<img src="imagenes/Categorias/hombre/bordo.png" alt="calse remera 0" class="imgreme">
			<h5 class="nombreRemera">NASA</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate1.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate2.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate3.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate4.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Dark</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate5.png" alt="calse remera 1" class="imgreme" >
			<h5 class="nombreRemera">El Marginal</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="">
			<img src="imagenes/Categorias/hombre/cate6.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate7.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate8.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Sons of Anarchy</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate1.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate2.png" alt="calse remera 2" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate3.png" alt="calse remera 3" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate4.png" alt="calse remera 4" class="imgreme">
			<h5 class="nombreRemera">Dark</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate5.png" alt="calse remera 5" class="imgreme">
			<h5 class="nombreRemera">El Marginal</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate6.png" alt="calse remera 6" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate7.png" alt="calse remera 7" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="">
			<img src="imagenes/Categorias/mujer/cate8.png" alt="calse remera 8" class="imgreme">
			<h5 class="nombreRemera">Sons of Anarchy</h5>
		</a>
	</div>

</div>


</section>

@endsection

@section('footer')
	@include('includes.footer')
@endsection
