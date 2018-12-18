@extends('layouts.default')
@extends('layouts.app')
@section('title')
  <title>Editar mi perfil</title>

@section('links')
  <link rel="stylesheet" type="text/css" href="resources/css/registro.css">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

@section('header')
@include('includes.header2')
@endsection

@section('main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div >
                  <h3><span class="titleH3">Editar mi perfil</span></h3>
                </div>
                <h4> </h4>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}" class="contact-form" enctype="multipart/form-data">
                        @csrf

                        <!-- <div class="form-group">
                          <label for="fullName">Nombre completo:</label>
                          <input type="text" name="name" id="fullName" class="form-control" value=<?php echo $_POST['name']??'';?>>
                          <div class="invalid-feedback">ldflskflk</div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">Nombre completo:</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}"  autofocus>
                              <div class="invalid-feedback"></div>
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-form-label text-md-right">Numero de teléfono:</label>
                                <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel', $user->tel) }}" >
                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-form-label text-md-right">Género:</label>
                                <select class="custom-select {{ $errors->has('sexo') ? ' is-invalid' : '' }}" name="sexo" value="{{ old('sexo', $user->sexo) }}" id="sexo">
                                  @if ($errors->has('sexo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                  @endif
                                  <option selected=""></option>
                                  <option>Femenino</option>
                                  <option>Masculino</option>
                                </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-form-label text-md-right">Número de DNI:</label>
                                <input id="dni" type="dni" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="{{ old('dni', $user->dni) }}" >
                                @if ($errors->has('dni'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-form-label text-md-right">Pais de origen:</label>
                            <select class="custom-select" id="paises" name="pais" >
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row" id="prov" style="display:none">
                            <label for="text" class="col-form-label text-md-right">Provincia:</label>
                            <select class="custom-select" id="provincias" name="provincia" >
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" >
                            @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                            @endif
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger mr-auto ml-auto">
                                    Actualizar Perfil
                                </button>
                            </div>
                        </div>

                        <!-- <div class="form-group row"  style="display:flex">

                            <a class="btn btn-block-light btn-social btn-google" >
                              <i class="fab fa-google-plus-g" style="color:red" href="/login/google"></i>
                              <h7>Iniciar sesión con Google</h7>
                            </a>
                            <a class="btn btn-block-light btn-social btn-google" >
                              <i class="fab fa-facebook-square" style="color:#3b5998" href="/login/facebook"></i>
                              <h7>Iniciar sesión con Facebook</h7>
                            </a>

                        </div> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/editPerfilValidate.js"></script>
@endsection

@section('footer')
  @include('includes.footer')
@endsection

<script src="/js/dayNight.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>