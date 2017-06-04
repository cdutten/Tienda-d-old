@php
/*////////////////////////////////////////////////////////////////////*/
/* Function to create the view of products who are in the cover page. */
/*////////////////////////////////////////////////////////////////////*/
function portada($producto_id, $producto) {

$imgURL = URL($producto["imagenDir"]);
$salida = '';
$salida = $salida . '<a href="producto/' . $producto['id'] . '" role="button">';
$salida = $salida . '<div class=" col-md-4">';
$salida = $salida . '<div class="thumbnail">';
$salida = $salida . '<p> <img src="'. $imgURL  .'" alt = "' . $producto['nombre'] 
                  . '"></img></p>' ;
$salida = $salida . '<div class="caption">';
$salida = $salida . '<h2>' . $producto['nombre'] . '</h2>' ; 
$salida = $salida . '<p>' . $producto['descripcionBreve'] . '</p>' ;
$salida = $salida .'</div> </div> </div> </a>';

return $salida;
}
/*///////////////////////////////////////////////////////////////////////////*/
/* Function to create the view of products when you open an individual item. */
/*///////////////////////////////////////////////////////////////////////////*/
function producto($producto){
	
$imgURL = URL($producto["imagenDir"]);

$vProducto = "";
$vProducto = $vProducto . '<div class="col-md-12">';
$vProducto = $vProducto . '<h2>' . $producto['nombre'] . '</h2>' ; 
$vProducto = $vProducto . '<img src="'. $imgURL  .'" alt = "' . $producto['nombre'] 
                  . '" id="img" class="img-rounded img-responsive" data-scale="1.5" >' ;
$vProducto = $vProducto . '<div id="description">';
$vProducto = $vProducto . '<h3> $' . $producto['precio'] .'</h3>';
$vProducto = $vProducto . '<p>' . $producto['descripcion'] . '</p>' ;



return $vProducto;
}

@endphp