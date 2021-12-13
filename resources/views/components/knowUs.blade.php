<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <!-- Scripts -->
            <script src="{{ mix('js/app.js') }}" defer></script>
            <script src="{{ asset('js/time.js') }}" defer></script>
    
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
            <link rel="stylesheet" href="{{ asset('css/SConocenos.css')}}">

            <link href="{{ mix('css/app.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    
        <link rel="icon" href="img/LOGOsolito.png">
        
        <title>Conocenos</title>
    
    </head>

<body style="background-color:#27292d;">

    <header>
        <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
            <div class="container">
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="{{ asset('img/bigblanco.png') }}" alt="" height="80px" width="160px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav nav-pills nav-fill">
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="i">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <a class="nav-link btn btn-link" href="{{route('knowUs')}}" style="color: #ffffff;">
                                Conocenos</a>
                        </li>
                        <li class="nav-item">
                                <div class="i">
                                    <i class="fas fa-user"></i>
                                </div>
                            <a class="nav-link btn btn-link" href="{{ route('login') }}" style="color: #ffffff;">
                                Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                                <div class="i">
                                    <i class="fas fa-registered"></i>
                                </div>
                            <a class="nav-link btn btn-link" href="{{ route('register') }}" style="color: #ffffff;">
                                Registrate!</a>
                        </li>
                            </div>
                        </li>
                    </ul>
                </div>
                </ul>
            </div>
        </nav>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item height-carousel active">
                    <img src="img/carrusel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item height-carousel">
                    <img src="img/carrusel2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item height-carousel">
                    <img src="img/carrusel3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <!-------- Cuadro que Acompaña el Carrusel -------------->

        <div class="contenedorletras">
            <h1>Ven y mira como esta conformado nuestro equipo</h1>

        </div>

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #27292D;"></path>
            </svg></div>
    </header>


    <div class="titulo-principal">
        <h1>¿Que es un trueque?</h1>
        <br>
        <h6 class="container text-princil">Con la colaboración de nuestro equipo Zloty puedes ayudar a
            personas que lo necesiten mediante una donación o también puedes registrar tu fundación 
            para ayudar a muchas mas personas.</h6>
    </div>

    <div class="titulo-principal">
        <h1>¿Quiénes somos?</h1>
        <br>
        <h6 class="container text-princil">Sistema de comercio que sirve para el  intercambio de bienes materiales o de servicios 
            por otros objetos o productos . Se diferencia de la compraventa habitual en que no intermedia el dinero como 
            representante del valor en la transacción. Al contrato por el cual dos personas acceden a un 
            trueque se le denomina permuta.</h6>
    </div>

    <div class="titulo-principal">
        <h1>Nuestro Objetivo General</h1>
        <br>
        <h6 class="container text-princil">Desarrollar un sistema de información para la gestión de intercambio de bienes, 
            materiales o servicios orientado a la web</h6>
    </div>

    <div class="titulo-principal">
        <h1>Nuestros Objetivos Especificos</h1>
        <br>
        <h6 class="container text-princil">- Desarrollar un sistema de información para la gestión de intercambio de bienes, materiales o servicios orientado a la web.</h6><br>
        <h6 class="container text-princil">- Generar una interfaz web acorde con los requerimientos especificados por el cliente.</h6><br>
        <h6 class="container text-princil">- Aumentar el número de donaciones para las personas necesitadas.</h6><br>
    </div>

        <br><br><br>

        <h1 class="title-presentacion">NUESTRO EQUIPO</h1>

        <div class="card mb-3" style="max-width: 540px; background-color: #232528; margin: 1% auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/wilmer.jpg" class="img-fluid rounded-start" alt="Wilmer Perdomo">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title letra-titulo">Wilmer Perdomo</h5>
                        <p class="card-text letra-cuadro">Gerente de  la Empresa.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px; background-color: #232528; margin: 1% auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/santiago.jpg" class="img-fluid rounded-start" alt="Santiago Manjarres">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title letra-titulo">Santiago Manjarres</h5>
                        <p class="card-text letra-cuadro">Desarrolador Web de la Empresa.</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px; background-color: #232528; margin: 1% auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/jonathan.png" class="img-fluid rounded-start" alt="Jonathan Sierra">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title letra-titulo">Jonathan Sierra</h5>
                        <p class="card-text letra-cuadro">Analista y Recursos Humanos de la Empresa.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px; background-color: #232528; margin: 1% auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/kevinc.jpeg" class="img-fluid rounded-start" alt="Kevin Capera">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title letra-titulo">Kevin Capera</h5>
                        <p class="card-text letra-cuadro">Diseñador Grafico de la Empresa.</p>
                    </div>
                </div>
            </div>
        </div>


    <br><br><br>

    <!-------------- footer------------ -->

    @include('layouts.plantilla.footer')
    

</body>

</html>