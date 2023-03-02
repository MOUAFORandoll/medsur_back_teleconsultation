<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenAnalyse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenAnalyseController extends Controller
{

    /**
     * Modules Examens d'analyses biologiques
     */
    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        $examen_analyses = ExamenAnalyse::/* where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)-> */with(["etablissements", "option_financements", "raison_prescriptions", "examen_complementaires", "niveau_urgence", "teleconsultations"])->latest()->paginate($page_size);
        return $this->successResponse($examen_analyses);
    }

    public function show($examen_analyse){

        $examen_analyse = ExamenAnalyse::findOrFail($examen_analyse)->makeHidden(['created_at', 'updated_at', 'deleted_at']);

        $examen_analyse = $examen_analyse->load("etablissements", "option_financements", "raison_prescriptions", "examen_complementaires", "niveau_urgence", "teleconsultations");
        return $this->successResponse($examen_analyse);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $examen_analyse = ExamenAnalyse::create(['uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'date_heure' => $request->date_heure
        ]);

        if(!is_null($request->option_financement_id)){
            $examen_analyse->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $examen_analyse->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $examen_analyse->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $examen_analyse->examen_complementaires()->sync($request->examens);
        }

        $examen_analyse = $examen_analyse->load("etablissements", "option_financements", "raison_prescriptions", "examen_complementaires", "niveau_urgence", "teleconsultations");

        return $this->successResponse($examen_analyse);

    }

    public function update(Request $request, $examen_analyse){

        $this->validate($request, $this->validation());
        $examen_analyse = ExamenAnalyse::findOrFail($examen_analyse);
        $examen_analyse = $examen_analyse->fill([
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'date_heure' => $request->date_heure
        ]);

        if(!is_null($request->option_financement_id)){
            $examen_analyse->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $examen_analyse->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $examen_analyse->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $examen_analyse->examen_complementaires()->sync($request->examens);
        }


        if ($examen_analyse->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $examen_analyse->save();

        return $this->successResponse($examen_analyse);

    }

    public function destroy($examen_analyse){

        $examen_analyse = ExamenAnalyse::findOrFail($examen_analyse);
        $examen_analyse->delete();
        return $this->successResponse($examen_analyse);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'medecin_id' => 'required',
            'patient_id' => 'required',
            'date_heure' => 'required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'etablissement_id' => 'required',
            'niveau_urgence_id' => 'required',
            'renseignement_clinique' => 'required',
            'examens' => 'required'
        ];
        return $rules;
    }


}


