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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1'], function($app)
{
	
	$app->post('chabrin/add','ChabrinController@createNew');

	$app->get('chabrin/view/{id}','ChabrinController@view');

	$app->put('chabrin/edit/{id}','ChabrinController@updateNew');

	$app->delete('chabrin/delete/{id}','ChabrinController@delete');

	$app->get('chabrin/index','ChabrinController@index');
});

