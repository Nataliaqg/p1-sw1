<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ route('snapMatch.index') }}"><i class="fa-solid fa-camera-retro"></i> SnapMatch !</a>
    </form>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        {{-- Solo muestra el user dropdown si ya inicio sesion --}}
        @auth 
            {{-- Componentes notificacion --}}
            @livewire('components.notification')
             {{-- Componentes carrito --}}
             @livewire('components.cart')
            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true"><img class="img-fluid"
                        src="@if (Auth::user()->photo_path1) {{ asset(Auth::user()->photo_path1) }} @else {{ asset('assets/img/illustrations/profiles/profile-1.png') }} @endif" /></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="@if (Auth::user()->photo_path1) {{ asset(Auth::user()->photo_path1) }} @else {{ asset('assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{Auth::user()->name}}</div>
                            <div class="dropdown-user-details-email">{{Auth::user()->email}}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('user.index')}}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Configuracion del Perfil
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Cerrar sesion
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endauth
    </ul>
</nav>
