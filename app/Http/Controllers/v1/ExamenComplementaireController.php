<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenComplementaire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenComplementaireController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $examen_complementaires = ExamenComplementaire::with('types:id,libelle')->like('fr_description', $request->search)->paginate($size);
        }else{
            $examen_complementaires = ExamenComplementaire::with('types:id,libelle')->latest()->paginate($size);
        }
        
        return $this->successResponse($examen_complementaires);

    }

    public function show($examen_complementaire){

        $examen_complementaire = ExamenComplementaire::with('types:id,libelle')->findOrFail($examen_complementaire);
        return $this->successResponse($examen_complementaire);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $examen_complementaire = ExamenComplementaire::create([
            'fr_description' => $request->fr_description,
            'prix' => $request->prix,
            'slug' => Str::slug($request->fr_description, '-').'-'.time()
        ]);

        //$examen_complementaire->types()->sync($request->type_id);

        if($request->teleconsultation_id){
            $examen_complementaire->teleconsultations()->sync($request->teleconsultation_id);
        }

        return $this->successResponse($examen_complementaire);

    }

    public function update(Request $request, $examen_complementaire){
        
        $this->validate($request, $this->validation());
        $examen_complementaire = ExamenComplementaire::findOrFail($examen_complementaire);
        $examen_complementaire = $examen_complementaire->fill([
            'fr_description' => $request->fr_description,
            'prix' => $request->prix
        ]);

        if ($examen_complementaire->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $examen_complementaire->save();
        $examen_complementaire->types()->sync($request->type_id);
        
        return $this->successResponse($examen_complementaire);

    }

    public function destroy($relation_id, $examen_complementaire, $relation){
        $examen_complementaire = ExamenComplementaire::findOrFail($examen_complementaire);
        $examen_complementaire->{$relation}()->detach($relation_id);
        //$examen_complementaire->delete();
        return $this->successResponse($examen_complementaire);

    }

/*     public function destroy($relation_id, $examen_clinique, $relation){
        
        $examen_clinique = ExamenClinique::findOrFail($examen_clinique);
        $examen_clinique->{$relation}()->detach($relation_id);
        //$examen_clinique->delete();
        return $this->successResponse($examen_clinique);
    } */

    

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'fr_description' => 'required', 
            'prix' => 'required',
        ];
        return $rules;
    }

    //
}
