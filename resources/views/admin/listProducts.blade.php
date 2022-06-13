@extends('layouts.app')
@section('content')

<!----------- menu principal --------- -->

<div class="responsive">
    <link rel="stylesheet" href="{{ asset('css/admin1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin2.css')}}">
    <body>

 <!--    TOP NAV START==================================-->
        
    <div class="topnav">
        <span class="brand-logo"><a href="{{ route('users.index')}}"><img src="../../img/logocanguro.png" width="25" height="25"> </a></span>
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
            <a href="{{ route('users.index') }}" class="link">Usuarios</a>
            <a href="{{ route('products.list',$id=1) }}" class="link">Donaciones</a>
            <a href="{{ route('products.list',$id=2) }}" class="link">Intercambios</a>
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

 <br>
   
<center>
    <h1 style =" color: #a87bc7; ">LISTADO DE PRODUCTOS DONADOS</h1><br>
<!-- <a href="Cnuevoproducto.php" style =" color: orange; ">NUEVO PRODUCTO</a> -->
</center>
<div class="container">
<table class="table table-borderless" style =" color: white; ">
    <thead class="thead-dark">
        <tr>
        <th width="126" scope="col">IDPRODUCTO</th>
        <th width="126" scope="col">NOMBRE</th>
        <th width="126" scope="col">DESCRIPCION</th>
        <th width="145" scope="col" class="text-center">EXISTENCIAS</th>
        <th width="145" scope="col" class="text-center">CATEGORIA</th>
        <th width="145" scope="col" class="text-center">ESTADO</th>
        <th width="145" scope="col" class="text-center">IMAGEN PREVISUAL</th>
        <th width="145" scope="col" >ACCIÓN</th>
        
        </tr>
    </thead>
    <tbody >
        @foreach ($inputs as $product) 
            <tr>
                <td>{{$product->id}}</td>       
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td class="text-center">{{$product->stocks}}</td>
                <td class="text-center">{{$product->category['category']}}</td>
                <td class="text-center">{{$product->state['states']}}</td>
                <td>
                    <img src="{{ asset('storage'.'/'.$product->image)}}" class="card-img-top" alt="..."  height="120">
                </td>
                <td>

                    <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#editarProducto{{$product->id}}"  id="colorbuttomAd" class="btn btn-primary">Editar
                    </button>
                   
                </td>
                @include('admin.modalAdminProduct')
            </tr>
        @endforeach   
    </tbody>
</table>
</div>
@if (!isset($outputs))
 <center>      
        <a href="{{ route('products.pdf',$id=1) }}" id="colorbuttom" class="btn btn-warning ">GENERAR REPORTE</a> 
    </center> 
@endif
        <br><br>
@if (isset($outputs))
<center>
    <h1 style =" color: #a87bc7; ">LISTADO DE PRODUCTOS QUE SALEN</h1><br>

</center>
<div class="container">
    <table class="table table-borderless" style =" color: white; ">
        <thead class="thead-dark">
            <tr>
            <th width="126" scope="col">IDPRODUCTO</th>
            <th width="126" scope="col">NOMBRE</th>
            <th width="126" scope="col">DESCRIPCION</th>
            <th width="145" scope="col" class="text-center">EXISTENCIAS</th>
            <th width="145" scope="col" class="text-center">CATEGORIA</th>
            <th width="145" scope="col" class="text-center">ESTADO</th>
            <th width="145" scope="col" class="text-center">IMAGEN PREVISUAL</th>
            <th width="145" scope="col">ACCIÓN</th>
            
            </tr>
        </thead>
        <tbody >
            @foreach ($outputs as $product) 
                <tr>
                    <td>{{$product->id}}</td>       
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td class="text-center">{{$product->stocks}}</td>
                    <td class="text-center">{{$product->category['category']}}</td>
                    <td class="text-center">{{$product->state['states']}}</td>
                    <td>
                        <img src="{{ asset('storage'.'/'.$product->image)}}" class="card-img-top" alt="..."  height="120">
                    </td>
                     <td>

                        <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#editarProducto{{$product->id}}"  id="colorbuttomAd" class="btn btn-primary">Editar
                    </button>
                   
                    </td>
                   @include('admin.modalAdminProduct')
                </tr>
            @endforeach   
        </tbody>
    </table>
    </div>
    <br>
     <center>      
        <a href="{{ route('products.pdf',$id=2) }}" id="colorbuttom" class="btn btn-warning ">GENERAR REPORTE</a> 
    </center> 
    <br>
@endif
    @include('layouts.plantilla.footer') 
@endsection