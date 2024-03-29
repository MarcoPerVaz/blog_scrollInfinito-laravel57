<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Ruta API de inicio */
Route::get( 'posts', 'PostController@index' );

/* Ruta para mostrar la información del post */
Route::get( 'post/{slug}', 'PostController@show' );
