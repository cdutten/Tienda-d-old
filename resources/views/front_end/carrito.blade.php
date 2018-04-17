@extends('front_end.inc.plantilla')


@section('contenido')
@php 
  $tituloPagina = "Carrito";
  $activePage = "Productos";
@endphp

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron main ">
      <div class="container">
        <h1>Bienvenidos a <strong>Tienda D </strong></h1>
        <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
      </div>
  </div><!-- Jumbotron -->
   <!--Carrito-->
  <div class="container">
    <div class="row">     
     <div class="Container col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Productos</div>
            <div class="panel-body">
                <table class="table"> 
                    <thead> 
                        <tr> 
                            <th>#</th> 
                            <th>Producto/s</th> 
                            <th>Cantidad</th> 
                            <th>Precio</th>
                            <th>Eliminar</th>
                        </tr> 
                    </thead>

                    <tbody>
                      @foreach (Cart::content() as $item) 
                      <tr>
                        <td>  {{ $item->id }} </td>
                        <td>  {{ $item->name }} </td>
                        <td>  {{ $item->qty }} </td>
                        <td>  {{ $item->price}} </td>
                        <td> 
                          <form action=" {{ url('cart', [$item->rowId] ) }} " method="POST" class="side-by-side">
                                 {!! csrf_field() !!}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="submit" class="btn btn-danger btn-sm" value="Quitar">
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    <tr class="border-bottom">
                        <td class="column-spacer"></td>
                        <td class="column-spacer"></td>
                        <td class="small-caps table-bg" style="text-align: right">Total</td>
                        <td class="table-bg">${{ Cart::total() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
             <button type="button" class="btn btn-success">Confirmar compra</button>
             <a href="{{url("Products")}}" ><button type="button" class="btn btn-info">Volver a Productos</button></a>
            </div>
        </div>
      </div>
    </div> <!--Carrito-->
  </div>   
  <hr> 
@stop