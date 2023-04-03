<?php

namespace App\Http\Controllers\v1;

use App\Models\Allergie;
use App\Models\Antecedent;
use App\Models\Diagnostic;
use App\Models\ExamenComplementaire;
use App\Models\Motif;
use App\Models\Ordonnance;
use App\Models\RendezVous;
use App\Models\Teleconsultation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class TeleconsultationController extends Controller
{

    public function index(Request $request){
        /** @var mixed
         * Recupération de toute les téléconsultations
         */

        $page_size = $request->page_size ?? 10;
        // where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->
        $teleconsultations = Teleconsultation::with(['types:id,libelle', 'motifs'])/* ->select('id', 'uuid', 'patient_id', 'creator', 'date_heure', 'cat') */->latest()->paginate($page_size);
        return $this->successResponse($teleconsultations);

    }

    public function getTeleconsultations(Request $request){
        /** @var mixed
         * recuperation des téléconsultations d'un patient spécifiques
         */

        $page_size = $request->page_size ?? 10;
        $teleconsultations = Teleconsultation::where('patient_id', $request->user_id)->with(['types:id,libelle', 'motifs', 'etablissements', 'examenComplementaires', 'examenCliniques', 'rendezVous', 'antededents', 'anamneses', 'allergies', 'diagnostics', 'ordonnances'])/* ->select('id', 'uuid', 'patient_id', 'creator', 'date_heure', 'cat') */->latest()->paginate($page_size);
        return $this->successResponse($teleconsultations);

    }

    public function getMedecinTeleconsultations(Request $request){
        /** @var mixed
         * recuperation des téléconsultations d'un médecin spécifique
         */

        $page_size = $request->page_size ?? 10;
        $teleconsultations = Teleconsultation::where("creator", $request->user_id)->with(['types:id,libelle', 'motifs', 'etablissements', 'examenComplementaires', 'examenCliniques', 'rendezVous', 'antededents', 'anamneses', 'allergies', 'diagnostics', 'ordonnances'])/* ->select('id', 'uuid', 'patient_id', 'creator', 'date_heure', 'cat') */->latest()->paginate($page_size);
        return $this->successResponse($teleconsultations);

    }

    public function show($teleconsultation){
        if(Uuid::isValid($teleconsultation)){
            $teleconsultation = Teleconsultation::where('uuid', $teleconsultation)->first();
        }else{
            $teleconsultation = Teleconsultation::where('id', $teleconsultation)->first();
        }
        $teleconsultation = $teleconsultation->load('types:id,libelle', 'motifs', 'etablissements', 'examenComplementaires', 'examenCliniques', 'rendezVous', 'antededents', 'anamneses', 'allergies', 'diagnostics', 'ordonnances');
        return $this->successResponse($teleconsultation);
    }

    public function store(Request $request){

        $this->validate($request, $this->validation($request));
        $teleconsultation = Teleconsultation::create([
            'patient_id' => $request->patient_id,
            'uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'date_heure' => $request->date_heure,
            'cat' => $request->cat,
            'description_diagnostic' => $request->description_diagnostic,
            'description_examen_clinique' => $request->description_examen_clinique
        ]);

        $teleconsultation = $this->associations($teleconsultation, $request);

        return $this->successResponse($teleconsultation);

    }

    public function update(Request $request, $teleconsultation){

        $this->validate($request, $this->validation($request));
        $teleconsultation = Teleconsultation::findOrFail($teleconsultation);
        $teleconsultation = $teleconsultation->fill([
            'patient_id' => $request->patient_id,
            'creator' => $request->creator,
            'date_heure' => $request->date_heure,
            'cat' => $request->cat,
            'description_diagnostic' => $request->description_diagnostic,
            'description_examen_clinique' => $request->description_examen_clinique
        ]);

        if ($teleconsultation->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $teleconsultation->save();

        $teleconsultation = $this->associations($teleconsultation, $request);

        return $this->successResponse($teleconsultation);

    }

    public function destroy($teleconsultation){

        $teleconsultation = Teleconsultation::findOrFail($teleconsultation);
        $teleconsultation->delete();
        return $this->successResponse($teleconsultation);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation(Request $request, $is_update = null){
        $rules = [
            'patient_id' => 'required',
            'creator' => 'required',
            'type_teleconsultation_id' => 'required',
            'date_heure' => 'required',
            'anamnese' => 'required',
            'anamnese_id' => 'required',
            'motif_id' => 'array|required',
            'date_rdv' => Rule::requiredIf(fn () => $request->rendezVous == true),
            'motif_rdv' => Rule::requiredIf(fn () => $request->rendezVous == true),
            'etablissement_id' => 'required',
            'code_icd' => 'required|array',
            'name' => 'required|array',
            'cat' => 'required',
            'description_diagnostic' => 'required',
            /* 'description' => 'required|array',
            'type_id' => 'required|array',
            'date' => 'required|array',
            'dossier_medical_id' => 'required', */

        ];
        return $rules;
    }

    public function searchTeleconsultation($patient_id, $creator, $created_at){
        $teleconsultation = Teleconsultation::where(['patient_id' => $patient_id, 'creator' => $creator])->whereDate('created_at', '>', $created_at)->first();
        return $teleconsultation;
    }

    public function associations(Teleconsultation $teleconsultation, Request $request): Teleconsultation {
        if(!is_null($request->type_teleconsultation_id)){
            $teleconsultation->types()->sync($request->type_teleconsultation_id);
        }
        if(!is_null($request->allergie_id)){
            $teleconsultation->allergies()->sync($this->assignAllergies($request));
        }
        if(!is_null($request->anamnese_id)){

            $teleconsultation->anamneses()->attach($request->anamnese_id, ['data' => json_encode(['anamnese' => $request->anamnese])]);
        }
        if(!is_null($request->antededent_id)){
            $teleconsultation->antededents()->sync($request->antededent_id);
        }
        if(!is_null($request->motif_id)){
            $teleconsultation->motifs()->sync($this->assignMotifs($request));
        }
        if($request->rendezVous){
        // rendezVous
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
                'motifs' => $request->motif_rdv, 
                'date' => $request->date_rdv,
                'slug' => Str::slug($request->motif_rdv, '-').'-'.time()
            ]);

            $teleconsultation->rendezVous()->sync($rendez_vous->id);
        }
        if(!is_null($request->examen_clinique_id)){
            $teleconsultation->examenCliniques()->sync($request->examen_clinique_id);
        }
        if(!is_null($request->examen_complementaire_id)){
            $teleconsultation->examenComplementaires()->sync($this->assignExamenComplementaires($request));
        }
        if(!is_null($request->etablissement_id)){
            $teleconsultation->etablissements()->sync($request->etablissement_id);
        }
        if(count($request->name) >0){
            $diagnostics = [];
            foreach($request->name as $key => $icd){
                $diagnostic = Diagnostic::create([
                    'uuid' => Str::uuid()->toString(),
                    'code_icd' => $request->code_icd[$key],
                    'name' => $request->name[$key]
                ]);
                $diagnostics[] = $diagnostic->id;
            }
            $teleconsultation->diagnostics()->sync($diagnostics);

        }
        if(!is_null($request->description)){
            $antecedents = [];

            foreach($request->description as $key => $description){
                $antecedent = Antecedent::create([
                    'uuid' => Str::uuid()->toString(),
                    'dossier_medical_id' => $request->dossier_medical_id,
                    'description' => $request->description[$key],
                    'date'=> $request->date[$key],
                    'slug' => Str::slug($request->description[$key], '-').'-'.time()
                ]);
                $antecedent->types()->sync($request->type_id[$key]);
                $antecedents[] = $antecedent->id;
            }
            $teleconsultation->antededents()->sync($antecedents);
        }
        if(!is_null($request->ordonnance_description)){
            $ordonannce = Ordonnance::create([
                'description' => $request->ordonnance_description,
                'date' => $request->date_heure
            ]);
            $teleconsultation->ordonnances()->sync($ordonannce);
        }
        $teleconsultation = $teleconsultation->load('types:id,libelle', 'motifs', 'etablissements', 'examenComplementaires', 'examenCliniques', 'rendezVous', 'antededents', 'anamneses', 'allergies', 'diagnostics', 'ordonnances');
        return $teleconsultation;
    }

    public function assignMotifs(Request $request){
        $motifs = [];
        foreach($request->motif_id as $motif_item){
            if(str_contains($motif_item, 'item__')){
                /**
                 * on créé une un s'il n'existe pas
                 */
                $motif = Motif::where("description", explode("__", $motif_item)[1])->first();
                if(is_null($motif)){
                    $motif = Motif::create([
                        'uuid' => Str::uuid(),
                        'description' => explode("__", $motif_item)[1],
                        'slug' => Str::slug(explode("__", $motif_item)[1], '-').'-'.time()
                    ]);
                }
                $motifs[] = $motif->id;
            }else{
                $motifs[] = $motif_item;
            }
        }
        return $motifs;
    }

    public function assignAllergies(Request $request){
        $allergies = [];
        foreach($request->allergie_id as $allergie_item){
            if(str_contains($allergie_item, 'item__')){
                /**
                 * on créé une un s'il n'existe pas
                 */
                $allergie = Allergie::where("description", explode("__", $allergie_item)[1])->first();
                if(is_null($allergie)){
                    $allergie = Allergie::create([
                        'uuid' => Str::uuid(),
                        'description' => explode("__", $allergie_item)[1],
                        'date' => Carbon::now()->format('Y-m-d'),
                        'slug' => Str::slug(explode("__", $allergie_item)[1], '-').'-'.time()
                    ]);
                }
                $allergies[] = $allergie->id;
            }else{
                $allergies[] = $allergie_item;
            }
        }
        return $allergies;
    }

    public function assignExamenComplementaires(Request $request){
        $examen_complementaires = [];
        foreach($request->examen_complementaire_id as $examen_item){
            if(str_contains($examen_item, 'item__')){
                /**
                 * on créé une un s'il n'existe pas
                 */
                $examen_complementaire = ExamenComplementaire::where("fr_description", explode("__", $examen_item)[1])->first();
                if(is_null($examen_complementaire)){
                    $examen_complementaire = ExamenComplementaire::create([
                        'uuid' => Str::uuid(),
                        'fr_description' => explode("__", $examen_item)[1],
                        'prix' => 0,
                        'slug' => Str::slug(explode("__", $examen_item)[1], '-').'-'.time()
                    ]);
                }
                $examen_complementaires[] = $examen_complementaire->id;
            }else{
                $examen_complementaires[] = $examen_item;
            }
        }
        return $examen_complementaires;
    }

}
