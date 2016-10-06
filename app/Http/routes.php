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

$app->get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);


$app->get('/auth/login', 'AuthController@login');

$app->post('/auth/login', 'AuthController@postLogin');

$app->get('/auth/register', 'AuthController@getRegister');

$app->post('/auth/register', 'AuthController@postRegister');

$app->get('/auth/logout', 'AuthController@getLogout');
