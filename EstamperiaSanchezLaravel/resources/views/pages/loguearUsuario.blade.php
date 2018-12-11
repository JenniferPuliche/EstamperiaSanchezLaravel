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
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

          <form class="contact-form" action="" method="post">

            <?php
            // echo $autenticador->errorLogueo;
            ?>

            <div class="form-group">
            <label for="email">hola:</label>
            <input class="form-control" type="text" name="userMail" placeholder="Ingrese su correo electrónico"  value=<?php echo $_POST['userMail']??'';?>>
            <?php
            // echo $validaLogueo->getErrorEmail();
            ?>
            </div>

            <!-- <br><br> -->

            <div class="form-group">
            <label  for=""> tutia:</label>
            <input class="form-control" type="password" name="userPass" maxlength="20" placeholder="Ingrese su contraseña" value=<?php echo $_POST['userPass']??'';?> >
            </div>


            <div class="dorm-goup justify-content-center" style="display:flex">
              <button class="btn btn-light" type="submit"> Iniciar sesión </button>
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
