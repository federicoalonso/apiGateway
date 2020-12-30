<?php
use Illuminate\Support\Str;
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

$router->get('/key', function () {
    return Str::random(32);
});


/**
 * rutas de usuario
 */

$router ->get('/users', 'UserController@index');
$router ->post('/user', 'UserController@store');
$router ->get('/user/{usuario}', 'UserController@show');
$router ->put('/user/{usuario}', 'UserController@update');
$router ->patch('/user/{usuario}', 'UserController@update');
$router ->delete('/user/{usuario}', 'UserController@destroy');

/**
 * rutas de unidades
 */
$router->get('/unidades', 'UnidadController@index');
$router->post('/unidad', 'UnidadController@store');
$router->get('/unidad/{unidad}', 'UnidadController@show');
$router->put('/unidad/{unidad}', 'UnidadController@update');
$router->patch('/unidad/{unidad}', 'UnidadController@update');
$router->delete('/unidad/{unidad}', 'UnidadController@destroy');