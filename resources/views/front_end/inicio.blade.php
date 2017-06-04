@extends('front_end.inc.plantilla')

@section('title', 'Inicio')
@section('contenido')
@include('front_end.inc.functions')
<?php 
  $activePage = "Inicio";
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos a <strong>Tienda D </strong></h1>
        <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
      </div>
  </div><!-- Jumbotron -->
  
   <!-- Productos Destacados -->
  
  <div class="container panel panel-default">
  <h3> Destacados </h3>
  <hr>
    <div class="row"> 
      @foreach ($productos as $producto_id=>$producto)
        {!! portada($producto_id, $producto) !!}
      @endforeach
    </div> <!--/ Prod-->
  </div> 
  <hr> 
@stop