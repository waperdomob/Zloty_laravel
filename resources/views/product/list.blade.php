@extends('layouts.app')
@section('content')

<!----------- menu principal --------- -->

<nav id="menu" class="navbar navbar-expand-lg bg-pink">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/bigblanco.png" alt="" height="80px" width="160px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav nav-pills nav-fill">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="i">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <a class="nav-link btn btn-link" href="../Vista/php/logueado.php" style="color: #ffffff;">
                      Volver</a>
                </li>
            </ul>
        </div>
        </ul>
    </div>
</nav>
 <br>
   
<center>
    <h1 style =" color: orange; ">LISTADO DE MIS PRODUCTOS</h1><br>
<!-- <a href="Cnuevoproducto.php" style =" color: orange; ">NUEVO PRODUCTO</a> -->
</center>
<div class="contenedor-3">
<table class="table table-borderless" style =" color: white; ">
    <thead class="thead-dark">
        <tr>
        <th width="126" scope="col">IDPRODUCTO</th>
        <th width="126" scope="col">NOMBRE</th>
        <th width="126" scope="col">DESCRIPCION</th>
        <th width="145" scope="col" class="text-center">EXISTENCIAS</th>
        <th width="145" scope="col" class="text-center">CATEGORIA</th>
        <th width="145" scope="col" class="text-center">ESTADO</th>
        <th width="145" scope="col" class="text-center">IMAGEN PREVISUAL</th>
        <th width="136" scope="col" >MODIFICAR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                foreach ($matrizproducto as $fila) {
            ?>
                <td><?php echo $fila['idProducto']; ?></td>       
                <td><?php echo $fila['nombreProducto']; ?></td>
                <td><?php echo $fila['descripcionProducto']; ?></td>
                <td class="text-center"><?php echo $fila['Existencias']; ?></td>
                <td class="text-center"><?php echo $fila['TipoCategoria']; ?></td>
                <td class="text-center"><?php echo $fila['estado']; ?></td>
                <td>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagesf']); ?>">
                </td>
                <td width="136" scope="col" ><a class="btn btn-warning text-center" id="colorbuttom" href="../Controlador/Cmodificarproducto.php?idProducto=<?php echo $fila['idProducto'];?>">Modificar</a></td>
        </tr>
            <?php
                }
            ?> 
    </tbody>
</table>
</div>
    <center>      
        <a href="../Vista/php/logueado.php" id="colorbuttom" class="btn btn-warning ">FINALIZAR</a> 
    </center>  

@endsection