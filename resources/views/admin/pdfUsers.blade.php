<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="{{ public_path('css/principal.css') }}" type="text/css"> 

    <link rel="stylesheet" href="{{ public_path('css/imagenS.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>GUIAPDF</title>
</head>
<body>
  <br>
  <div class="container">
    <a>
        <img src="{{ public_path('/img/bigblanco.png')}}" alt="" height="100px" width="180px">
    </a>        
</div>
    <center><h1 style =" color: orange; ">Reporte de USUARIOS</h1></center><br><br>    

    <div class="contenedor-3">
        <table class="table table-borderless" style =" color: rgb(8, 8, 8); ">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Ciudad</th>
                    
                </tr>
            </thead>
            <tbody >
                @foreach ($users as $user)
                <tr>                
                        <td>{{ $user->id }}</td>                
                        <td>{{ $user->name }}</td>                
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->city }}</td>

                </tr>
                
                @endforeach
            </tbody>
            
        </table>
    </div>
    <br>
    
    <footer class="content-footer">

       <div>
            <a href="https://www.facebook.com/fundacionbellaflor">
                <img src="{{ public_path('img/logoBellaFlor.png')}}" alt="" width="190px" height="100px">
            </a>
       </div>
        <div>
            <h2 class="titulo-final">&copy; Fundación Bella Flor | Grupo-Zloty</h2>
            <div class="diseñotime">
                <script src="{{ public_path('js/time.js') }}"></script>
            </div>
        </div>
        <img src="{{ public_path('img/bigblanco.png')}}" alt="" width="180px" height="100px">
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
</body>