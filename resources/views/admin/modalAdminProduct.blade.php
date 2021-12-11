<div class="modal fade" id="editarProducto{{$product->id}}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog ">
         <div class="modal-content bg-dark">            
             <div class="modal-header " >
                 <h5 class="modal-title titulos" id="exampleModalLabel">EDITAR PRODUCTO</h5>
                 <button type="button" class="btn-close " id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body p-4" >
                
                 <form
                     action="{{ route('products.update',$product->id)}}"
                     method="POST"> @csrf @method('PATCH')
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Id</label>
                         <input type="text" class="form-label " id="exampleInputEmail1" name="id"
                             value="{{ isset($product->id)?$product->id:old('id')}}" aria-describedby="emailHelp" readonly>
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Nombre</label>
                         <input type="text" class="form-control" id="name" name="name"
                             aria-describedby="emailHelp" value="{{ isset($product->name)?$product->name:old('name')}}">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Descripcion</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{ isset($product->description)?$product->description:old('description')}}">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Existencias </label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="stocks" value="{{ isset($product->stocks)?$product->stocks:old('stocks')}}">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Categoria </label>                         
                         <select name="category_id" class="form-control"  method="post" required>
                                <option value="">Categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category['id']}}"            
                                        @if ($category['id'] === $product->category_id) selected @endif>   
                                        {{$category['category']}}</option>
                                @endforeach                                   
                        </select>
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Estado </label>
                          <select name="state_id" class="form-control" placeholder="Estado del Producto" method="post" required>
                                <option value="">Estado</option>
                                @foreach ($states as $state)
                                    <option value="{{$state['id']}}"            
                                        @if ($state['id'] === $product->state_id) selected @endif>   
                                        {{$state['states']}}</option>
                                @endforeach 
                            </select>
                     </div>
                     
                      
                     <div class="modal-footer">
                        
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
 <div class="modal fade" id="delete_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content bg-dark">
             <div class="modal-header">
             
                 <center>
                     <h4 class="modal-title titulos" id="myModalLabel">BORRAR USUARIO</h4>
                 </center>
                 <button type="button" class="btn-close" id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <form action="{{ route('products.destroy',$product->id) }}" method="post"    class="d-inline">
                    <p class="text-center tables2">¿Esta seguro de Borrar el registro?</p>
                    <h2 class="text-center tables2">{{$product->name}}</h2>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                        <button  type="submit" class="btn" id="colornav"><span class="glyphicon glyphicon-trash"></span> Si</button>
                    </div>
                </form>
             </div>
         </div>
     </div>
 </div>