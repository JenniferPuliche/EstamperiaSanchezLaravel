<header>
  <nav id="navBar" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/home"><img src="/imagenes/logo.png" width="160px" class="d-inline-block align-top" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto">
          <li class="navbar-brand">
            <a class="nav-link" href="/faqs">¿PREGUNTAS?</a>
          </li>
          <li class="navbar-brand dropdown">
            <a class="nav-link" href="{{ route('product.index') }}" id="navbarDropdownMenuLink" role="button" >PRODUCTOS</a>
      {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a  class="dropdown-item" href="/product">Remeras</a>
              <a  class="dropdown-item" href="/product/example">Camperas</a>
              <a  class="dropdown-item" href="/product/example">Pantalones</a>
          </div> --}}
        </li>

      @guest
          <li class="navbar-brand">
              <a  class="nav-link" style="font-size:20px" href="{{ route('login') }}">INGRESA</a>
          </li>
          <li class="navbar-brand">
              @if (Route::has('register'))
                  <a  class="nav-link" style="font-size:20px" href="{{ route('register') }}">REGISTRATE</a>
              @endif
          </li>
      @else
          <li class="navbar-brand dropdown">
              <a id="navA" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                @if(\Auth::user()->admin == '1')
                <a  class="dropdown-item" style="font-size:15px" href="/product/create">
                    Agregar Producto
                </a>
                @endif

                <a  class="dropdown-item" style="font-size:15px" href="{{ route('profile') }}">
                    Mi Perfil
                </a>

                <a  class="dropdown-item" style="font-size:15px" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      Salir
                </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

              </div>
          </li>
          <li class="navbar-brand">
          <a href="#"><i style="font-size:20px" class="fas fa-shopping-cart"></i> </a>
        </li>

      @endguest

      <li class="navbar-brand">
        <span class="toggle"></span>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button  class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



</header>
