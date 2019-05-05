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

/**
 * Welcome route
 */
$router->get('/', function () use ($router) {
    return '<h1>Hello, Welcome to Yolo APIs</h1>';
});

/**
 * API Group
 */
$router->group(['prefix' => 'api'], function () use ($router) {

    /**
     * Register route
     */
	$router->post('/register', ['uses' => 'UserController@register']);
    
    /**
     * Login route
     */
    $router->post('/login', ['uses' => 'UserController@login']);
    
    /**
     * User route
     */
    $router->get('/users/{id}', [
        'uses' => 'UserController@show'
    ]);

});
