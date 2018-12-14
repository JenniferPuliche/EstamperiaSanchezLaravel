@extends('layouts.default')
@extends('layouts.app')
@section('title')
<title>Editar Producto</title>
@endsection

@section('header')
@include('includes.header')
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
              <div >
                <h3><span class="titleH3">Editar Producto</span></h3>
              </div>
            </div>

              <div class="col-md-12 card-body">
                    <form method="POST" action="/product/update/{{$product->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label text-md-right">Nombre</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $product->name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                            <label for="wholesale_price" class=" col-form-label text-md-right">Precio mayorista</label>
                                <input id="wholesale_price" type="text" class="form-control{{ $errors->has('wholesale_price') ? ' is-invalid' : '' }}" name="wholesale_price" value="{{ old('wholesale_price', $product->wholesale_price) }}" required autofocus>

                                @if ($errors->has('wholesale_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wholesale_price') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                            <label for="retail_price" class=" col-form-label text-md-right">Precio Minorista</label>
                                <input id="retail_price" type="text" class="form-control{{ $errors->has('retail_price') ? ' is-invalid' : '' }}" name="retail_price" value="{{ old('retail_price', $product->wholesale_price) }}" required autofocus>

                                @if ($errors->has('retail_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('retail_price') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" >
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar producto
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
              </div>
</div>
@endsection

@section('footer')
	@include('includes.footer')
@endsection
