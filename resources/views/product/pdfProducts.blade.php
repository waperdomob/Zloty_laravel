@extends('layouts.app')
@section('content')

<nav id="menu" class="navbar navbar-expand-lg bg-pink">
    <div class="container">
        <a class="navbar-brand" href="{{route('users.index')}}">
            <img src="/img/bigblanco.png" alt="" height="80px" width="160px">
        </a>        
    </div>
</nav>
 <br>
    <center><h1 style =" color: orange; ">Reporte de USUARIOS</h1></center><br><br>    

    <div class="contenedor-3">
        <table class="table table-borderless" style =" color: white; ">
            <thead class="thead-dark">
            <tr>
                
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stocks</th>
                <th>Categoria</th>
                <th>Estado</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>                
                        <td>{{ $product->id }}</td>                
                        <td>{{ $product->name }}</td>                
                        <td>{{ $product->description }}</td>
                        <td class="text-center">{{$product->stocks}}</td>
                        <td class="text-center">{{$product->category['category']}}</td>
                        <td class="text-center">{{$product->state['states']}}</td>

                </tr>
                
                @endforeach
            </tbody>
            
        </table>
    </div>
    <footer class="content-footer">

        <a href="https://www.facebook.com/fundacionbellaflor">
            <img src="{{  asset('img/logoBellaFlor.png')}}" alt="" width="190px" height="100px">
        </a>
        <div>
            <h2 class="titulo-final">&copy; Fundación Bella Flor | Grup-Zloty</h2>
            <div class="diseñotime">
                <script src="{{ asset('js/time.js') }}"></script>
            </div>
        </div>
        <img src="{{  asset('img/bigblanco.png')}}" alt="" width="180px" height="100px">
    </footer>

    <!---- js de iconos---------------- -->
    <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <script>
        $(window).scroll(function () {
            if ($("#menu").offset().top > 190) {
                $("#menu").addClass("main");
            } else {
                $("#menu").removeClass("main");
            }
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
@endsection