@extends('layouts.guest')

@section('content')
    <div class="container divInterno">
       <div class="row">
        <div class="col-lg-6 p-5">
            <!-- parte del logo  -->
            <section>
                <div>
                    <img src="img/bigblanco.png" alt="" width="150px">
                </div>
            </section>
            <div class="col-md-10">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <h1>{{ $error }}</h1>
                    @endforeach
                @endif
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="card-body">
                    <div class="brand-wrapper">
                        <img src="img/bigblanco.png" alt="" width="150px">
                    </div>
                    <p class="login-card-description"><center></center></p>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{$request->route('token')}}">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Email address" :value="old('email', $request->email)">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        </div>
                        <input name="reset" id="reset" class="btn colorBoton ml-5 mt-3" type="submit" value="Update">
                    </form>
                   
                </div>
            </div>
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
    @endsection