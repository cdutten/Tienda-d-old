<?php

use App\User;
use App\Role;

Route::get('/attachSA', function(){
 		/*$admin = new Role();
   	    $admin->name 		 = 'admin';
	    $admin->display_name = 'Administrador';
	    $admin->description  = 'Cuenta con todos los privilegios';
	    $admin->save();*/

	    $admin = Role::where('name', '=', 'superadministrator')->first();
          
 		$user = User::where('name', '=', 'Cesar Dutten')->first();

        // role attach alias
		$user->attachRole($admin); // parameter can be an Role object, array, or id
	} );
	
	Route::get('/attachA', function(){
 		/*$admin = new Role();
   	    $admin->name 		 = 'admin';
	    $admin->display_name = 'Administrador';
	    $admin->description  = 'Cuenta con todos los privilegios';
	    $admin->save();*/

	    $admin = Role::where('name', '=', 'administrator')->first();
          
 		$user = User::where('name', '=', 'Cesar Dutten')->first();

        // role attach alias
		$user->attachRole($admin); // parameter can be an Role object, array, or id
	} );
	
	Route::get('/attachC', function(){
 		/*$admin = new Role();
   	    $admin->name 		 = 'admin';
	    $admin->display_name = 'Administrador';
	    $admin->description  = 'Cuenta con todos los privilegios';
	    $admin->save();*/

	    $admin = Role::where('name', '=', 'client')->first();
          
 		$user = User::where('name', '=', 'Cesar Dutten')->first();

        // role attach alias
		$user->attachRole($admin); // parameter can be an Role object, array, or id
	} );
    
    Route::get('/testPrivilege', 'Adminpanel_Controller@test');
