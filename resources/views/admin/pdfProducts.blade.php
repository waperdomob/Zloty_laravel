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
    <center><h1 style =" color: orange; ">Reporte de PRODUCTOS</h1></center><br><br>    

    <div class="contenedor-3">
        <table class="table table-borderless" style =" color: rgb(0, 0, 0); ">
            <thead class="thead-dark">
            <tr>
                
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th class="text-center">Stocks</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Estado</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>                
                        <td>{{ $product->id }}</td>                
                        <td>{{ $product->name }}</td>                
                        <td>{{ $product->description }}</td>
                        <td class="text-center">{{$product->stocks}}</td>
                        <td class="text-center">{{$product->category['category']}}</td>
                        <td class="text-center">{{$product->state['states']}}</td>

                </tr>
                
                @endforeach
            </tbody>
            
        </table>
    </div>
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