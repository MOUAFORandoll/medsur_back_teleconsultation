<?php

namespace App\Http\Controllers\v1;

use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class RendezVousController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->statut_id != ""){
            $rendez_vous = RendezVous::orderBy('date', 'desc')->where('statut_id', $request->statut_id)->paginate($page_size);
        }else{
            $rendez_vous = RendezVous::orderBy('date', 'desc')->paginate($page_size);
        }
       
        return $this->successResponse($rendez_vous);
    
    }

    public function show($rendez_vous){

        $rendez_vous = RendezVous::findOrFail($rendez_vous);
        return $this->successResponse($rendez_vous);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $rendez_vous = RendezVous::create([
            'uuid' => Str::uuid()->toString(),
            'creator' => $request->creator, 
            'consultation_id' => $request->consultation_id, 
            'etablissement_id' => $request->etablissement_id, 
            'ligne_temps_id' => $request->ligne_temps_id, 
            'parent_id' => $request->parent_id, 
            'statut_id' => $request->statut_id, 
            'sourceable_type' => $request->sourceable_type, 
            'sourceable_id' => $request->sourceable_id, 
            'patient_id' => $request->patient_id, 
            'praticien_id' => $request->praticien_id, 
            'initiateur' => $request->initiateur, 
            'nom_medecin' => $request->nom_medecin, 
            'motifs' => $request->motifs, 
            'date' => $request->date,
            'slug' => Str::slug($request->motifs, '-').'-'.time()
        ]);
        return $this->successResponse($rendez_vous);

    }

    public function update(Request $request, $rendez_vous){
        
        $this->validate($request, $this->validation());
        $rendez_vous = RendezVous::findOrFail($rendez_vous);
        $rendez_vous = $rendez_vous->fill([
            'creator' => $request->creator, 
            'consultation_id' => $request->consultation_id, 
            'etablissement_id' => $request->etablissement_id, 
            'ligne_temps_id' => $request->ligne_temps_id, 
            'parent_id' => $request->parent_id, 
            'statut_id' => $request->statut_id, 
            'sourceable_type' => $request->sourceable_type, 
            'sourceable_id' => $request->sourceable_id, 
            'patient_id' => $request->patient_id, 
            'praticien_id' => $request->praticien_id, 
            'initiateur' => $request->initiateur, 
            'nom_medecin' => $request->nom_medecin, 
            'motifs' => $request->motifs, 
            'date' => $request->date
        ]);

        if ($rendez_vous->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $rendez_vous->save();
        return $this->successResponse($rendez_vous); 
    }

    public function destroy($rendez_vous){
        
        $rendez_vous = RendezVous::findOrFail($rendez_vous);
        $rendez_vous->delete();
        return $this->successResponse($rendez_vous);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'creator' => 'required', 
            //'consultation_id', 
            'etablissement_id' => 'required', 
            /* 'ligne_temps_id', 
            'parent_id', 
            'statut_id', 
            'sourceable_type', 
            'sourceable_id',  */
            'patient_id' => 'required', 
            /* 'praticien_id' => 'required', 
            'initiateur', 
            'nom_medecin',  */
            'motifs' => 'required', 
            'date' => 'required'
        ];
        return $rules;
    }

    //
}
