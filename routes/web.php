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
        $router->get('/examens/{type}', ['uses' => 'TypeController@getExamens']);

    });

    /**
     * CRUDS teleconsultations
     */
    $router->group(['prefix' => 'teleconsultations'], function () use ($router) {
        $router->get('/', ['uses' => 'TeleconsultationController@index']);
        $router->post('/', ['uses' => 'TeleconsultationController@store']);
        $router->get('/{teleconsultation}', ['uses' => 'TeleconsultationController@show']);
        $router->patch('/{teleconsultation}', ['uses' => 'TeleconsultationController@update']);
        $router->get('/patient/{teleconsultation}', ['uses' => 'TeleconsultationController@getTeleconsultations']);
        $router->delete('/{teleconsultation}', ['uses' => 'TeleconsultationController@destroy']);
        $router->get('/{patient_id}/{creator}/{created_at}', ['uses' => 'TeleconsultationController@searchTeleconsultation']);
    });

    /**
     * CRUDS allergies
     */
    $router->group(['prefix' => 'allergies'], function () use ($router) {
        $router->get('/', ['uses' => 'AllergieController@index']);
        $router->get('/patient/{patient_id}', ['uses' => 'AllergieController@fetchPatientAllergie']);
        $router->post('/', ['uses' => 'AllergieController@store']);
        $router->get('/{allergie}', ['uses' => 'AllergieController@show']);
        $router->patch('/{allergie}', ['uses' => 'AllergieController@update']);
        $router->delete('/{relation_id}/{allergie}/{relation}', ['uses' => 'AllergieController@destroy']);
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
        $router->get('/patient/{patient_id}', ['uses' => 'AntecedentController@fetchPatientAntecedent']);
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
        $router->delete('/{relation_id}/{examen_clinique}/{relation}', ['uses' => 'ExamenCliniqueController@destroy']);
    });

    /**
     * CRUDS examen_complementaires
     */
    $router->group(['prefix' => 'examen_complementaires'], function () use ($router) {
        $router->get('/', ['uses' => 'ExamenComplementaireController@index']);
        $router->post('/', ['uses' => 'ExamenComplementaireController@store']);
        $router->get('/{examen_complementaire}', ['uses' => 'ExamenComplementaireController@show']);
        $router->patch('/{examen_complementaire}', ['uses' => 'ExamenComplementaireController@update']);
        $router->delete('/{relation_id}/{examen_complementaire}/{relation}', ['uses' => 'ExamenComplementaireController@destroy']);
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

    /**
     * CRUD Diagnostic
     */
    $router->group(['prefix' => 'diagnostics'], function () use ($router) {
        $router->get('/', 'DiagnosticController@index');
        $router->post('/', 'DiagnosticController@store');
        $router->get('/{diagnostic}', 'DiagnosticController@show');
        $router->patch('/{diagnostic}', 'DiagnosticController@update');
        $router->delete('/{diagnostic}', 'DiagnosticController@destroy');
    });

    /**
     * CRUD Ordonnance
     */
    $router->group(['prefix' => 'ordonnances'], function () use ($router) {
        $router->get('/', 'OrdonnanceController@index');
        $router->post('/', 'OrdonnanceController@store');
        $router->get('/{ordonnance}', 'OrdonnanceController@show');
        $router->patch('/{ordonnance}', 'OrdonnanceController@update');
        $router->delete('/{relation_id}/{ordonnance}/{relation}', 'OrdonnanceController@destroy');
    });

    /**
     * CRUD Prescription
     */
    $router->group(['prefix' => 'prescriptions'], function () use ($router) {
        $router->get('/', 'PrescriptionController@index');
        $router->post('/', 'PrescriptionController@store');
        $router->get('/{prescription}', 'PrescriptionController@show');
        $router->patch('/{prescription}', 'PrescriptionController@update');
        $router->delete('/{prescription}', 'PrescriptionController@destroy');
    });

    /**
     * CRUD Examen Analyse
     */
    $router->group(['prefix' => 'examen_analyses'], function () use ($router) {
        $router->get('/', 'ExamenAnalyseController@index');
        $router->post('/', 'ExamenAnalyseController@store');
        $router->get('/{examen_analyse}', 'ExamenAnalyseController@show');
        $router->get('/patient/{patient_id}', 'ExamenAnalyseController@getExamenAnalyses');
        $router->patch('/{examen_analyse}', 'ExamenAnalyseController@update');
        $router->delete('/{examen_analyse}', 'ExamenAnalyseController@destroy');
        $router->get('patient/{patient_id}/informations', 'ExamenAnalyseController@getPatientBulletins');
    });

    /**
     * CRUD Prescription Imagerie
     */
    $router->group(['prefix' => 'prescription_imageries'], function () use ($router) {
        $router->get('/', 'PrescriptionImagerieController@index');
        $router->post('/', 'PrescriptionImagerieController@store');
        $router->get('/{prescription_imagerie}', 'PrescriptionImagerieController@show');
        $router->get('/patient/{patient_id}', 'PrescriptionImagerieController@getExamenImageries');
        $router->patch('/{prescription_imagerie}', 'PrescriptionImagerieController@update');
        $router->delete('/{prescription_imagerie}', 'PrescriptionImagerieController@destroy');
    });


    /**
     * CRUD Bon Prise En Charge
     */
    $router->group(['prefix' => 'bon_prises_en_charges'], function () use ($router) {
        $router->get('/', 'BonPriseEnChargeController@index');
        $router->post('/', 'BonPriseEnChargeController@store');
        $router->get('/{bon_prise_en_charge}', 'BonPriseEnChargeController@show');
        $router->get('/patient/{patient_id}', 'BonPriseEnChargeController@getBonPrisesEnCharges');
        $router->patch('/{bon_prise_en_charge}', 'BonPriseEnChargeController@update');
        $router->delete('/{bon_prise_en_charge}', 'BonPriseEnChargeController@destroy');
    });

     /**
     * CRUD Option Financement
     */
    $router->group(['prefix' => 'options_financements'], function () use ($router) {
        $router->get('/', 'OptionFinancementController@index');
        $router->post('/', 'OptionFinancementController@store');
        $router->get('/{options_financement}', 'OptionFinancementController@show');
        $router->patch('/{options_financement}', 'OptionFinancementController@update');
        $router->delete('/{options_financement}', 'OptionFinancementController@destroy');
    });

    /**
     * CRUD RaisonPrescription
     */
    $router->group(['prefix' => 'raison_prescriptions'], function () use ($router) {
        $router->get('/', 'RaisonPrescriptionController@index');
        $router->post('/', 'RaisonPrescriptionController@store');
        $router->get('/{raison_prescription}', 'RaisonPrescriptionController@show');
        $router->patch('/{raison_prescription}', 'RaisonPrescriptionController@update');
        $router->delete('/{raison_prescription}', 'RaisonPrescriptionController@destroy');
    });

    /**
     * CRUD Examens Pertinents
     */
    $router->group(['prefix' => 'examens_pertinents'], function () use ($router) {
        $router->get('/', 'ExamenPertinentPrecedentController@index');
        $router->post('/', 'ExamenPertinentPrecedentController@store');
        $router->get('/{examen_pertinent}', 'ExamenPertinentPrecedentController@show');
        $router->patch('/{examen_pertinent}', 'ExamenPertinentPrecedentController@update');
        $router->delete('/{examen_pertinent}', 'ExamenPertinentPrecedentController@destroy');
    });

    /**
     * CRUD Information supplementaires
     */
    $router->group(['prefix' => 'informations_supplementaires'], function () use ($router) {
        $router->get('/', 'InformationSupplementaireController@index');
        $router->post('/', 'InformationSupplementaireController@store');
        $router->get('/{examen_pertinent}', 'InformationSupplementaireController@show');
        $router->patch('/{examen_pertinent}', 'InformationSupplementaireController@update');
        $router->delete('/{examen_pertinent}', 'InformationSupplementaireController@destroy');
    });
});
