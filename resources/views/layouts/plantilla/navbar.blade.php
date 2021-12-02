 <!----------- menu principal --------- -->
<link rel="stylesheet" href="{{ asset('css/modificarPerfil.css') }}">
<nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('users.index')}}">
            <img src="../../img/bigblanco.png" alt="" height="80px" width="160px">
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
                    <div class="i">
                    <i class="fas fa-border-style"></i>
                    </div>
                    <a class="nav-link letracolor " href="{{ route('products.show',Auth::user()->id)}}" style="color: #ffffff;">
                        Tablas de productos</a>
                </li>
                <li class="nav-item correrUsers">
                        
                   {{--  @if (Auth::user()->profile_photo_path)
                        <img class="fas h-8 w-8 rounded-full object-cover imagen-perfil" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="fas h-8 w-8 rounded-full object-cover imagen-perfil" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                    @endif --}}
                    <a class="nav-link letracolor" href="{{ route('users.edit',Auth::user()->id) }}" style="color: #ffffff;">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item correrUser">
                    <div class="i">
                        <i class="fas fa-minus"></i>
                    </div>
                       
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                 <b class="nav-link letracolor ">{{ __('Cerrar Sesión') }}</b>
                        </a>
                        </form>
                </li>
            </ul>
        </div>
        </ul>
    </div>
</nav>