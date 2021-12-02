@extends('layouts.app')
@section('content')

<!----------- menu principal --------- -->

<nav id="menu" class="navbar navbar-expand-lg bg-pink">
    <div class="container">
        <a class="navbar-brand" href="{{route('users.index')}}">
            <img src="/img/bigblanco.png" alt="" height="80px" width="160px">
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
                    <a class="nav-link btn btn-link" href="{{route('users.index')}}" style="color: #ffffff;">
                      Volver</a>
                </li>
            </ul>
        </div>
        </ul>
    </div>
</nav>
 <br>
   
<center>
    <h1 style =" color: orange; ">LISTADO DE MIS PRODUCTOS</h1><br>
<!-- <a href="Cnuevoproducto.php" style =" color: orange; ">NUEVO PRODUCTO</a> -->
</center>
<div class="contenedor-3">
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
        <th width="136" scope="col" >MODIFICAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product) 
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
                <td width="136" scope="col" ><a class="btn btn-warning text-center" id="colorbuttom" href="{{ route('products.edit',$product)}}">Modificar</a></td>
            </tr>
        @endforeach   
    </tbody>
</table>
</div>
    <center>      
        <a href="{{ route('users.index')}}" id="colorbuttom" class="btn btn-warning ">FINALIZAR</a> 
    </center>  

    @include('layouts.plantilla.footer') 
@endsection