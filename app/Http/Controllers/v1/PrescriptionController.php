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
        $prescriptions = Prescription::with('option_financements:id,libelle', 'raison_prescriptions:id,libelle', 'niveau_urgence:id,description')->latest()->paginate($page_size);
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
        Log::alert($prescription);
        return $this->successResponse($prescription);
    }

    public function store(Request $request)
    {

        // $this->validate($request, $this->validation());
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
        // $this->validate($request, $this->validation());
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
            'unite_presentation_id' => 'array|required',
            'voie_administration_id' => 'array',
            'conditionnement_id' => 'array|required',
            'nom_commerciale' => 'array|required',
            'code' => 'array|required',
            'intervalle_de_prises' => 'array|required',
            'relation_alimentaires' => 'array|required',
            'forme_medicamenteuses' => 'array|required',
            'horaire_de_prises' => 'required',
            'option_financement_id' => 'required',
            'raison_prescription_id' => 'required',
            'etablissement_id' => 'required',
            //'option_financement_id' => 'required',
            'quantite_lors_une_prise' => 'array|required',
            'duree_traitement' => 'array|required',
            'nombre_de_prise' => 'required',
            'nombre_renouvelement' => 'array|required',
            'nombre_de_fois' => 'array|required',
            'nombre_unite_achat' => 'array|required',
            'intervalle_entre_deux_prises' => 'required',
            'categorie_medicamenteuse_id' => 'array|required'
        ];
        return $rules;
    }

    public function assignMedicaments(Request $request, $prescription)
    {
        $medi = [];
        $medicaments = $request->get('medicaments');
        foreach ($medicaments as  $medicament) {
            $med = Medicament::create([
                'uuid' => Str::uuid(),
                'prescription_id' => $prescription->id,
                'unite_presentation_id' => $medicament['presentation']['id'],
                'voie_administration_id' => $medicament['medicament']['voies_administration'],
                'conditionnement_id' => $medicament['condition']['id'],
                'nom_commerciale' => $medicament['medicament']['denomination'],
                'code' => $medicament['medicament']['CIS'],
                'categorie_medicamenteuse_id' => $medicament['categorie']['id'],
                'intervalle_entre_deux_prises' => $medicament['intervalle_entre_deux_prise_concat'],
                'forme_pharmaceutique' => $medicament['medicament']['forme_pharmaceutique'],
            ]);
            $med->horaire_de_prises()->sync($medicament['horaire']);
            foreach ($medicament['alimentaire'] as $alimentaireId) {
                $med->relation_alimentaires()->sync($alimentaireId['id']);
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
        return $prescription;
    }
}
