@extends('front_end.inc.plantilla')

@section('contenido')
@include('front_end.inc.functions');
<?php 
  $tituloPagina = "Busqueda";
  $activePage = "Productos";
?>
<div class="container">
<h3 class="jumbotron">Resultado de la búsqueda: {{$buscar}}</h3>
@if (isset($message))
<div class='bg-warning' style='padding: 20px'>
    {{$message}}
</div>
@endif
<hr />
<div class="container">
  <div class="row">
    @if (isset($producto))
       @foreach ( $producto as $producto_id => $producto )
              {!! portada($producto_id, $producto) !!}
       @endforeach
    @endif
  </div>
</div>
@stop