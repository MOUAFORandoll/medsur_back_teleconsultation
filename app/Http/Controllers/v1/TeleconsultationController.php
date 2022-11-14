<?php

namespace App\Http\Controllers\v1;

use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeleconsultationController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        $teleconsultations = Teleconsultation::with('types:id,libelle')->select('id', 'uuid', 'patient_id', 'creator', 'date_heure')->latest()->paginate($page_size);
        return $this->successResponse($teleconsultations);

    }

    public function show($teleconsultation){

        $teleconsultation = Teleconsultation::findOrFail($teleconsultation)->load('allergies', 'anamneses', 'antededents', 'motifs', 'rendezVous', 'examenCliniques', 'examenComplementaires', 'etablissements');
        return $this->successResponse($teleconsultation);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $teleconsultation = Teleconsultation::create([
            'patient_id' => $request->patient_id,
            'creator' => $request->creator,
            'type_teleconsultation_id' => $request->type_teleconsultation_id,
            'date_heure' => $request->date_heure
        ]);
        
        $teleconsultation = $this->associations($teleconsultation, $request);

        return $this->successResponse($teleconsultation);

    }

    public function update(Request $request, $teleconsultation){

        $this->validate($request, $this->validation());
        $teleconsultation = Teleconsultation::findOrFail($teleconsultation);
        $teleconsultation = $teleconsultation->fill([
            'patient_id' => $request->patient_id,
            'creator' => $request->creator,
            'type_teleconsultation_id' => $request->type_teleconsultation_id,
            'date_heure' => $request->date_heure
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
    public function validation($is_update = null){
        $rules = [
            'patient_id' => 'required',
            'creator' => 'required',
            'type_teleconsultation_id' => 'required',
            'date_heure' => 'required',
            'motif_id' => 'array|required',
            'etablissement_id' => 'required'
        ];
        return $rules;
    }

    public function associations(Teleconsultation $teleconsultation, Request $request): Teleconsultation {
        if(!is_null($request->type_teleconsultation_id)){
            $teleconsultation->types()->sync($request->type_teleconsultation_id);
        }
        if(!is_null($request->allergie_id)){
            $teleconsultation->allergies()->sync($request->allergie_id);
        }
        if(!is_null($request->anamnese_id)){
            $teleconsultation->anamneses()->sync($request->anamnese_id);
        }
        if(!is_null($request->antededent_id)){
            $teleconsultation->antededents()->sync($request->antededent_id);
        }
        if(!is_null($request->motif_id)){
            $teleconsultation->motifs()->sync($request->motif_id);
        }
        if(!is_null($request->rendezVous)){
        // rendezVous
        }
        if(!is_null($request->examen_clinique_id)){
            $teleconsultation->examenCliniques()->sync($request->examen_clinique_id);
        }
        if(!is_null($request->examen_complementaire_id)){
            $teleconsultation->examenComplementaires()->sync($request->examen_complementaire_id);
        }
        if(!is_null($request->etablissement_id)){
            $teleconsultation->etablissements()->sync($request->etablissement_id);
        }
        return $teleconsultation;
    }
}
