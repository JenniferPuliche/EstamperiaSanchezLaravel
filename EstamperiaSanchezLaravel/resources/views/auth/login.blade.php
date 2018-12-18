@extends('layouts.default')

@section('title')
<title>Ingresa</title>
@endsection

@section('header')
@include('includes.header2')
@endsection



@section('main')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
              <div >
                <h3><span class="titleH3">INGRESA</span></h3>
              </div>
              <span class="navbar-toggler-icon"></span>
              <h4>Más que una estampa, tu estilo</h4>
            </div>

              <div class="col-md-12 card-body">
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class=" col-form-label text-md-right">Correo Electrónico</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" col-form-label text-md-right">Contraseña</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Mantener la sesión iniciada
                                    </label>
                                </div>
                                <a class="btn btn-link pass" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>

                        <div class="form-group row">
                          <button type="submit" class="btn btn-danger mr-auto ml-auto justify-content-center" >
                              Entrar
                          </button>
                        </div>
                        <!-- <div class="dorm-goup justify-content-center"  style="display:flex">

                          <a class="btn btn-block-light btn-social btn-google" >
                            <i class="fab fa-google-plus-g" style="color:red" href="/login/google"></i> <h7 class="iniciarSesionCon">Iniciar sesión con Google</h7>
                          </a>
                          <a class="btn btn-block-light btn-social btn-google" >
                            <i class="fab fa-facebook-square" href="/login/facebook"></i> <h7 class="iniciarSesionCon">Iniciar sesión con Facebook</h7>
                          </a>
                        </div> -->
                    </form>
                </div>
              </div>
            </div>
</div>
<script src="/js/loginValidate.js"></script>
@endsection

@section('footer')
	@include('includes.footer')
@endsection
