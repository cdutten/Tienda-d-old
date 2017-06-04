@php
function filas($producto_id, $producto) {


$salida = "";
$salida = $salida . '<tr>';
$salida = $salida . '<th scope="row">' . $producto['id'] . '</th>' ; 
$salida = $salida . '<td>' . $producto['nombre'] . '</td>' ;
$salida = $salida . '<td> <img src="'. $producto['imagenDir'] .'" alt = "' . $producto['nombre'] 
                  . '" class="img-rounded" class="img-responsive"></img> </td>';
$salida = $salida . '<td>' . $producto['descripcionBreve'] . '</td>' ;
$salida = $salida . '<td>' . $producto['descripcion'] . '</td>' ;
$salida = $salida . '<td>';
$salida = $salida . Form::open(array('url' => '/admin/borrar', 'method' => 'POST', 'onsubmit' => 'return confirm("Realmente quieres borrarlo?")'));
$salida = $salida . Form::token();
$salida = $salida . '<input id="id" type="hidden" value="' . $producto["id"] . '" name="id" >';
$salida = $salida . '<button type="submit" class="btn btn-primary"> X </button> ';
$salida = $salida . Form::close();
$salida = $salida . '</td>';
$salida = $salida . '</tr>';
return $salida;
}

@endphp