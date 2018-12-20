@extends('layouts.default')
@extends('layouts.app')

@section('title')
<title>Remeras</title>
@endsection
	<link rel="stylesheet" type="text/css" href="/css/remeras.css">

@section('header')
@include('includes.header2')
@endsection

@section('main')

<div class="botones">
	<h3>Todos los productos</h3>
</div>

	<div class="dorm-goup justify-content-center" style="display:flex">
		@foreach ($categories as $category)
			<a class="btn btn-light" href="/product/category/{{$category->id}}" >{{$category->name}}</a>
		@endforeach

	</div>

<section>
	<div class="remeras">
		@forelse ($products as $product)
			{{--EMPIEZA CADA PRODUCTO--}}
			<div class="remera" id="hombre">
				<a href="/product/show/{{$product->id}}">
					<img src="/storage/{{ $product->image }}" alt="calse remera {{ $product->id }}" class="imgreme">
					<h5 class="nombreRemera">{{ $product->name }}</h5>
				</a>
				@if(\Auth::user()!=NULL && \Auth::user()->admin == '1')
					<a href="/product/edit/{{$product->id}}"> Editar </a>
					<a href="/product/delete/{{$product->id}}"> Eliminar</a>
				@endif
			</div>
			{{--TERMINA CADA PRODUCTO--}}
		@empty
				<div class="alert alert-danger" role="alert">
					No hay productos registrados
				</div>
		@endforelse
	</div>


{{ $products->links() }}


@endsection

@section('footer')
	@include('includes.footer')
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
