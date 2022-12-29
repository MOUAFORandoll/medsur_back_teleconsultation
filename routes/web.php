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

$router->group(['prefix' => 'api/v1', 'namespace' => 'v1'], function () use ($router) {

    /**
     * CRUDS types
     */
    $router->group(['prefix' => 'types'], function () use ($router) {
        $router->get('/', ['uses' => 'TypeController@index']);
        $router->get('/{type}', ['uses' => 'TypeController@show']);
    });

    /**
     * CRUDS teleconsultations
     */
    $router->group(['prefix' => 'teleconsultations'], function () use ($router) {
        $router->get('/', ['uses' => 'TeleconsultationController@index']);
        $router->post('/', ['uses' => 'TeleconsultationController@store']);
        $router->get('/{teleconsultation}', ['uses' => 'TeleconsultationController@show']);
        $router->patch('/{teleconsultation}', ['uses' => 'TeleconsultationController@update']);
        $router->delete('/{teleconsultation}', ['uses' => 'TeleconsultationController@destroy']);
        $router->get('/{patient_id}/{creator}/{created_at}', ['uses' => 'TeleconsultationController@searchTeleconsultation']);
    });

    /**
     * CRUDS allergies
     */
    $router->group(['prefix' => 'allergies'], function () use ($router) {
        $router->get('/', ['uses' => 'AllergieController@index']);
        $router->post('/', ['uses' => 'AllergieController@store']);
        $router->get('/{allergie}', ['uses' => 'AllergieController@show']);
        $router->patch('/{allergie}', ['uses' => 'AllergieController@update']);
        $router->delete('/{allergie}', ['uses' => 'AllergieController@destroy']);
    });

    /**
     * CRUDS anamneses
     */
    $router->group(['prefix' => 'anamneses'], function () use ($router) {
        $router->get('/', ['uses' => 'AnamneseController@index']);
        $router->post('/', ['uses' => 'AnamneseController@store']);
        $router->get('/{anamnese}', ['uses' => 'AnamneseController@show']);
        $router->patch('/{anamnese}', ['uses' => 'AnamneseController@update']);
        $router->delete('/{anamnese}', ['uses' => 'AnamneseController@destroy']);
    });

    /**
     * CRUDS antecedents
     */
    $router->group(['prefix' => 'antecedents'], function () use ($router) {
        $router->get('/', ['uses' => 'AntecedentController@index']);
        $router->post('/', ['uses' => 'AntecedentController@store']);
        $router->get('/{antecedent}', ['uses' => 'AntecedentController@show']);
        $router->patch('/{antecedent}', ['uses' => 'AntecedentController@update']);
        $router->delete('/{antecedent}', ['uses' => 'AntecedentController@destroy']);
    });

    /**
     * CRUDS etablissements
     */
    $router->group(['prefix' => 'etablissements'], function () use ($router) {
        $router->get('/', ['uses' => 'EtablissementController@index']);
        $router->post('/', ['uses' => 'EtablissementController@store']);
        $router->get('/{etablissement}', ['uses' => 'EtablissementController@show']);
        $router->patch('/{etablissement}', ['uses' => 'EtablissementController@update']);
        $router->delete('/{etablissement}', ['uses' => 'EtablissementController@destroy']);
    });


    /**
     * CRUDS examen_cliniques
     */
    $router->group(['prefix' => 'examen_cliniques'], function () use ($router) {
        $router->get('/', ['uses' => 'ExamenCliniqueController@index']);
        $router->post('/', ['uses' => 'ExamenCliniqueController@store']);
        $router->get('/{examen_clinique}', ['uses' => 'ExamenCliniqueController@show']);
        $router->patch('/{examen_clinique}', ['uses' => 'ExamenCliniqueController@update']);
        $router->delete('/{examen_clinique}', ['uses' => 'ExamenCliniqueController@destroy']);
    });

    /**
     * CRUDS examen_complementaires
     */
    $router->group(['prefix' => 'examen_complementaires'], function () use ($router) {
        $router->get('/', ['uses' => 'ExamenComplementaireController@index']);
        $router->post('/', ['uses' => 'ExamenComplementaireController@store']);
        $router->get('/{examen_complementaire}', ['uses' => 'ExamenComplementaireController@show']);
        $router->patch('/{examen_complementaire}', ['uses' => 'ExamenComplementaireController@update']);
        $router->delete('/{examen_complementaire}', ['uses' => 'ExamenComplementaireController@destroy']);
    });

    /**
     * CRUDS motifs
     */
    $router->group(['prefix' => 'motifs'], function () use ($router) {
        $router->get('/', ['uses' => 'MotifController@index']);
        $router->post('/', ['uses' => 'MotifController@store']);
        $router->get('/{motif}', ['uses' => 'MotifController@show']);
        $router->patch('/{motif}', ['uses' => 'MotifController@update']);
        $router->delete('/{relation_id}/{motif}/{relation}', ['uses' => 'MotifController@destroy']);
    });

    /**
     * CRUDS niveau urgences
     */
    $router->group(['prefix' => 'niveau_urgences'], function () use ($router) {
        $router->get('/', ['uses' => 'NiveauUrgenceController@index']);
        $router->post('/', ['uses' => 'NiveauUrgenceController@store']);
        $router->get('/{niveau_urgence}', ['uses' => 'NiveauUrgenceController@show']);
        $router->patch('/{niveau_urgence}', ['uses' => 'NiveauUrgenceController@update']);
        $router->delete('/{niveau_urgence}', ['uses' => 'NiveauUrgenceController@destroy']);
    });

     /**
     * CRUDS rendez-vous
     */
    $router->group(['prefix' => 'rendez_vous'], function () use ($router) {
        $router->get('/', ['uses' => 'RendezVousController@index']);
        $router->post('/', ['uses' => 'RendezVousController@store']);
        $router->get('/{rendez_vous}', ['uses' => 'RendezVousController@show']);
        $router->patch('/{rendez_vous}', ['uses' => 'RendezVousController@update']);
        $router->delete('/{rendez_vous}', ['uses' => 'RendezVousController@destroy']);
    });

    /**
    * CRUDS statuts
    */
    $router->group(['prefix' => 'statuts'], function () use ($router) {
        $router->get('/', 'StatutController@index');
        $router->post('/', 'StatutController@store');
        $router->get('/{statut}', 'StatutController@show');
        $router->patch('/{statut}', 'StatutController@update');
        $router->delete('/{statut}', 'StatutController@destroy');
    });

});
