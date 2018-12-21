@extends('layouts.default')
@extends('layouts.app')

@section('title')
<title>Búsqueda</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('main')

	<form method="get" action="">
	    @csrf
	    <input id="buscarInput" name="buscar" class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar">
        <input class="btn btn-danger mr-auto ml-auto" style="color:red" type="submit" value="Buscar"></input>
  	</form>
	<ul id="busquedas">

	</ul>
@endsection

<script src="/js/buscador.js"></script>