<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', function () use ($router) {
    return redirect()->route('signin');
});

$router->get('home', [
    'as' => 'home',
    'uses' => 'UserController@homePage'
]);

$router->get('signin', [
    'as' => 'signin',
    'uses' => 'UserController@signInPage'
]);

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('signin', [
        'as' => 'api.v1.signin',
        'uses' => 'UserController@signIn'
    ]);
});


$router->get('error', function () use ($router) {
    return biznet;
});
