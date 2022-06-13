@extends('layouts.guest')

@section('content') 
<div>
   
 <!-- seccion de grid repartida en img y los inputs -->
 <div class="container divInterno">
    <div class="row">
        <div class="col-lg-6  p-5 ">
            <!-- parte del logo  -->
            <section>
                <div>
                    <img src="img/bigblanco.png" alt="" width="150px">
                </div>
            </section>

            <!-- titulo principal -->
            <section>
                <h1 class="tituloInicio">Reseteo de contraseña</h1>
            </section>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif
            <!-- formulario  -->
            <form method="POST" action="{{ route('password.request') }}">
                @csrf
                <!-- email -->
                <div class="form-group mt-6">
                    <label for="Email" class="colorLabel">Email</label>
                    <input type="email" class="form-control"@error('email') is-invalid  @enderror id="email" placeholder="Email address" name="email"  required autofocus >
                </div>
               @error('email')
                   <span class="invalid-feedback is-invalid" role="alert">
                       <strong>{{ $message}}</strong>
                   </span>
               @enderror
                <!-- seccion de botones  -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm mt-3">                            
                            </div>
                            <div class="col-sm-6">
                                <input name="reset" id="reset" class="btn colorBoton ml-5 mt-3" type="submit" value="Reset">
                            </div>
                            <div class="col-sm mt-3">                            
                            </div>
                        </div>
                    </div>
                </section>
                <!-- flecha de regreso  -->
                <a href="/"><i class="fas fa-arrow-left mt-4"></i></a>
            </form>

        </div>
        <!-- div derecho imagen and texto  -->
        <div class="imagen">
            <div class="caption ">
                <section>
                    <h3 class=" letraImagen">!No te has registrado!</h3>
                </section>
                <div class="textoicon">
                    <div>
                        <i class="far fa-check-circle">
                        </i>
                        <p class="mensajeparrafo"> Registrate </p>
                    </div>
                    <div>
                        <i class="far fa-check-circle">
                        </i>
                        <p class="mensajeparrafo"> Haz tus cambio o donaciones en menos de 5 min</p>
                    </div>
                </div>
                <button type="submit" class="btn colorRegistro mt-3"><a
                        href="{{ route('register') }}"
                        style="text-decoration: none; color:white">
                        Registrate!</a>
                </button>
            </div>
        </div>
    </div>
</div>


</div>
@endsection

