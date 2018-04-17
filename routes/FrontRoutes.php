<?php
/*
|-------------------------------------------------------------------------- |
| FRONT END!                                                                |
|-------------------------------------------------------------------------- |
*/
		
    /*
	|-------------------------------------------------------------------------- |
	| Inicio                                                                    |
	|-------------------------------------------------------------------------- |
	*/

	Route::get('/', 'FrontEnd_Controller@index');
	Route::get('/inicio', 'FrontEnd_Controller@index');

	Route::get('/Products', 'FrontEnd_Controller@Products' );

	Route::get('/producto/{pID}', 'FrontEnd_Controller@productoX');

	/*
	|-------------------------------------------------------------------------- |
	| Buscador                                                                  |
	|-------------------------------------------------------------------------- |
	*/

	Route::get('inicio/buscar', "FrontEnd_Controller@buscar" );
	Route::get('inicio/buscar/{buscar}', "FrontEnd_Controller@search");

	/*
	|-------------------------------------------------------------------------- |
	| Carrito                                                                   |
	|-------------------------------------------------------------------------- |
	*/
    Route::get('/carrito', 'CartController@index');  
    Route::resource('cart', 'CartController');    
    
