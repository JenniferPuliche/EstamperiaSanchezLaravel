@extends('layouts.default')

@section('title')
<title>Faqs</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('main')
<div>
  <div class="container">

    <div class="titulo">
      <h3>PREGUNTAS <span>FRECUENTES</span></h3>
    </div>


    <p>
      <button type="button" class="btn btn-query btn-lg btn-block faqsbutton" data-toggle="collapse" href="#Talles" role="button" aria-expanded="false" aria-controls="collapseExample">
        Nuestros <span>TALLES</span>
      </button>
      <div class="answers collapse" id="Talles" >
        <div >

          <p>
            Nuestra idea es que cada cliente se lleve la remera que le quede perfecta, y más allá de que nuestros talles tengan medidas comunes, te recomendamos que tomes un minuto para medir una remera que te quede bien, y la compares con las que te vamos a mostrar a continuación.

            Sólo tenes que tener en cuenta que la primer medida es el ancho medido de axila a axila y la segunda es el largo!

            <table class="table">
              <h5>Remeras <span>HOMBRE</span> </h5>
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

            <br>

            <table class="table">
              <h5>Remeras <span>MUJER</span> </h5>
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

            <br>

            <table class="table">
              <h5> <span>BUZOS</span> </h5>
              <thead>
                <tr>
                  <th scope="col">TALLE</th>
                  <th scope="col">ANCHO</th>
                  <th scope="col">LARGO</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <!-- TALLE XS -->
                  <td> <span>XS</span> </td>
                  <td>49 cm.</td>
                  <td>70 cm.</td>
                </tr>
                <tr>
                  <!-- TALLE S -->
                  <td> <span>S</span> </td>
                  <td>52 cm.</td>
                  <td>73 cm.</td>
                </tr>
                  <!-- TALLE M -->
                <tr>
                  <td> <span>M</span> </td>
                  <td>54 cm.</td>
                  <td>75 cm.</td>
                </tr>
                  <!-- TALLE L -->
                <tr>
                  <td> <span>L</span> </td>
                  <td>56 cm.</td>
                  <td>77 cm.</td>
                </tr>
                  <!-- TALLE XL -->
                <tr>
                  <td> <span>XL</span> </td>
                  <td>60 cm.</td>
                  <td>79 cm.</td>
                </tr>
                  <!-- TALLE XXL -->
                <tr>
                  <td> <span>XXL</span> </td>
                  <td>64 cm.</td>
                  <td>82 cm.</td>
                </tr>

              </tbody>
            </table>

        </div>
      </div>
    </p>


    <p>
      <button type="button" class="btn btn-query btn-lg btn-block faqsbutton" data-toggle="collapse" href="#Calidad" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span>CALIDAD</span>
      </button>
      <div class="answers collapse" id="Calidad" >
        <div>
          <p>
          Son remeras <span>100% ALGODÓN Peinado 24.1 Soft</span> (o sea, muy suaves). No se deforman, ni pierden el color.
          Tienen costuras reforzadas, tapa costura y cuello Reeb.
          Sus estampados están realizados con <span>SERIGRAFÍA TEXTIL</span>. Las estampas realizadas con este método duran muchísimo! Y son muy lindas al tacto, dado que NO es algo que se pega a la remera y que se puede salir.          </div>
        </div>

      </p>

      <p>
        <button type="button" class="btn btn-query btn-lg btn-block faqsbutton" data-toggle="collapse" href="#Envios" role="button" aria-expanded="false" aria-controls="collapseExample">
          Hacemos <span>ENVIOS</span>
        </button>
        <div class="answers collapse" id="Envios" >

          Podes comprar nuestros productos desde culquier parte del país ya que contamos con mercado envíos. El cual tiene un <span>plazo aproximado de 72 hs.</span> exeptuando casos de compras al por mayor, <span>en dichos casos la demora en entrega es de 12 a 14 días habiles</span>.
            los costos de envío se abonan como un item a parte sujeto a promociones de hasta el <span>50% OFF</span> asi que atenti!
            Tus compras tienen codigo de seguimiento por ende vas a poder rastrear tu paquete en todo momento estes donde estes.
        </div>
      </p>

      <p>
        <button type="button" class="btn btn-query btn-lg btn-block faqsbutton" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseExample">
          Facilidades de <span>PAGO</span>
        </button>
        <div class="answers collapse" id="collapseFive" >

            A la hora de abonar tu compra los medios de pago son muy importantes. Por eso contamos con Mercado Pago, con esta facilidad vas a poder pagar tanto en efectivo por <span>Rapipago, Pago fácil o BAPRO</span>; como con tu tarjeta de <span>débito o crédito</span> preferida. Acomodá tus cuotas con las diferentes promociones de pago que van <span>de 3 a 12 cuotas sin interés</span>.
        </div>
      </p>

      </div>
@endsection


@section('footer')
	@include('includes.footer')
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
