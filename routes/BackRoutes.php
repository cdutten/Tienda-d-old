<?php


/*
|-------------------------------------------------------------------------- |
| PANEL Vendendores                                                         |
|-------------------------------------------------------------------------- |
*/

	/*
	|-------------------------------------------------------------------------- |
	| Crear y eleminar notas                                                    |
	|-------------------------------------------------------------------------- |
	*/

	/* Route::get('/manage', ['middleware' => ['permission:admin-panel'], 'uses' => 'Adminpanel_Controller@index']);*/

	Route::get  ('/PanelBienvienida', 'Adminpanel_Controller@bienvenida');
    
	Route::get  ('/admin', ['middleware' => ['laratrustmidl', 'auth'],'roles' => 'admin', 'uses' => 'Adminpanel_Controller@index']);

	Route::Post ('/admin/crear', 'Adminpanel_Controller@cargar');
	Route::Post ('/admin/borrar', 'Adminpanel_Controller@borrar');
	Route::get	('/admin/editar/{id}', 'Adminpanel_Controller@editar')->name('editusuario');


