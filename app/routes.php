<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get  ('/',                   ['uses' => 'HomeController@show',           'as' => 'home']);

Route::group(['prefix' => 'usuarios'], function() {
    Route::get  ('',                ['uses' => 'UsuarioController@mostrar',     'as' => 'usuarios']);
    Route::get  ('nuevo',           ['uses' => 'UsuarioController@nuevo',       'as' => 'usuarios_nuevo']);
    Route::post ('crear',           ['uses' => 'UsuarioController@crear',       'as' => 'usuarios_crear']);
    Route::get  ('{id}/detalle',    ['uses' => 'UsuarioController@ver',         'as' => 'usuarios_ver']);
});
