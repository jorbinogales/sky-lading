
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @if (Auth::check())
        

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('nav.clients')">
                <a class="nav-link" href="{{ route('clients.index') }}"><i class="fa fa-user-o mr-2" aria-hidden="true"></i> Clientes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @yield('nav.mails')">
                <a class="nav-link" href="{{ route('mails.index') }}"><i class="fa fa-envelope-open mr-2" aria-hidden="true"></i> Contactos</a>
            </li>
            {{-- dropdown --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
            {{-- Dropdown --}}

            {{-- <li class="nav-item @yield('nav.dashboard')">
                <a class="nav-link" href="{{ route('dashboard.index') }}" tabindex="-1"><i class="fa fa-bar-chart mr-2" aria-hidden="true"></i> Estadísticas</a>
            </li> --}}

        </ul>

        <form action="{{ route('logout') }}" id="logout-form" method="POST">
            {{ csrf_field() }}
            <a href="#" class="text-white" onclick="getElementById('logout-form').submit()">Cerrar Sesión</a>
        </form>
    </div>
    @endif

</nav>