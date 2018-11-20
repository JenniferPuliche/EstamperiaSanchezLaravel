@extends('layouts.default')

@section('title')
  <title> Registro - Estamperia Sanchez</title>

@section('links')
  <link rel="stylesheet" type="text/css" href="resources/css/registro.css">
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<section>
  @include('includes.header')
</section>


@section('main')

<section class="registro container">
  <div class="container">
    <div class="row centrar-contenido">
      <div class="form-title col-12 col-lg 6">
        <h2> REGISTRARSE </h2>
        <h2> Tus mejores estampas, a un click </h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form method="post" class="contact-form">
          <div class="form-group">
            <label for="fullName">Nombre completo:</label>
            <input type="text" name="userName" id="fullName" class="form-control" value=<?php echo $_POST['userName']??'';?>>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="userMail" id="email" class="form-control" value=<?php echo $_POST['userMail']??'';?>>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="phone">Teléfono de contacto:</label>
            <input type="text" name="userPhone" id="phone" class="form-control" value=<?php echo $_POST['userPhone']??'';?>>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Mínimo 8 caracteres" name="userPass" id="password" class="form-control" value=<?php echo $_POST['userPass']??'';?>>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="rePassword">Repetir Contraseña:</label>
            <input type="password" name="userPassCheck" id="rePassword" class="form-control" value=<?php echo $_POST['userPassCheck']??'';?>>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
          <label class="etiqueta col-12 offset-md-1 col-md-2 col-lg-2">Género:</label>
            <label class="col-6 col-md-4"><input type="radio" name="userGender" value="m"
              <?php
              if(!isset($_POST['userGender'])){
                echo '';
              }else if ($_POST['userGender']==='m') {
                  echo 'checked';}?> > Masculino</label>
            <label  class="col-6 col-md-4"><input type="radio" name="userGender" value="f"
              <?php
              if(!isset($_POST['userGender'])){
                echo '';
              }else if ($_POST['userGender']==='f') {
                  echo 'checked';}?> > Femenino</label><label class="none col-0 col-md-1"></label>
            </div>

            <label for="">
              Avatar:
              <input type="file" name="foto" value="">

            </label>


          <div class="col-12 centrar-contenido">
            <button class="nice-bottom" type="submit">Registrarse</button>
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
