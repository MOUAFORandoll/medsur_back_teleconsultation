<?php

namespace App\Http\Controllers\v1;

use App\Models\Medicament;
use App\Models\Prescription;
use App\Models\RelationAlimentation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Log;

class PrescriptionController extends Controller
{

    public function index(Request $request)
    {

        $page_size = $request->page_size ?? 10;
        //$prescriptions = Prescription::where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->latest()->paginate($page_size);

        $search = $request->search;
        $patients = json_decode($request->patients);
        $prescriptions = Prescription::query();
        if(count($patients) > 0){
            $prescriptions = $prescriptions->whereIn('patient_id', $patients);
        }
        elseif($search != ""){
            $prescriptions = $prescriptions->where('id', 'LIKE', "%$search%");
        }

        $prescriptions = $prescriptions->with('option_financements:id,libelle', 'raison_prescriptions:id,libelle', 'niveau_urgence:id,description')->latest()->paginate($page_size);
        return $this->successResponse($prescriptions);
    }

    public function getEprescriptions(Request $request, $patient_id){

        $page_size = $request->page_size ?? 10;
        $prescriptions = Prescription::where('patient_id', $patient_id)->with('etablissements:id,name')->latest()->paginate($page_size);
        return $this->successResponse($prescriptions);

    }

    public function show($prescription)
    {

        if (Uuid::isValid($prescription)) {
            $prescription = Prescription::where('uuid', $prescription)->first();
        } else {
            $prescription = Prescription::where('id', $prescription)->first();
        }

        $prescription->load(
            'teleconsultations',
            'etablissements',
            'option_financements',
            'raison_prescriptions',
            'niveau_urgence:id,description',
            'medicaments.unite_presentation',
            'medicaments.categorie_medicamenteuse',
            'medicaments.horaire_de_prises',
            'medicaments.conditionnement',
            'medicaments.intervalle_de_prises',
            'medicaments.relation_alimentaires',
            'medicaments.forme_medicamenteuses',
            'medicaments.voie_administrations'
        );
        return $this->successResponse($prescription);
    }

    public function store(Request $request)
    {

        $this->validate($request, $this->validation());
        // Log::alert($request->creator);
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

    public function update(Request $request, $prescription)
    {
        // Log::alert($request->creator);
        $this->validate($request, $this->validation());
        $id = DB::table('prescriptions')->where('uuid', $prescription)->value('id');
        $prescription = Prescription::findOrFail($id);
        $prescription = $prescription->fill([
            'ligne_temps_id' => $request->ligne_temps_id,
            'niveau_urgence_id' => $request->niveau_urgence_id,
            'date_heure' => $request->date_heure,
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'motif' => $request->motif
        ]);

        // Ajout des nouveaux médicaments

        $medicaments = $prescription->medicamentsUpdate ?? [];
        if((count($medicaments) > 0)){
            $prescription->medicaments()->detach();
        }
        foreach ($medicaments as $medicament) {
            $prescription->medicaments()->attach($medicament->id);
        }

        $this->assignMedicaments($request, $prescription);

        if (!is_null($request->option_financement_id)) {
            $prescription->option_financements()->sync($request->option_financement_id);
        }

        if (!is_null($request->raison_prescription_id)) {
            $prescription->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if (!is_null($request->etablissement_id)) {
            $prescription->etablissements()->sync($request->etablissement_id);
        }


        if ($prescription->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prescription->save();

        return $this->successResponse($prescription);
    }

    public function destroy($prescription)
    {

        $prescription = Prescription::findOrFail($prescription);
        $prescription->delete();
        return $this->successResponse($prescription);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null)
    {
        $rules = [
            'date_heure' => 'required',
            'motif' => 'required',
            'medecin_id' => 'required',
            'patient_id' => 'required',
            'creator' => 'required',
            'ligne_temps_id' => 'required',
            'niveau_urgence_id' => 'required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'etablissement_id' => 'required',
            'medicaments' => 'array|required'
        ];
        return $rules;
    }

    public function assignMedicaments(Request $request, $prescription)
    {
        $medicaments = $request->get('medicaments');
        foreach ($medicaments as  $medicament) {
            $med = Medicament::create([
                'uuid' => Str::uuid(),
                'prescription_id' => $prescription->id,
                'unite_presentation_id' => $medicament['presentation']['id'],
                'voie_administration_id' => $medicament['medicament']['voies_administration'],
                'conditionnement_id' => $medicament['condition']['id'],
                'denomination' => $medicament['medicament']['denomination'],
                'code' => $medicament['medicament']['CIS'],
                // 'categorie_medicamenteuse_id' => $medicament['categorie']['id'],
                'intervalle_entre_deux_prises' => $medicament['intervalle_entre_deux_prise_concat'],
                'forme_pharmaceutique' => $medicament['medicament']['forme_pharmaceutique'],
            ]);
            $med->horaire_de_prises()->sync($medicament['horaire']);

            foreach ($medicament['alimentaire'] as $alimentaireId) {
                $med->relation_alimentaires()->attach($alimentaireId['id']);
            }

            $prescription->medicaments()->attach($med->id, [
                'quantite_lors_une_prise' => $medicament['quantite_lors_une_prise'],
                'duree_traitement' => $medicament['duree_traitement'],
                'nombre_de_prise' => $medicament['nombre_prises'],
                'nombre_renouvelement' => $medicament['nombre_renouvelement'],
                'nombre_de_fois' => $medicament['nombre_de_fois'],
                'intervalle_entre_deux_prises' => $medicament['intervalle_entre_deux_prise_concat'],
                'nombre_unite_achat' => $medicament['nombre_unite_achat'],
            ]);
        }

        if (!is_null($request->option_financement_id)) {
            $prescription->option_financements()->sync($request->option_financement_id);
        }

        if (!is_null($request->raison_prescription_id)) {
            $prescription->raison_prescriptions()->sync($request->raison_prescription_id);
        }

        if (!is_null($request->etablissement_id)) {
            $prescription->etablissements()->sync($request->etablissement_id);
        }
        // return response()->json(["prescription" => $prescription, ]);
        return $prescription->load('etablissements:id,name');
    }
}
