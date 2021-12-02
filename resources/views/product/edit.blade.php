@extends('layouts.app')
@section('content')


   
@include('layouts.plantilla.navbar')
    

    <div class="container">
        <br><br><br><br><br><br><br>
    <div class="row">
    <div class ="col">
        <label for="photo" ></label>
        @if (isset($product->image))
            <img src="{{  asset(('storage').'/'.$product->image)}}"  >
        @else
            <img class="" src="./../img/bigblanco.png" /> 
        @endif

    </div>
        <div class="col-7">
            <div class="justify-content-xs-center" id="tablaProducto">
                <div class="card-img-top">

                    <form action="{{ route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                    <center >
                       
                        <div class="form-group">
                            <label for="" style="color: white;">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ isset($product->name)?$product ->name:old('name') }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white;">Descripcion</label>
                            <input type="text" name="description" class="form-control" value="{{ isset($product->description)?$product ->description:old('description') }}" required/>
                        </div>

                        <div class="form-group">
                            <label for="" style="color: white;">Cantidad</label>
                            <input type="number" name="stocks"  class="form-control" value="{{ isset($product->stocks)?$product ->stocks:old('stocks') }}"required >
                        </div>
                        <div class="form-group">
                            @if ( $user_id )
                                <input id="user_id" class="form-control" type="number" name="user_id"  value="{{ $user_id }}" hidden>
                            @endif    
                        </div>
                        
                        <class class="from-group">                           
                            <label for="" style="color: white;">Categoria</label>
                            <select name="category_id" class="form-control" placeholder="Categoria del Producto" method="post" required>
                                <option value="">Categoria</option>
                                @foreach ($categories as $id => $category)
                                    <option value="{{$id}}"            
                                        @if ($id === $product->category_id) selected @endif>   
                                        {{$category['category']}}</option>
                                @endforeach                                   
                            </select>
                        </class>
                        <br>
                        <class class="from-group">
                            <label for="" style="color: white;" >Estado</label>
                            <select name="state_id" class="form-control" placeholder="Estado del Producto" method="post" required>
                                <option value="">Estado</option>
                                @foreach ($states as $id => $states)
                                    <option value="{{$id}}"            
                                        @if ($id === $product->state_id) selected @endif>   
                                        {{$states['states']}}</option>
                                @endforeach 
                            </select>
                        </class>
                        <br>
                        <br>   
                        <div class="form-group">
                            <label for="photo" style="color: white;" >Imagen</label>
                              
                            <input type="file" class="form-control" name="image" id="photo" value=""><br>
                        </div> <br>
                        <br> 
                        <div class="col-sm">
                            <input type="submit" class="btn colorBoton" value="Actualizar">
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