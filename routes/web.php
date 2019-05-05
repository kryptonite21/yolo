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

$router->post('/login', 'ExampleController@postLogin');

$router->group(['prefix' => 'api'], function () use ($router) {

	$router->post('/register', function (){
		return 'Hello, This is a POST method: Register';
    });
    
    $router->post('/login', function (){
		return 'Hello, This is a POST method: Login';
    });
    
    $router->get('/users/{id}', function ($id){
		return 'Hello, This is a GET method: Get User: '.$id;
	});

});
