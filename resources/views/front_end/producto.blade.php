@extends('front_end.inc.plantilla')

@section('title', 'Producto')
@section('contenido')
@include('front_end.inc.functions')
@php 
  $activePage = "Productos";
@endphp

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron main ">
      <div class="container">
        <h1>Bienvenidos a <strong>Tienda D </strong></h1>
        <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
      </div>
    </div><!-- Jumbotron -->
    <!-- Product view-->   
    @foreach ($productos as $producto_id=>$producto)
    {!! producto($producto) !!}   
    @endforeach
    <!-- /Product view-->
  </div>

<hr> 
@stop