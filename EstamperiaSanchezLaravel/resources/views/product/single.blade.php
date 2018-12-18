@extends('layouts.default')

@section('title')
<title>{{$product->name}}</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('main')

<div class="container">

	<div class="row">

		<div class="col-sm-8 cont-producto">

			<!-- ACA VA CAROUSEL CON ZOOM PARA VARIABLES DE PRODUCTO -->

			<img  class="img-producto" src="/{{ $product->image }}" alt="{{$product->name}}" width="100%">
		</div>

		<sidebar class="col-sm-4  cont-descripcion" >
			<br><br><br>

			<h3> {{$product->name}}</h3>

			<!-- FORMULARIO COMPRA, Debe recibir datos no esta implementado el required.  -->

			<form class="formCompra" action="Gracias.php" method="post">

				<div class="info">
					<br>
					<p>
						{{$product->description}}.
					</p>
					<div class="Precio">
						<h2>{{$product->retail_price}}<small>,99</small></h2>
						<h6> <small> No incluye costos de envío</small></h6>
					</div>
				</div>

				<strong>SELECCIONA UN TALLE</strong>
					<br>

						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="XS"> <span class="Talle"> XS </span>  </label>
						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="S"> <span class="Talle"> S </span>  </label>
						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="M"> <span class="Talle"> M </span>  </label>
						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="L"> <span class="Talle"> L </span>  </label>
						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="XL"> <span class="Talle"> XL </span>  </label>
						<label class="elDelTalle"> <input type="radio" name="shirtSize" value="XXL"> <span class="Talle"> XXL </span>  </label>

				<!-- TALLES HOMBRE Y MUJER -->

				<div class="info">
					<span> <strong></strong></span>

					<button type="button" class="btn btn-query" data-toggle="collapse" href="#TallesHombre" role="button" aria-expanded="false" aria-controls="collapseExample">
						TALLES<span> HOMBRE</span>
					</button>

					<button type="button" class="btn btn-query" data-toggle="collapse" href="#TallesMujer" role="button" aria-expanded="false" aria-controls="collapseExample">
						TALLES<span> DAMA</span>
					</button>

					<div class="answers collapse" id="TallesHombre" >
						<div >
							<p>

								<table class="table">
									<thead>
										<tr>
											<th scope="col">TALLE</th>
											<th scope="col">ANCHO</th>
											<th scope="col">LARGO</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<!--  TALLE XS -->
											<td> <span>XS</span> </td>
											<td>44 cm.</td>
											<td>66 cm.</td>
										</tr>
										<tr>
											<!-- TALLE S -->
											<td> <span>S</span> </td>
											<td>48 cm.</td>
											<td>70 cm.</td>
										</tr>
										<tr>
											<!-- TALLE M -->
											<td> <span>M</span> </td>
											<td>53 cm.</td>
											<td>72 cm.</td>
										</tr>
											<!-- TALLE L -->
										<tr>
											<td> <span>L</span> </td>
											<td>56 cm.</td>
											<td>74 cm.</td>
										</tr>
											<!-- TALLE XL -->
										<tr>
											<td> <span>XL</span> </td>
											<td>59 cm.</td>
											<td>76 cm.</td>
										</tr>
											<!-- TALLE XXL -->
										<tr>
											<td> <span>XXL</span> </td>
											<td>62 cm.</td>
											<td>80 cm.</td>
										</tr>
									</tbody>
								</table>
						</div>
					</div>

					<div class="answers collapse" id="TallesMujer" >
						<div >
							<p>

								<p>

									<table class="table">
										<thead>
											<tr>
												<th scope="col">TALLE</th>
												<th scope="col">ANCHO</th>
												<th scope="col">LARGO</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<!-- TALLE S -->
												<td> <span>S</span> </td>
												<td>39 cm.</td>
												<td>59 cm.</td>
											</tr>
											<tr>
												<!-- TALLE M -->
												<td> <span>M</span> </td>
												<td>43 cm.</td>
												<td>61 cm.</td>
											</tr>
												<!-- TALLE L -->
											<tr>
												<td> <span>L</span> </td>
												<td>46 cm.</td>
												<td>63 cm.</td>
											</tr>
												<!-- TALLE XL -->
											<tr>
												<td> <span>XXL</span> </td>
												<td>48 cm.</td>
												<td>66 cm.</td>
											</tr>

										</tbody>
									</table>

								</p>
						</div>
					</div>
				</div>
				<div class="info">
					<strong>SELECCIONA UN COLOR</strong>
					<br>

					<label class="elDelColor"> <input type="radio" name="shirtColor" value="bordo"> <span class="Bordo"> BORDÓ </span>  </label>
					<label class="elDelColor"> <input type="radio" name="shirtColor" value="azul M"> <span class="AzulM"> AZUL MARINO </span>  </label>
					<label class="elDelColor"> <input type="radio" name="shirtColor" value="Blanco"> <span class="Blanco"> BLANCO </span>  </label>

				</div>

				<br>

				<button class="btnCompra"  type="submit" name="button"> <h4> AGREGAR AL CARRITO </h4></button>

			</form>
		</div>


	</sidebar>

</div>



@endsection

@section('footer')
	@include('includes.footer')
@endsection
