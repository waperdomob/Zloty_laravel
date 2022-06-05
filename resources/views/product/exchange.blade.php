@extends('layouts.app')
@section('content')

@include('layouts.plantilla.navbar')
<br><br><br><br><br><br><br><br>
    
    <div class="contenedor-3">
        <center>
            <h1 style =" color: orange; ">LISTADO DE PRODUCTOS</h1><br>
        <!-- <a href="Cnuevoproducto.php" style =" color: orange; ">NUEVO PRODUCTO</a> -->
        </center>
    <table class="table table-borderless" style =" color: white; ">
        <thead class="thead-dark">
            <tr>
            <th width="126" scope="col">ID</th>
            <th width="126" scope="col">NOMBRE</th>
            <th width="126" scope="col">DESCRIPCION</th>
            <th width="145" scope="col" class="text-center">EXISTENCIAS</th>
            <th width="145" scope="col" class="text-center">CATEGORIA</th>
            <th width="145" scope="col" class="text-center">ESTADO</th>
            <th width="145" scope="col" class="text-center">IMAGEN PREVISUAL</th>
            <th width="136" scope="col" >RELIZAR INTERCAMBIO</th>
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
                    <td>
                        <form method="POST" action="{{ route('products.exchange',$product->id) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Cantidad a intercambiar</label>
                                <input type="number" name="quantity"  class="form-control" placeholder="Cantidad" required >
                            </div>
                            <div class="form-group">
                                @if ( $exchange_id )
                                    <input id="exchange_id" class="form-control" type="number" name="exchange_id"  value="{{ $exchange_id }}">
                                @endif    
                            </div>
                            <input type="submit" value="Intercambiar" class="btn btn-warning">
                        </form>
                    </td>
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