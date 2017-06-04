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
  <div class="container">
      <div class="thumbnail">
       <div class="row">     
          @foreach ($productos as $producto_id=>$producto)
          {!! producto($producto) !!}   
          
          <div id="buy_btn" class="col-md-8">
            <!-- Initialiazation of a Cart  -->
            <form action="/cart" method="POST" class="side-by-side">
              {!! csrf_field() !!}
              <input type="hidden" name="id" value="{{ $producto->id }}">
              <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
              <input type="hidden" name="precio" value="{{ $producto->precio }}">
              <input type="submit" class="btn btn-success btn-lg" value="Agregar al Carrito">
            </form>
            <!-- /Initialiazation of a Cart  -->
           </div>
          </div>
          @endforeach
       </div> <!-- /Product view-->
      </div>
    </div>
  </div>   
  <hr> 
@stop