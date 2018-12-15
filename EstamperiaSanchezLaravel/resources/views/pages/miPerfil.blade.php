@extends('layouts.default')
@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection

@section('header')
@include('includes.header2')
@endsection



@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
              <div>
                <h3>Hola<span class="titleH3"> {{ Auth::user()->name }}</span></h3>
              </div>




							<section class="categorias">

							<div id="galeria" style="display:flex">
								<div class="userDates">
									<ul>
										<li class="userDate">Email<span class="titleH3"> {{ Auth::user()->email }}</span></li>
										<li class="userDate">DNI:<span class="titleH3"> {{ Auth::user()->dni }}</span></li>
										<li class="userDate">Teléfono<span class="titleH3"> {{ Auth::user()->tel }}</span></li>
										<li class="userDate">Sexo<span class="titleH3"> {{ Auth::user()->sexo }}</span></li>
								</ul>
								</div>
								<div class="categ">
									<img class="miAvatar" src="imagenes/avatars/{{ Auth::user()->avatar }}"  alt="miAvatar">
								</div>



							</div>

						</section>
					</div>
				</div>
			</div>
		</div>


@endsection


@section('footer')
	@include('includes.footer')
@endsection

<script src="js/registerValidate.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
