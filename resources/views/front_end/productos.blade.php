@extends('front_end.inc.plantilla')

@section('title', 'Productos')

@section('contenido')
@include('front_end.inc.functions')
<?php 
  $activePage = "Productos";
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron main ">
      <div class="container">
        <h1>Bienvenidos a <strong>Tienda D </strong></h1>
        <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
      </div>
  </div><!-- Jumbotron -->
  
   <!-- Productos-->

  

   <div class="container">
     <div class="row">
       @foreach ( $productos as $producto_id => $producto )
             {!! portada($producto_id, $producto) !!}
       @endforeach
       <div class="col-md-8 col-md-offset-3">
       {{ $productos->links() }}
       </div>
     </div> <!--Productos Destacados-->
    </div>   

  <hr> 
@stop