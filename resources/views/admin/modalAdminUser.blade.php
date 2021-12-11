 <!-- Editar cliente-->


<div class="modal fade" id="editarUsuario{{$user->id}}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog ">
  <div class="modal-content bg-dark">            
      <div class="modal-header " >
          <h5 class="modal-title titulos" id="exampleModalLabel">MODIFICAR USUARIO</h5>
          <button type="button" class="btn-close " id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4" >
         
          <form
              action="{{ route('users.update',$user->id)}}"
              method="POST"> @csrf @method('PATCH')
              <div class="mb-3">
                  <label for="exampleInputText" class="form-label tables2">Id</label>
                  <input type="text" class="form-label " id="exampleInputEmail1" name="id"
                  value="{{ isset($user->id)?$user->id:old('id')}}" aria-describedby="emailHelp" readonly>
              </div>
              <div class="mb-3">
                  <label for="exampleInputText" class="form-label tables2">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="name"
                      aria-describedby="emailHelp" value="{{ isset($user->name)?$user->name:old('name')}}">
              </div>
              
              <div class="mb-3">
                  <label for="exampleInputText" class="form-label tables2">Email </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{ isset($user->email)?$user->email:old('email')}}">
              </div>
              <div class="mb-3">
                  <label for="exampleInputText" class="form-label tables2">Telefono </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="{{ isset($user->phone)?$user->phone:old('phone')}}">
              </div>
              <div class="mb-3">
                     <label for="exampleInputText" class="form-label tables2">Ciudad </label>
                     <select id="inputState" value="{{ isset($user->city)?$user->city:old('city')}}" type="text"
                         name="city" class="form-control controls">
                         <option selected>Bogotá D.C</option>
                         <option>Medellín</option>
                         <option>Calí</option>
                         <option>Barranquilla</option>
                         <option>Cartagena</option>
                         <option>Bucaramanga</option>
                         <option>Manizales</option>
                         <option>Pereira</option>
                         <option>Cúcuta</option>
                         <option>Ibagué</option>
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
                 <div class="mb-3">
                  <label for="exampleInputText" class="form-label tables2">Password </label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Guardar </button> -->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><span
                          class="glyphicon glyphicon-remove"></span> Cancel</button>
                  <button type="submit" id="colornav" class="btn"><span
                          class="glyphicon glyphicon-check"></span> Actualizar Ahora</button>
              </div>
              
          </form>
      </div>
  </div>
</div>
</div>
     
<!-- Borrar -->
<div class="modal fade" id="delete_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content bg-dark">
      <div class="modal-header">      
          <center>
              <h4 class="modal-title titulos" id="myModalLabel">BORRAR USUARIO</h4>
          </center>
          <button type="button" class="btn-close" id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        <form action="{{ route('users.destroy',$user->id) }}" method="post"    class="d-inline">
            @csrf @method('DELETE')
          <p class="text-center tables2">¿Esta seguro de Borrar el registro?</p>
          <h2 class="text-center tables2">{{ $user->name }}</h2>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button  type="submit" class="btn" id="colornav"><span class="glyphicon glyphicon-trash"></span> Si</button>
                
            </div>
        </form>
    </div>
  </div>
</div>
</div>