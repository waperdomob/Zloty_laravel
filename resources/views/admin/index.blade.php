@extends('layouts.app')
@section('content')

<div class="responsive">
    <link rel="stylesheet" href="{{ asset('css/admin1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin2.css')}}">
    <body>

        <!--    TOP NAV START==================================-->
        
        <div class="topnav">
            <span class="brand-logo"><a href="{{ route('users.index')}}"><img src="../img/LOGOsolito.png" width="25" height="25"> </a></span>
            <div class="topnav-right">
                <span id="colornav" class="social">
                    <a href="#twitter"><i class="fas fa-user-ninja"></i></a>
                    <a href="#fb"><i class="fas fa-bahai"></i></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();"><i class="fas fa-sign-out-alt" ></i></a>
                    </form>
                </span>
            </div>
        </div>


        <nav id="colornav">
            <div class="menu-btn">
                <div class="line line--1"></div>
                <div class="line line--2"></div>
                <div class="line line--3"></div>
            </div>

            <div class="nav-links">
                <a href="Cprincipaladmin.php" class="link">Usuarios</a>
                <a href="Cdonacionesadmin.php" class="link">Donaciones</a>
                <a href="Cintercambiosadmin.php" class="link">Intercambios</a>
                <a href="Cestadisticasadmin.php" class="link">Estadisticas</a>
            </div>
        </nav>


        <section class="content-container">
            <div class="landing-content">
                <div class="landing-content-holder">

                </div>
            </div>
        </section>


        <script>
            var menuBtn = document.querySelector('.menu-btn');
            var nav = document.querySelector('nav');
            var lineOne = document.querySelector('nav .menu-btn .line--1');
            var lineTwo = document.querySelector('nav .menu-btn .line--2');
            var lineThree = document.querySelector('nav .menu-btn .line--3');
            var link = document.querySelector('nav .nav-links');
            menuBtn.addEventListener('click', () => {
                nav.classList.toggle('nav-open');
                lineOne.classList.toggle('line-cross');
                lineTwo.classList.toggle('line-fade-out');
                lineThree.classList.toggle('line-cross');
                link.classList.toggle('fade-in');
            })
            
        </script>
        <meta charset="UTF-8">

        <br><br><br><br>
            <div class="container">
            <h1 class="titulos">LISTADO DE USUARIOS REGISTRADOS</h1>
            <table class="table">
            <thead>
                <tr>
                <th class="tables2" scope="col">Id</th>
                <th class="tables2" scope="col">Nombre</th>
                <th class="tables2" scope="col">email</th>
                <th class="tables2" scope="col">Telefono</th>
                <th class="tables2" scope="col">Ciudad</th>                    
                <th class="tables2" scope="col">Acción</th>
                <th class="tables2" scope="col"></th>
                </tr>
            </thead>
            <tbody>
            

                @foreach ($users as $user) 
                
                <tr>
                    <td class="tables2">{{ $user->id }}</td>
                    <td class="tables2">{{ $user->name }}</td>
                    <td class="tables2">{{ $user->email }}</td>
                    <td class="tables2">{{ $user->phone }}</td>
                    <td class="tables2">{{ $user->city }}</td>
                    
                    <td>
                        <a href="#editarUsuario{{$user->id}}"   data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary"  ><span class="glyphicon glyphicon-edit"></span>Editar</a>
                        <a href="#delete_{{$user->id}}"  data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary" ><span class="glyphicon glyphicon-trash"></span>Borrar</a>
                    </td>
                    @include('admin.modalAdminUser')
                </tr>
                @endforeach
            </tbody>
            </table>
            <a href="{{ route('users.pdf') }}" type="button" id="colorbuttom" class="btn btn-primary">GENERAR REPORTE</a>

        </div>

        <br><br><br>
        {{-- <div class="container">
            <h1 class="titulos">LISTADO DE ADMINISTRADORES ACTUALES</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th class="tables2" scope="col">Id</th>
                    <th class="tables2" scope="col">Nombre</th>
                    <th class="tables2" scope="col">email</th>
                    <th class="tables2" scope="col">Telefono</th>
                    <th class="tables2" scope="col">Ciudad</th>                    
                    <th class="tables2" scope="col">Acción</th>
                    <th class="tables2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
            
    
                    @foreach ($admins as $admin) 
                
                    <tr>
                        <td class="tables2">{{ $admin->id }}</td>
                        <td class="tables2">{{ $admin->name }}</td>
                        <td class="tables2">{{ $admin->email }}</td>
                        <td class="tables2">{{ $admin->phone }}</td>
                        <td class="tables2">{{ $admin->city }}</td>
                        
                        <td>
                            <a href="#"   data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary"  ><span class="glyphicon glyphicon-edit"></span>Editar</a>
                            <a href="#"  data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary" ><span class="glyphicon glyphicon-trash"></span>Borrar</a>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
          --}}
        <br><br>
    @include('layouts.plantilla.footer')    
        <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
    </body>

<!-------------- footer------------ -->

</div>
    
@endsection