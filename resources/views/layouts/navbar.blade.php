<header>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
      <img src="/img/pelusi.png" width="60" height="60" class="d-inline-block align-top" alt="pelusi">
      <span class="logo"><span class="red">R</span>epelusate</span>
    </a>

    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/piezas">Piezas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pelusis">Pelusis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/eventos">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/artesanias">Como lo hacemos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/amigos">Amigos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://tienda.repelusate.com" target="_blank">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacto">Contacto</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())

          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
    </div>
  </nav>
</header>
