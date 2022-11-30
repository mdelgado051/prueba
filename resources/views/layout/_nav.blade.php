<nav class="navbar navbar-light site-nav bg-white navbar-expand-md px-md-4 py-md-0 fixed-top">
    <a class="navbar-brand p-0" href="{{ route('home') }}">
        <img src="{{ asset('./img/icons/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="logo sertei">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{  asset('./img/icons/icon-toggler.png')  }}" alt="">
    </button>

    <div class="collapse navbar-collapse" id="navbar-main">
        <ul class="navbar-nav d-md-flex ml-auto text-center bg-white">
            <li class="nav-item {{ request()->is('quienes-somos') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('us') }}">Quiénes somos</a>
            </li>

            <li class="nav-item dropdown {{ request()->is('soluciones*') ? 'active' : '' }}">
                <a class="nav-link" href="#" id="navbarDropdownsolutions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Soluciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownsolutions">
                    <a class="dropdown-item dropdown-item-top {{ request()->is('soluciones/infraestructura') ? 'active' : '' }}" href="{{ route('infrastructure') }}">
                        Infraestructura
                    </a>
                    <a class="dropdown-item {{ request()->is('soluciones/seguridad') ? 'active' : '' }}" href="{{ route('security') }}">
                        Seguridad
                    </a>
                </div>
            </li>

            <li class="nav-item {{ request()->is('servicios') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('services') }}">Servicios</a>
            </li>

            <li class="nav-item {{ request()->is('aliados-estrategicos') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('allies') }}">Aliados estratégicos</a>
            </li>

            <li class="nav-item {{ request()->is('blog*') || request()->is('evento*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item {{ request()->is('soporte') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('support') }}">Soporte</a>
            </li>
            <li class="nav-item {{ request()->is('contacto') ? 'active' : '' }}">
                <a class="nav-link last-child" href="{{ route('contact') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>