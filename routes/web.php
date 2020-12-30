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

$router->get('/users', 'UsuarioController@index');
$router->post('/user', 'UsuarioController@store');
$router->get('/user/{usuario}', 'UsuarioController@show');
$router->put('/user/{usuario}', 'UsuarioController@update');
$router->patch('/user/{usuario}', 'UsuarioController@update');
$router->delete('/user/{usuario}', 'UsuarioController@destroy');


$router->get('/unidades', 'UnidadController@index');
$router->post('/unidad', 'UnidadController@store');
$router->get('/unidad/{unidad}', 'UnidadController@show');
$router->put('/unidad/{unidad}', 'UnidadController@update');
$router->patch('/unidad/{unidad}', 'UnidadController@update');
$router->delete('/unidad/{unidad}', 'UnidadController@destroy');