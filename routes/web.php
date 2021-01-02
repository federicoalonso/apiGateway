<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'], function() use ($router){

    /**
     * USUARIOS ROUTES
     */
    $router->get('/users', 'UsuarioController@index');
    $router->post('/user', 'UsuarioController@store');
    $router->get('/user/{usuario}', 'UsuarioController@show');
    $router->put('/user/{usuario}', 'UsuarioController@update');
    $router->patch('/user/{usuario}', 'UsuarioController@update');
    $router->delete('/user/{usuario}', 'UsuarioController@destroy');
    
    /**
     * UNIDAD ROUTES
     */
    $router->get('/unidades', 'UnidadController@index');
    $router->post('/unidad', 'UnidadController@store');
    $router->get('/unidad/{unidad}', 'UnidadController@show');
    $router->put('/unidad/{unidad}', 'UnidadController@update');
    $router->patch('/unidad/{unidad}', 'UnidadController@update');
    $router->delete('/unidad/{unidad}', 'UnidadController@destroy');

    /**
     * USER ROUTES
     */
    $router->get('/usuarios', 'UserController@index');
    $router->post('/usuario', 'UserController@store');
    $router->get('/usuario/{user}', 'UserController@show');
    $router->put('/usuario/{user}', 'UserController@update');
    $router->patch('/usuario/{user}', 'UserController@update');
    $router->delete('/usuario/{user}', 'UserController@destroy');

});


$router->group(['middleware' => 'auth:api'], function() use ($router){
    $router->get('/usuarios/identificador', 'UserController@identificador');
});