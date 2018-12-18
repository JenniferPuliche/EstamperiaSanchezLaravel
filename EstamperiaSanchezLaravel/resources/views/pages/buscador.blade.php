@extends('layouts.default')
@extends('layouts.app')

@section('title')
<title>Búsqueda</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('listas')

	<form method="get" action="">
	    @csrf
	    <input id="buscarInput" name="buscar" class="form-control mr-sm-2" type="Buscar" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-danger mr-auto ml-auto" style="color:red" type="submit">Buscar</button>
  	</form>
	<ul id="busquedas">

	</ul>
@endsection

<script src="/js/buscador.js"></script>