<?php

namespace App\Http\Controllers\v1;

use App\Models\BonPriseEnCharge;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class BonPriseEnChargeController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        // where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->
        $bon_prise_en_charges = BonPriseEnCharge::with(["option_financements", "niveau_urgence", "raison_prescriptions", "etablissements", "examen_complementaires", "motifs", "teleconsultations", "rendezVous"])->latest()->paginate($page_size);
        return $this->successResponse($bon_prise_en_charges);
    }

    public function show($bon_prise_en_charge){
        if(Uuid::isValid($bon_prise_en_charge)){
            $bon_prise_en_charge = BonPriseEnCharge::where('uuid', $bon_prise_en_charge)->first();
        }else{
            $bon_prise_en_charge = BonPriseEnCharge::where('id', $bon_prise_en_charge)->first();
        }
        $bon_prise_en_charge = $bon_prise_en_charge->load("option_financements", "niveau_urgence", "raison_prescriptions", "etablissements", "examen_complementaires", "motifs", "teleconsultations", "rendezVous");
        return $this->successResponse($bon_prise_en_charge);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $bon_prise_en_charge = BonPriseEnCharge::create([
            'uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'plainte' => $request->plainte
        ]);

        if(!is_null($request->option_financement_id)){
            $bon_prise_en_charge->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $bon_prise_en_charge->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $bon_prise_en_charge->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $bon_prise_en_charge->examen_complementaires()->sync($request->examens);
        }

        if(!is_null($request->motifs)){
            $bon_prise_en_charge->motifs()->sync($request->motifs);
        }

        $rendez_vous = RendezVous::create([
            'uuid' => Str::uuid()->toString(),
            'creator' => $request->creator, 
            'consultation_id' => $request->type_teleconsultation_id, 
            'etablissement_id' => $request->etablissement_id, 
            'ligne_temps_id' => $request->ligne_temps_id, 
            'parent_id' => $request->parent_id, 
            'statut_id' => $request->statut_id ?? 6, 
            'sourceable_type' => $request->sourceable_type, 
            'sourceable_id' => $request->sourceable_id, 
            'patient_id' => $request->patient_id, 
            'praticien_id' => $request->praticien_id, 
            'initiateur' => $request->initiateur, 
            'nom_medecin' => $request->nom_medecin, 
            'motifs' => $request->plainte, 
            'date' => $request->date,
            'slug' => Str::slug($request->plainte, '-').'-'.time()
        ]);

        $bon_prise_en_charge->rendezVous()->sync($rendez_vous->id);

        $bon_prise_en_charge = $bon_prise_en_charge->load("option_financements", "raison_prescriptions", "etablissements", "examen_complementaires", "motifs", "rendezVous");

        return $this->successResponse($bon_prise_en_charge);

    }

    public function update(Request $request, $bon_prise_en_charge){

        $this->validate($request, $this->validation());
        $bon_prise_en_charge = BonPriseEnCharge::findOrFail($bon_prise_en_charge);
        $bon_prise_en_charge = $bon_prise_en_charge->fill([
            'uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'plainte' => $request->plainte
        ]);

        if(!is_null($request->option_financement_id)){
            $bon_prise_en_charge->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $bon_prise_en_charge->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $bon_prise_en_charge->etablissements()->sync($request->etablissement_id);
        }

        if(!is_null($request->examens)){
            $bon_prise_en_charge->examen_complementaires()->sync($request->examens);
        }

        if(!is_null($request->motifs)){
            $bon_prise_en_charge->motifs()->sync($request->motifs);
        }

        $bon_prise_en_charge = $bon_prise_en_charge->load("option_financements", "raison_prescriptions", "etablissements", "examen_complementaires", "motifs");


        if ($bon_prise_en_charge->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $bon_prise_en_charge->save();

        return $this->successResponse($bon_prise_en_charge);

    }

    public function destroy($bon_prise_en_charge){

        $bon_prise_en_charge = BonPriseEnCharge::findOrFail($bon_prise_en_charge);
        $bon_prise_en_charge->delete();
        return $this->successResponse($bon_prise_en_charge);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'medecin_id' => 'required',
            'patient_id' => 'required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'niveau_urgence_id' => 'required',
            'plainte' => 'required',
            'date' => 'required'
        ];
        return $rules;
    }


}


