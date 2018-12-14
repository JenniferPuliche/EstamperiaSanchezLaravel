@extends('layouts.default')

@section('title')
<title>Remeras</title>
@endsection
	<link rel="stylesheet" type="text/css" href="/css/remeras.css">

@section('header')
@include('includes.header')
@endsection

@section('main')

<div class="botones">
	<h3>Remeras</h3>
</div>

	<div class="dorm-goup justify-content-center" style="display:flex">
	<input class="btn btn-light" type="button" name="hombre" value="Hombre" >
	<input class="btn btn-light" type="button" name="mujer" value="Mujer" onclick="mostrar()">
</div>

<section>
	<div class="remeras">
		@forelse ($products as $product)
			{{--EMPIEZA CADA PRODUCTO--}}
			<div class="remera" id="hombre">
				<a href="/product/example">
					<img src="/{{ $product->image }}" alt="calse remera {{ $product->id }}" class="imgreme">
					<h5 class="nombreRemera">{{ $product->name }}</h5>
				</a>
				<a href="/product/edit/{{$product->id}}"> Editar </a>
				<a href="/product/delete/{{$product->id}}"> Eliminar</a>
			</div>
			{{--TERMINA CADA PRODUCTO--}}
		@empty
				<div class="alert alert-danger" role="alert">
					No hay productos registrados
				</div>
		@endforelse
	</div>

<!--FLECHAS PARA NEXT O PREV !-->
{{ $products->links() }}
<!--<div class="remeras">

	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate1.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate2.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate3.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate4.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Dark</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate5.png" alt="calse remera 1" class="imgreme" >
			<h5 class="nombreRemera">El Marginal</h5>
		</a>
	</div>
	<div class="remera" id="hombre">
		<a href="/product/example">
			<img src="/imagenes/Categorias/hombre/cate6.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate7.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate8.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Sons of Anarchy</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate1.png" alt="calse remera 1" class="imgreme">
			<h5 class="nombreRemera">Breaking Bad</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate2.png" alt="calse remera 2" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate3.png" alt="calse remera 3" class="imgreme">
			<h5 class="nombreRemera">La casa de papel</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate4.png" alt="calse remera 4" class="imgreme">
			<h5 class="nombreRemera">Dark</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate5.png" alt="calse remera 5" class="imgreme">
			<h5 class="nombreRemera">El Marginal</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate6.png" alt="calse remera 6" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate7.png" alt="calse remera 7" class="imgreme">
			<h5 class="nombreRemera">Okupas</h5>
		</a>
	</div>
	<div class="remera">
		<a href="/product/example">
			<img src="/imagenes/Categorias/mujer/cate8.png" alt="calse remera 8" class="imgreme">
			<h5 class="nombreRemera">Sons of Anarchy</h5>
		</a>
	</div>

</div>-->
</section>

@endsection

@section('footer')
	@include('includes.footer')
@endsection
