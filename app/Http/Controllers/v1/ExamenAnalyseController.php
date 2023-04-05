<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenAnalyse;
use App\Models\Ordonnance;
use App\Models\PrescriptionImagerie;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class ExamenAnalyseController extends Controller
{

    /**
     * Modules Examens d'analyses biologiques
     */
    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        $search = $request->search;
        // "etablissements" , "examen_complementaires", "niveau_urgence", "teleconsultations"

        $examen_analyses = ExamenAnalyse::query();
        if($search != ""){
            $examen_analyses = $examen_analyses->where('id', 'LIKE', "%$search%");
        }
        $examen_analyses = $examen_analyses->where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->with(["option_financements", "raison_prescriptions"])->latest()->paginate($page_size);
        //$examen_analyses = ExamenAnalyse::/* where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)-> */with(["option_financements", "raison_prescriptions"])->latest()->paginate($page_size);
        return $this->successResponse($examen_analyses);
    }

    public function show($examen_analyse){
        if(Uuid::isValid($examen_analyse)){
            $examen_analyse = ExamenAnalyse::where('uuid', $examen_analyse)->first();
        }else{
            $examen_analyse = ExamenAnalyse::where('id', $examen_analyse)->first();
        }
        $types = Type::whereHas("examen_complementaires.examen_analyses", function($query) use ($examen_analyse){
            $query->where('id', $examen_analyse->id);
        })->get();
        $examen_complementaires = collect();
        foreach($types as $type){
            $item = $type;
            $item->examen_complementaires = $type->examen_complementaires()->whereHas("examen_analyses", function($query) use ($examen_analyse){
                $query->where('id', $examen_analyse->id);
            })->get(['id', "fr_description", "prix"]);
            $examen_complementaires->push($item);
        }

        $examen_analyse = $examen_analyse->load("etablissements", "option_financements", "raison_prescriptions", "examen_complementaires", "niveau_urgence", "teleconsultations");
        $examen_analyse->type_examens = $examen_complementaires;
        return $this->successResponse($examen_analyse);
    }

    public function getExamenAnalyses(Request $request, $patient_id){

        $page_size = $request->page_size ?? 10;
        $search = $request->search;
        $examen_analyses = ExamenAnalyse::where('patient_id', $patient_id)->latest()->paginate($page_size);
        return $this->successResponse($examen_analyses);
    }

    public function getPatientBulletins($patient_id){
        $examen_analyses = ExamenAnalyse::where('patient_id', $patient_id)->latest()->get();
        $examen_imageries = PrescriptionImagerie::where('patient_id', $patient_id)->latest()->get();
        $ordonnances = Ordonnance::withWhereHas('teleconsultations', function($query) use ($patient_id){
            $query->where('patient_id', $patient_id);
        })->latest()->get();

        return $this->successResponse(['examen_analyses' => $examen_analyses, 'examen_imageries' => $examen_imageries, 'ordonnances' => $ordonnances]);
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
        if(Uuid::isValid($examen_analyse)){
            $examen_analyse = ExamenAnalyse::where('uuid', $examen_analyse)->first();
        }else{
            $examen_analyse = ExamenAnalyse::where('id', $examen_analyse)->first();
        }
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

        $examen_analyse = $examen_analyse->load("etablissements", "option_financements", "raison_prescriptions", "examen_complementaires", "niveau_urgence", "teleconsultations");

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


