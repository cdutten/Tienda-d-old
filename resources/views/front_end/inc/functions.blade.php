@php
/*////////////////////////////////////////////////////////////////////*/
/* Function to create the view of products who are in the cover page. */
/*////////////////////////////////////////////////////////////////////*/
function portada($producto_id, $producto) {
@endphp
	<div class=" col-md-4">
		<div class="thumbnail">
			<p> <img class="img-responsive" src="  @php echo URL($producto["imagenDir"]); @endphp " alt = " @php echo $producto['nombre']; @endphp " ></img></p>
			<div class="caption">
				<h2> @php echo $producto['nombre'] @endphp </h2> 
				<p>  @php echo $producto['descripcionBreve'] @endphp  </p> 
				<p>
                    <a href=" @php echo 'producto/'. $producto['id']; @endphp " class="btn btn-primary">Comprar ahora!</a> 
                    <a href="@php echo 'producto/'. $producto['id']; @endphp" class="btn btn-default">Mas info</a>
                </p>
			</div> 
		</div> 
	</div> 

@php
}
@endphp

@php
/*///////////////////////////////////////////////////////////////////////////*/
/* Function to create the view of products when you open an individual item. */
/*///////////////////////////////////////////////////////////////////////////*/
function producto($producto){
 @endphp
 <!-- Page Content -->
    <div class="container">
       <div class="row"> 
       		<div class="col-md-3">
                <p class="lead">Tienda-d</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Categoria 1</a>
                    <a href="#" class="list-group-item">Categoria 2</a>
                    <a href="#" class="list-group-item">Categoria 3</a>
                </div>
            </div>

       		<div class="col-md-9"> 
		        <div class="thumbnail">
		            <img class="img-responsive" src="@php echo URL($producto["imagenDir"]) @endphp " alt="@php echo $producto['nombre'] @endphp">
		            <div class="caption-full">
		                <h4 class="pull-right">@php echo "$" . $producto['precio'] @endphp</h4>
		                <h4><a href="#">@php echo $producto['nombre'] @endphp</a></h4>
		        
		                <p class=description> @php echo $producto['descripcion'] @endphp</p>
		                <form action="/cart" method="POST" class="side-by-side">
			              {!! csrf_field() !!}
			              <input type="hidden" name="id" value="{{ $producto->id }}">
			              <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
			              <input type="hidden" name="precio" value="{{ $producto->precio }}">
			              <input type="submit" class="btn btn-success btn-lg pull-right" value="Agregar al Carrito">
			   		 	</form>
		            </div>
		            <div class="ratings">
		                <p class="pull-right">3 opiniones</p>
		                <p>
		                    <span class="glyphicon glyphicon-star"></span>
		                    <span class="glyphicon glyphicon-star"></span>
		                    <span class="glyphicon glyphicon-star"></span>
		                    <span class="glyphicon glyphicon-star"></span>
		                    <span class="glyphicon glyphicon-star-empty"></span>
		                    4.0 estrellas
		                </p>
		            </div>
		            
		        </div>
	       	</div>
        </div>

        

        <div class="well">

            <div class="text-right">
                <a class="btn btn-success">Deja tu opinion</a>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">10 days ago</span>
                    <p>This product was great in terms of quality. I would definitely buy another!</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">12 days ago</span>
                    <p>I've alredy ordered another one!</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">15 days ago</span>
                    <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container -->


@php
}

@endphp