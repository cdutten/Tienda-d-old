<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

	/*
	|-------------------------------------------------------------------------- |
	| Auth                                                                      |
	|-------------------------------------------------------------------------- |
	*/
		Auth::routes();

		/*
		|-------------------------------------------------------------------------- |
		| FRONT END!                                                                |
		|-------------------------------------------------------------------------- |
		*/

		Route::group(['namespace' => 'Frontend'], function () {
		require_once(__DIR__ . "\FrontRoutes.php");
		});

		/*
		|-------------------------------------------------------------------------- |
		| Backend!                                                                  |
		|-------------------------------------------------------------------------- |
		*/
		Route::group(['middleware' => 'auth'], function () {
			 Route::group(['namespace' => 'Backend'], function () {
			 require_once(__DIR__ . "\BackRoutes.php");
			});
		});

		/*
		|-------------------------------------------------------------------------- |
		| Laracast                                                                  |
		|-------------------------------------------------------------------------- |
		*/
		Route::group(['middleware' => 'auth'], function () {
			 Route::group(['namespace' => 'Backend'], function () {
			 require_once(__DIR__ . "\LaracastRoutes.php");
			});
		});




