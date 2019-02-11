<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('galeria') }}">Galeria</a>
        </li>
        @if(Auth::check()==false)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Inicio Sesion</a>
          </li>
        @else
        <li>
          <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesion</a>
        </li>
        <li>
          <a class="nav-link" href="{{ route('crear') }}">Crear</a>
        </li>
        @endif
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>