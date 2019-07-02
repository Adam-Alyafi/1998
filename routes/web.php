<?php

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
$router->get('event/all', 'EventController@all');
$router->get('event/show', 'EventController@show');
$router->post('event/create', 'EventController@create');
$router->put('event/update', 'EventController@update');
$router->delete('event/delete', 'EventController@delete');