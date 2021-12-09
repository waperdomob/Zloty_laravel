@extends('layouts.app')
@section('content')

<div class="responsive">
<header>

    <!----------- menu principal --------- -->
    <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
        <div class="container">
            <a class="navbar-brand" href="{{ route('users.index')}}">
                <img src="img/bigblanco.png" alt="" height="80px" width="160px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav nav-pills nav-fill">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item correrUsers">
                        
                        <i class="fas fa-border-style"></i>
                        
                        <a class="nav-link letracolor " href="{{ route('products.show',Auth::user()->id)}}" style="color: #ffffff;">
                            Tablas de productos</a>
                    </li>
                    <li class="nav-item correrUsers">
                        
                            <i class="fas fa-plus"></i>
                        
                        <a class="nav-link letracolor " href="{{ route('products.create') }}" style="color: #ffffff;">
                            Realizar Donación e Intercambio</a>
                    </li>
                    
                    <li class="nav-item correrUsers espacio-letra">
                        
                        @if (Auth::user()->profile_photo_path)
                            <img class="fas h-8 w-8 rounded-full object-cover imagen-perfil" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                        @else
                            <img class="fas h-8 w-8 rounded-full object-cover imagen-perfil" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                        @endif
                            
                        
                        <a class="nav-link letracolor" href="{{ route('users.edit',Auth::user()->id) }}" style="color: #ffffff;">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item correrUser">
                        
                            <i class="fas fa-minus"></i>
                                                 
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                     <b class="nav-link letracolor " style="color: #ffffff;">{{ __('Cerrar Sesión') }}</b>
                                </a>
                            </form>
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


    <!-------- Cuadro que Acompaña el Carrusel ------------ -->

    <<div class="contenedorletras">
        <h1>Con Zloty intercambia o dona Productos de manera Rapida</h1>
        <h6>Puedes clasificar tus  HOLA HOLA HOLA para una mayor busqueda a lo que tu necesites.</h6>
       
    </div>

    <!---------smoon ola  de la pagina  ----- -->

    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #27292D;"></path>
        </svg></div>
</header>

        <!-- Zona de Atencion al Cliente -->

    <div class="containerzonacliente">


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar Mensaje a la Administración</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mensaje:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Ventana</button>
                    <button type="button" class="btn btn-primary" id="colorboton">Enviar Mensaje</button>
                </div>
                </div>
            </div>
        </div>
    </div>

<!-- Tarjeta -->

<div class="mb-3 container">
    <img src="img/mensajero.png" class="card-img-top img-fluid rounded mx-auto d-block imagencuadro" alt="Equipo Zloty">
    <div class="card-body">
        <h5 class="card-title titulocuadro">Zloty</h5>
        <p class="card-text frasecuadro" >Nuestro equipo cumpliendo con todas las espectativas de la Fundación Bella Flor, dando nuestra mejor
                calidad y eficiencia a todo lo que se nos a sea aignado, tambien ayudando facilidades al cliente en todo lo que sea posible.</p>
    </div>
</div>


    <!-- Seccion de Donaciones e Intercambio -->

    <center><img src="img/titulo2.png" alt="Equipo Zloty"></center>
</div>

<!--------- secccion del card ------------ -->
<main>
    <section class="portafolio">
        <div class="contenedor">
            <div class="galeria-port">
            
                @foreach ($products as $product)
                
                <div class="imagen-port">
                    
                    <img src="{{ asset('storage'.'/'.$product->image)}}" alt="">
                    <div class="hover-galeria" data-toggle="modal" data-target=".{{ $product->name }}">
                        <p class="parrafodeimg">{{ $product->name }}</p>
                    </div>
                    <div class="modal fade {{ $product->name }}" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-header">
                                <h5 class="modal-title" style="color: #ffffff; text-align: center;">Realiza tu
                                    intercambio </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label=>
                                    <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-content">
                                <div class="row" style="padding: 7%;">
                                    <div class="col-md-6"><img style="margin-top: 40px;" src="{{ asset('storage'.'/'.$product->image)}}"
                                            alt=""></div>
                                    <div class="col-md-6 ml-auto">
                                        <h3>{{ $product->name }} </h3>
                                        <div data-spy="scroll" data-target="#list-example" data-offset="0"
                                            class="scrollspy-example">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <a class="btn colorBoton mt-3" href="{{ route('products.create') }}" style="color: #ffffff;" >
                                            Intercambiar </a>
                                        {{-- <a class="btn btn-warning" href="{{  App\Http\Controllers\ProductController::validation($product->id); }}" type="submit" class="btn colorBoton mt-3">Intercambiar</a> --}}
                                        
                                    </div>
                                    
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close
                                </button>
                            </div>
                        </div>
                    </div>
                        
                </div>                
                @endforeach
            </div>
        </div>
    </section>
</main>

<!-- Redes Sociales de la Fundacion -->



<!-------------- footer------------ -->

@include('layouts.plantilla.footer')    

</div>
    
@endsection