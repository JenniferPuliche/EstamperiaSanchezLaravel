<header>
  <nav id="navBar" class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="home"><img src="imagenes/logo.png" width="160px" class="d-inline-block align-top" alt="logo"></a>
    <button class="navbar-toggler" id="hamburguer" margin-left="auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto ml-auto">
            <li class="navbar-brand">
              <a class="nav-link" href="faqs">¿PREGUNTAS?</a>
            </li>
            <li class="navbar-brand dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="remeras">Remeras</a>
                <a class="dropdown-item" href="producto.php">Camperas</a>
                <a class="dropdown-item" href="producto.php">Pantalones</a>
            </div>
          </li>

            <!-- @if (Route::has('login'))
                @auth
              <li class="navbar-brand">
                <a class="nav-link" href="home">MI CUENTA</a>
              </li>
              @else
              <li class="navbar-brand">
                <a class="nav-link" href="login">INGRESA</a>
              </li>
              @if (Route::has('register'))
              <li class="navbar-brand">
                  <a class="nav-link" href="register">REGISTRATE</a>
              </li>
              @endif
          @endauth
        @endif -->



        @guest
            <li class="navbar-brand">
                <a class="nav-link" style="font-size:20px" href="{{ route('login') }}">INGRESA</a>
            </li>
            <li class="navbar-brand">
                @if (Route::has('register'))
                    <a class="nav-link" style="font-size:20px" href="{{ route('register') }}">REGISTRATE</a>
                @endif
            </li>
        @else
            <li class="navbar-brand dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="font-size:15px" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        SALIR
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest



      </ul>

      <div class="">
        <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
          <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar..." aria-label="Buscar">
          <button class="btn btn-danger mr-auto ml-auto" type="submit">Buscar</button>
        </form>
      </div>
      <div class="toggle"></div>

      </div>
      <br><br>
  </nav>
</header>
