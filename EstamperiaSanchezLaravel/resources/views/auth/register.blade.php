@extends('layouts.default')

@section('title')
  <title> Registro - Estamperia Sanchez</title>

@section('links')
  <link rel="stylesheet" type="text/css" href="resources/css/registro.css">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<section>
  @include('includes.header')
</section>


@section('main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div >
                  <h3><span class="titleH3">REGISTRATE</span></h3>
                </div>
                <h4> Tus mejores estampas, a un click </h4>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="contact-form">
                        @csrf

                        <!-- <div class="form-group">
                          <label for="fullName">Nombre completo:</label>
                          <input type="text" name="name" id="fullName" class="form-control" value=<?php echo $_POST['name']??'';?>>
                          <div class="invalid-feedback">ldflskflk</div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">Nombre completo:</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>
                              <div class="invalid-feedback"></div>
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">Correo electrónico:</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">Contraseña:</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label text-md-right">Repetir Contraseña:</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                              <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-12 text-md-right">
                                <button type="submit" class="btn btn-primary">
                                    Registrate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/registerValidate.js"></script>
@endsection

@section('footer')
  @include('includes.footer')
@endsection