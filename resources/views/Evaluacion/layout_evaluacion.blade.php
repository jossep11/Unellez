<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{secure_asset('js/core/jquery.3.2.1.min.js')}}"></script>
    
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    

    <script src="{{secure_asset ('js/plugin/webfont/webfont.min.js')}}"></script>
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["{{secure_asset ('css/app.css')}}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    @yield('css')
    <link rel="stylesheet" href="{{secure_asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{secure_asset ('css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{secure_asset ('css/atlantis.css') }}">
    <link rel="stylesheet" href="{{secure_asset ('css/styles.css') }}">
   

    <title>Evaluación </title>
</head>

<body>
    <div class="wrapper">

        <div class="main-header">
            <!-- Logo Header -->
            
            <div class="logo-header" data-background-color="blue">

                <a href="" class="logo">
                
                    <img src="{{secure_asset('logo1.png')}}" alt="logo" class="navbar-brand">
                    <span>
                    CONOPAIMA
                    </span>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <button class="topbar-toggler more"><i class="fas fa-ellipsis-v"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
  
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">            
                       
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <i class="fas fa-caret-down logout"></i> 
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">

                                            <i class="fa fa-user" ></i>

                                            <div class="u-text">
                                                <h4>{{$user = auth()->user()->name}} {{$user = auth()->user()->Apellido}}</h4>
                                                <p class="text-muted">{{$user = auth()->user()->email}}</p>  

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <form  action="{{route("logout")}}" method="post">
                                        
                                            @csrf
                                        
                                       
                                         <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                                     </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                             <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    {{$user = auth()->user()->name}} {{$user = auth()->user()->Apellido}}
                                    <br>
                                    @role('Administrador')
                                    Administrador
                                    @else
                                    Usuario
                                    @endrole
                                    {{--The next line show the user's name conected--}}
                                    {{-- <span class="user-level">{{$user = auth()->user()->name}}</span>--}}
                                <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
       
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a class="text-align-center" href="" >
                                <i class="fas fa-home"></i>
                            <p class="ProcesoAnalitico">Proceso Analitico <br> Organizacional</p>
                            </a>
                       
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>


                        {{-- @role('S_Admin|viewer') --}}

        @role('Usuario')
                    <li class="nav-item">
                        <a href="/formarmatriz">
                            <i class="far fa-chart-bar"></i>
                            <p>Matriz de Análisis</p>
                            <span class="caret"></span>
                        </a>
                    </li>
        @endrole

        @role('Administrador')
        <li class="nav-item">
            <a href="/matriz_analisis_admin">
                <i class="far fa-chart-bar"></i>
                <p>Matriz de Análisis</p>
                <span class="caret"></span>
            </a>

            <div class="collapse show" id="forms">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="/bandeja_entrada">
                            <span class="sub-item">Bandeja de entrada</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @endrole
                        {{-- @endrole --}}
    
          

                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">


            <div class="content">
                @yield('contenido')


            </div>
        </div>

    </div>

    <!--   Core JS Files   -->

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   --}} 
   
    <script src="{{secure_asset('js/core/popper.min.js')}}"></script>
    <script src="{{secure_asset('js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{secure_asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{secure_asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{secure_asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{secure_asset('js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    {{-- <script src="{{secure_asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script> --}}

    <!-- Chart Circle -->
    <script src="{{secure_asset('js/plugin/chart-circle/circles.min.js')}}"></script>


    <!-- Datatables -->
    <script src="{{secure_asset('js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{secure_asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

   
    <!-- Sweet Alert -->
    <script src="{{secure_asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{secure_asset('js/atlantis.js')}}"></script>

    <script src="{{secure_asset('js/IdentificadorIndex.js')}}"></script>    
    
    <script src="{{secure_asset('js/validation.js')}}"></script>   
    <script src="{{secure_asset('js/Jp.js')}}"></script>   


</body>

</html>