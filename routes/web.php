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

$router->group(['prefix' => 'api'], function () use ($router) {

    /**
     * CRUD type teleconsultations
     */
    $router->group(['prefix' => 'type-teleconsultations'], function () use ($router) {
        $router->get('/', ['uses' => 'TypeTeleconsultationController@index']);
        $router->post('/', ['uses' => 'TypeTeleconsultationController@store']);
        $router->get('/{type_teleconsultation}', ['uses' => 'TypeTeleconsultationController@show']);
        $router->patch('/{type_teleconsultation}', ['uses' => 'TypeTeleconsultationController@update']);
        $router->delete('/{type_teleconsultation}', ['uses' => 'TypeTeleconsultationController@destroy']);
    });

    /**
     * CRUD teleconsultations
     */
    $router->group(['prefix' => 'teleconsultations'], function () use ($router) {
        $router->get('/', ['uses' => 'TeleconsultationController@index']);
        $router->post('/', ['uses' => 'TeleconsultationController@store']);
        $router->get('/{teleconsultation}', ['uses' => 'TeleconsultationController@show']);
        $router->patch('/{teleconsultation}', ['uses' => 'TeleconsultationController@update']);
        $router->delete('/{teleconsultation}', ['uses' => 'TeleconsultationController@destroy']);
    });

    /**
     * CRUD allergies
     */
    $router->group(['prefix' => 'allergies'], function () use ($router) {
        $router->get('/', ['uses' => 'AllergieController@index']);
        $router->post('/', ['uses' => 'AllergieController@store']);
        $router->get('/{allergie}', ['uses' => 'AllergieController@show']);
        $router->patch('/{allergie}', ['uses' => 'AllergieController@update']);
        $router->delete('/{allergie}', ['uses' => 'AllergieController@destroy']);
    });

});
