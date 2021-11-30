@extends('layouts.app')
@section('content')


   
@include('layouts.plantilla.navbar')
    

    <div class="container">
        <br><br><br><br><br><br><br>
    <div class="row">
    <div class ="col">
        <label for="photo" ></label>
        @if (isset($product->image))
            <img src="{{  asset(('storage').'/'.$user->profile_photo_path)}}" alt="{{ Auth::user()->name }}" >
        @else
            <img class="" src="./../img/bigblanco.png" /> 
        @endif

    </div>
        <div class="col-7">
            <div class="justify-content-xs-center" id="tablaProducto">
                <div class="card-img-top">

                    <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 

                    <center >
                       
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre del Producto" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" placeholder="Descripcion del Producto" required/>
                        </div>

                        <div class="form-group">
                            <input type="number" name="stocks"  class="form-control" placeholder="Cantidad" required >
                        </div>
                        <div class="form-group">
                            @if ( $user_id )
                                <input id="user_id" class="form-control" type="number" name="user_id"  value="{{ $user_id }}" hidden>
                            @endif    
                        </div>
                        <div>
                        <class class="from-group">
                            <select name="type_exchangue_id" class="form-control" placeholder="Tipo de Intercambio" method="post" required >
                                <option value="">Tipo de Intercambio</option>
                                @foreach ($type_Exchangues as $type_Exchangue)
                                    <option value="{{ $type_Exchangue->id }}" >{{ $type_Exchangue->type_exchangues }}</option>
                                @endforeach 
                            </select>
                        </class>
                        </div>
                        <br>
                        <class class="from-group">
                           
                                
                            <select name="category_id" class="form-control" placeholder="Categoria del Producto" method="post" required>
                                <option value="">Categoria</option>
                            @foreach ($categories as $category)
                               <option value="{{ $category->id }}" >{{ $category->category }}</option>
                            @endforeach                                
                            </select>
                        </class>
                        <br>
                        <class class="from-group">

                            <select name="state_id" class="form-control" placeholder="Estado del Producto" method="post" required>
                                <option value="">Estado</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}" >{{ $state->states }}</option>
                             @endforeach
                            </select>
                        </class>
                        <br>
                        <br>   
                        <input type="file" class="form-control" name="image" id="image" value=""><br> <br>
                        <br> 
                        <div class="col-sm">
                            <input type="submit" class="btn colorBoton" value="Realizar intercambio">
                          </div>

                    </center>       
                      
                    </form>
                    </div>

                </div>
        </div>

    </div>
    </div>
    <br>


@endsection