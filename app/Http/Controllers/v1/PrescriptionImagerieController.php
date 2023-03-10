<?php

namespace App\Http\Controllers\v1;

use App\Models\PrescriptionImagerie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class PrescriptionImagerieController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        // where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->
        $prescription_imageries = PrescriptionImagerie::with(['option_financements', 'raison_prescriptions'])->latest()->paginate($page_size);
        return $this->successResponse($prescription_imageries);
    }

    public function show($prescription_imagerie){
        if(Uuid::isValid($prescription_imagerie)){
            $prescription_imagerie = PrescriptionImagerie::where('uuid', $prescription_imagerie)->first();
        }else{
            $prescription_imagerie = PrescriptionImagerie::where('id', $prescription_imagerie)->first();
        }
        $prescription_imagerie = $prescription_imagerie->load('teleconsultations', 'etablissements', 'option_financements', 'raison_prescriptions', 'examen_complementaires', 'information_supplementaires');
        return $this->successResponse($prescription_imagerie);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $prescription_imagerie = PrescriptionImagerie::create([
            'uuid' => Str::uuid()->toString(),
            'patient_id' => $request->patient_id,
            'creator' => $request->creator,
            'ligne_temps_id' => $request->ligne_temps_id,
            'medecin_id' => $request->medecin_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'information_clinique' => $request->information_clinique,
            'explication_demande_diagnostic' => $request->explication_demande_diagnostic,
            'autre' => $request->autre,
            'date_heure'=> $request->date_heure
        ]);

        if(!is_null($request->option_financement_id)){
            $prescription_imagerie->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $prescription_imagerie->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $prescription_imagerie->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $prescription_imagerie->examen_complementaires()->sync($request->examens);
        }

        if(!is_null($request->information_supplementaires)){
            $prescription_imagerie->information_supplementaires()->sync($request->information_supplementaires);
        }
        $prescription_imagerie = $prescription_imagerie->load('teleconsultations', 'etablissements', 'option_financements', 'raison_prescriptions', 'examen_complementaires', 'information_supplementaires');
        return $this->successResponse($prescription_imagerie);

    }

    public function update(Request $request, $prescription_imagerie){

        $this->validate($request, $this->validation());
        $prescription_imagerie = PrescriptionImagerie::findOrFail($prescription_imagerie);
        $prescription_imagerie = $prescription_imagerie->fill([
            'patient_id' => $request->patient_id,
            'creator' => $request->creator,
            'ligne_temps_id' => $request->ligne_temps_id,
            'medecin_id' => $request->medecin_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'renseignement_clinique' => $request->renseignement_clinique,
            'information_clinique' => $request->information_clinique,
            'explication_demande_diagnostic' => $request->explication_demande_diagnostic,
            'autre' => $request->autre,
            'date_heure'=> $request->date_heure
        ]);

        if(!is_null($request->option_financement_id)){
            $prescription_imagerie->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $prescription_imagerie->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $prescription_imagerie->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $prescription_imagerie->examen_complementaires()->sync($request->examens);
        }

        if(!is_null($request->information_supplementaires)){
            $prescription_imagerie->information_supplementaires()->sync($request->information_supplementaires);
        }

        if ($prescription_imagerie->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prescription_imagerie->save();

        $prescription_imagerie = $prescription_imagerie->load('teleconsultations', 'etablissements', 'option_financements', 'raison_prescriptions', 'examen_complementaires', 'information_supplementaires');

        return $this->successResponse($prescription_imagerie);

    }

    public function destroy($prescription_imagerie){

        $prescription_imagerie = PrescriptionImagerie::findOrFail($prescription_imagerie);
        $prescription_imagerie->delete();
        return $this->successResponse($prescription_imagerie);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'etablissement_id' => 'required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'niveau_urgence_id' => 'required',
            'renseignement_clinique' => 'required',
            'information_clinique' => 'required',
            'explication_demande_diagnostic' => 'required',
            'date_heure' => 'required'
        ];
        return $rules;
    }


}


