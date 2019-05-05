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
    return '<h1>Hello, Welcome to Yolo APIs</h1>';
});

$router->group(['prefix' => 'api'], function () use ($router) {

	$router->post('/register', ['uses' => 'UserController@register']);
    
    $router->post('/login', ['uses' => 'UserController@login']);
    
    $router->get('/users/{id}', function ($id){
		return 'Hello, This is a GET method: Get User: '.$id;
    });

    $router->get('/users/{id}', [
        'uses' => 'UserController@show'
    ]);
    
    $router->get('/test', ['uses' => 'UserController@users']);

});
