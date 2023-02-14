<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenAnalyse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenAnalyseController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        $examen_analyses = ExamenAnalyse::where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->latest()->paginate($page_size);
        return $this->successResponse($examen_analyses);
    }

    public function show($examen_analyse){

        $examen_analyse = ExamenAnalyse::findOrFail($examen_analyse)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($examen_analyse);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $examen_analyse = ExamenAnalyse::create(['uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'ligne_temps_id' => $request->ligne_temps_id,
            'etablissement_id' => $request->etablissement_id,
            'option_financement_id' => $request->option_financement_id,
            'raison_prescription_id' => $request->raison_prescription_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'date_heure' => $request->date_heure
        ]);

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
            'etablissement_id' => $request->etablissement_id,
            'option_financement_id' => $request->option_financement_id,
            'raison_prescription_id' => $request->raison_prescription_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'date_heure' => $request->date_heure
        ]);

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
            'renseignement_clinique' => 'required'
        ];
        return $rules;
    }


}


