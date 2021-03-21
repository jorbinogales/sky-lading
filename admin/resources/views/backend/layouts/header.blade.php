
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @if (Auth::check())


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('contacts.index')">
                <a class="nav-link" href="{{ url('/contacts') }}"><i class="fa fa-envelope-open mr-2" aria-hidden="true"></i> Contactos</a>
            </li>
        </ul>

        <form action="{{ route('logout') }}" id="logout-form" method="POST">
            {{ csrf_field() }}
            <a href="#" class="text-white" onclick="getElementById('logout-form').submit()">Cerrar Sesión</a>
        </form>
    </div>
    @endif

</nav>
