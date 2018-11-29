@extends('layouts.default')

@section('title')
<title>Ingresa</title>
@endsection

@section('header')
@include('includes.header')
@endsection

@section('main')
<section  class="registro container">
    <div class="container">
      <div class="row centrar-contenido">
        <div class="form-title col-12 col-lg 6">
          <div class="titulo">
            <h3><span>INGRESAR</span></h3>
          </div>
          <h4> Más que una estampa, tu estilo</h4>
        </div>
      </div>

    </div>
    <div class="form-content container centrar-contenido">
      <div class="row justify-content">
        <div class="col-12 col-md-8 col-lg-6">

          <form class="row justify-content" action="" method="post">

            <?php
            // echo $autenticador->errorLogueo;
            ?>

            <label class="etiqueta col-12 col-md-10 col-lg-10">Email:</label>

            <input class="col-12 col-md-10 col-lg-10" type="text" name="userMail" placeholder="example@example.com"  value=<?php echo $_POST['userMail']??'';?>>
            <?php
            // echo $validaLogueo->getErrorEmail();
            ?>

            <br><br>


            <label class="etiqueta col-12 col-md-10 col-lg-10" for="">Contraseña:</label>

            <input class="col-12 col-md-10 col-lg-10" type="password" name="userPass" maxlength="20" placeholder="*******" value=<?php echo $_POST['userPass']??'';?> >



            <div class="col-12 centrar-contenido">
              <button class="nice-bottom"type="submit"> Iniciar sesión </button>
            </div>
          </form>
        </div>

      </div>
    </div>

  </section>
@endsection

@section('footer')
	@include('includes.footer')
@endsection
