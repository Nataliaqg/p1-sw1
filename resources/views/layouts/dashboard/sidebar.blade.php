<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- MODULO 1-->
                    <div class="sidenav-menu-heading">Title 1</div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Menu 1
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="dashboard-1.html">
                                Vista 1
                            </a>
                            <a class="nav-link" href="dashboard-2.html">Vista 2</a>
                            <a class="nav-link" href="dashboard-3.html">Vista 3</a>
                        </nav>
                    </div>  
                    <!-- MODULO 2-->
                    <div class="sidenav-menu-heading">Title 2</div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i data-feather="grid"></i></div>
                        Menu 2
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <a class="nav-link" href="dashboard-1.html">
                                Vista 1
                            </a>
                            <a class="nav-link" href="dashboard-1.html">
                                Vista 2
                            </a>
                            <a class="nav-link" href="dashboard-1.html">
                                Vista 3
                            </a>
                        </nav>
                    </div>
                    <!-- MODULO 3-->
                    <div class="sidenav-menu-heading">Title 3</div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i data-feather="layout"></i></div>
                        Menu 3
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
                         <a class="nav-link" href="dashboard-1.html">
                            Vista 1
                        </a>
                        <a class="nav-link" href="dashboard-1.html">
                            Vista 2
                        </a>
                        <a class="nav-link" href="dashboard-1.html">
                            Vista 3
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Has iniciado sesion como:</div>
                    <div class="sidenav-footer-title">{{Auth::user()->name}}</div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>

            
            {{-- Container azul --}}
            {{-- <header class="py-10 mb-4 bg-gradient-primary-to-secondary">
                <div class="container-xl px-4">
                    <div class="text-center">
                        <h1 class="text-white">Bienvenido a PhotoFiesta !</h1>
                        <p class="lead mb-0 text-white-50">"La mejor manera de revivir tus eventos favoritos"</p>
                    </div>
                </div>
            </header> --}}

            <!-- Contenido principal del dashboard-->
            <div class="container-xl px-4">
               @yield('sidebar_content')
            </div>
            
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; Natalia Quiroga 2023</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>