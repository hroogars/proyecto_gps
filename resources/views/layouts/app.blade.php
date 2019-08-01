<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Sistema CCP </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('logo.ico') }}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <!-- Theme initialization -->
        <link rel="stylesheet" id="theme-style" href="{{ asset('css/app.css') }}">
        <!-- Personal -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/sweetalert2.min.css') }}">
      
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

        <style type="text/css">
            .hidden {
              display: none !important;
            }
        </style>
        
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-search">
                        <form role="search">
                            <div class="input-container">
                                <i class="fa fa-search"></i>
                                <input type="search" placeholder="Buscar">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <a href="" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <sup>
                                        <span class="counter">2</span>
                                    </sup>
                                </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url({{asset('assets/faces/default.png')}})"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Ricardo</span> pushed new commit:
                                                        <span class="accent">Proyecto Base para el sistema ccp, contien...

                                                        </span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url({{asset('assets/faces/default.png')}})"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Ricardo</span> pushed new commit:
                                                        <span class="accent">Modifcacion de la base de proyecto, se integra...</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li>
                                                <a href=""> ver todo </a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url({{asset('assets/faces/default.png')}})"> </div>
                                    <span class="name"> {{ Auth::user()->name }}  </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Perfil </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-bell icon"></i> Notificaciones </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i> Configuración </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        <i class="fa fa-power-off icon"></i> Salir </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span>
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div> Sistema CCP </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="{{ url('/home') }}">
                                        <i class="fa fa-home"></i> Inicio </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-clock-o"></i> Control Hora
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href=#> nada </a>
                                        </li>
                                        <li>
                                            <a href=#> nada </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                
                                <li>
                                    <a href="">
                                        <i class="fa fa-user-md"></i> Test Ejemplos 
                                        <i class="fa arrow"></i>
                                    </a>
                                        
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="{{ route('user.index') }}"> Usuarios </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('userType.index') }}"> Tipos Usuarios </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('permission.index') }}"> Permisos </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('userTypePermission.index') }}"> Tipo Usuario Permiso </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('institution.index') }}"> Instituciones </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('career.index') }}"> Carreras </a>
                                        </li>
                                    </ul>
                                </li>
                               
                                
                                
                            </ul>
                        </nav>
                    </div>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
               
                    @yield('content')
                        
                <footer class="footer">
                    <div class="footer-block author">
                        <ul>
                            <li> creado por
                                <a href="http://www.zentagroup.com/" target="_blank">Zenta</a>
                            </li>
                    
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dist/js/sweetalert2.min.js') }}"></script>
        <!--script type="text/javascript" src="{{ asset('plugins/jQuery/jquery-3.1.1.min.js') }}"></script-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

        

        @yield('scriptFooter')
    </body>
</html>