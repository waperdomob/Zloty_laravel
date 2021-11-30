@extends('layouts.app')
@section('content')

@include('layouts.plantilla.navbar')


<div class="container">
<br><br><br><br><br><br>
<table>
<!-- actualizar datos formulario -->
<th>
<div class="col-8">
    <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
    
      <div class="form-row contenedorCompleto">
        <div class="form-group col-md-10" style="margin-top: 10%;">
          <label for="name" style="color: white;">Nombre:</label>
          <input type="text" class="form-control" name="name" id="inputAddress" value="{{ isset($user->name)?$user->name:old('name')}}" autofocus required>
        </div>
        
        <div class="form-group col-md-10">
          <label for="phone" style="color: white;">Telefono de contacto: </label>
          <input type="text" class="form-control" name="phone" wire:model.defer="state.phone"
          value="{{ isset($user->phone)?$user->phone:old('phone')}}" required>
        </div>
        <div class="form-group col-md-10">
          <label for="city" style="color: white;">Ciudad:</label>
            <select id="inputState" type="text" name="city"
            value="{{ isset($user->city)?$user->city:old('city')}}"class="form-control controls">
            <option selected>Bogotá D.C</option>
            <option>Medellín</option>
            <option>Calí</option>
            <option>Barranquilla</option>
            <option>Cartagena</option>
            <option>Bucaramanga</option>
            <option>Manizales</option>
            <option>Pereira</option>
            <option>Cúcuta</option>
            <option>Ibague</option>
            <option>Valledupar</option>
            <option>Boyáca</option>
            <option>Pasto</option>
            <option>Armenia</option>
            <option>Villavicencio</option>
            <option>Neiva</option>
            <option>Popayán</option>
            <option>Armenia</option>
            </select>
        </div>
      </div>
      <div class="container botones">
        <div class="row">
          <div class="col-sm">
            <input type="submit" class="btn colorBoton" value="Confirmar Cambios">
          </div>
          <div class="col-sm">
            <button type="submit" class="btn colorBoton  "><a href="{{ route('users.index')}}"
                style="text-decoration: none; color: white;">Cancelar </a> </button> </div>
        </div>
      </div>
      <th>
        <div class="container-2">
          <div class="card">
            <div class="form-group">
                <label for="photo" ></label>
                @if (isset($user->profile_photo_path))
                    <img src="{{  asset(('storage').'/'.$user->profile_photo_path)}}" alt="{{ Auth::user()->name }}" >
                @endif                    
            </div>            
          </div>          
        </div>
        <input type="file" class="form-control" name="photo" id="photo" value=""><br>
      </th>         
    </form>
   
  </div>
</div>
</th>
</table>

@endsection