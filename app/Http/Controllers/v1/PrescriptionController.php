<?php

namespace App\Http\Controllers\v1;

use App\Models\Medicament;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class PrescriptionController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        //$prescriptions = Prescription::where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->latest()->paginate($page_size);
        $prescriptions = Prescription::with('option_financements:id,libelle', 'raison_prescriptions:id,libelle', 'niveau_urgence:id,description')->latest()->paginate($page_size);
        return $this->successResponse($prescriptions);

    }

    public function show($prescription){

        if(Uuid::isValid($prescription)){
            $prescription = Prescription::where('uuid', $prescription)->first();
        }else{
            $prescription = Prescription::where('id', $prescription)->first();
        }

        $prescription->load('teleconsultations', 'etablissements', 'option_financements', 'raison_prescriptions', 'niveau_urgence:id,description', 'medicaments.unite_presentation'
        , 'medicaments.horaire_de_prises', 'medicaments.conditionnement', 'medicaments.intervalle_de_prises', 'medicaments.relation_alimentaires', 'medicaments.forme_medicamenteuses', 'medicaments.voie_administrations');
        return $this->successResponse($prescription);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $prescription = Prescription::create([
            'uuid' => Str::uuid()->toString(),
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'date_heure' => $request->date_heure,
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'motif' => $request->motif
        ]);

        $prescription = $this->assignMedicaments($request, $prescription);

        return $this->successResponse($prescription);

    }

    public function update(Request $request, $prescription){

        $this->validate($request, $this->validation());
        $prescription = Prescription::findOrFail($prescription);
        $prescription = $prescription->fill([
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'date_heure' => $request->date_heure,
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'motif' => $request->motif
        ]);


        if ($prescription->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prescription->save();

        return $this->successResponse($prescription);

    }

    public function destroy($prescription){

        $prescription = Prescription::findOrFail($prescription);
        $prescription->delete();
        return $this->successResponse($prescription);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'date_heure' => 'required',
            'motif' => 'required',
            'unite_presentation_id' => 'array|required',
            'voie_administration_id' => 'array|required',
            'conditionnement_id' => 'array|required',
            'nom_commerciale' => 'array|required',
            'code' => 'array|required',
            'intervalle_de_prises' => 'array|required',
            'relation_alimentaires' => 'array|required',
            'forme_medicamenteuses' => 'array|required',
            'horaire_de_prises' => 'array|required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'etablissement_id' => 'required',
            //'option_financement_id' => 'required',
            'quantite_lors_une_prise' => 'array|required',
            'duree_traitement' => 'array|required',
            'nombre_de_prise' => 'array|required',
            'nombre_renouvelement' => 'array|required',
            'nombre_de_fois' => 'array|required',
            'nombre_unite_achat' => 'array|required',
            'intervalle_entre_deux_prises' => 'array|required'
        ];
        return $rules;
    }

    public function assignMedicaments(Request $request, $prescription){
        //$medicaments = [];
        foreach($request->nom_commerciale as $key => $allergie_item){

            $medicament = Medicament::create([
                'uuid' => Str::uuid(),
                'unite_presentation_id' => $request->unite_presentation_id[$key],
                'voie_administration_id' => $request->voie_administration_id[$key],
                'conditionnement_id' => $request->conditionnement_id[$key],
                'nom_commerciale' => $request->nom_commerciale[$key],
                'code' => $request->code[$key]
            ]);

            $medicament->horaire_de_prises()->sync($request->horaire_de_prises[$key]);
            $medicament->intervalle_de_prises()->sync($request->intervalle_de_prises[$key]);
            $medicament->relation_alimentaires()->sync($request->relation_alimentaires[$key]);
            $medicament->forme_medicamenteuses()->sync($request->forme_medicamenteuses[$key]);
            $medicament->conditionnements()->sync($request->conditionnement_id[$key]);
            $medicament->voie_administrations()->sync($request->voie_administration_id[$key]);

            //$medicaments[] = $medicament->id;

            $prescription->medicaments()->attach($medicament->id, ['quantite_lors_une_prise' => $request->quantite_lors_une_prise[$key], 'duree_traitement' => $request->duree_traitement[$key], 'nombre_de_prise' => $request->nombre_de_prise[$key], 'nombre_renouvelement' => $request->nombre_renouvelement[$key], 'nombre_de_fois' => $request->nombre_de_fois[$key], 'intervalle_entre_deux_prises' => $request->intervalle_entre_deux_prises[$key], 'nombre_unite_achat' => $request->nombre_unite_achat[$key]]);
        }

        if(!is_null($request->option_financement_id)){
            $prescription->option_financements()->sync($request->option_financement_id);
        }

        if(!is_null($request->raison_prescription_id)){
            $prescription->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if(!is_null($request->etablissement_id)){
            $prescription->etablissements()->sync($request->etablissement_id);
        }
        return $prescription;
    }



}


