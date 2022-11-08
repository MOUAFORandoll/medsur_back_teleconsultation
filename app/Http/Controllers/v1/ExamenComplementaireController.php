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
        $examen_complementaire->types()->sync($request->type_id);

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

    public function destroy($examen_complementaire){
        
        $examen_complementaire = ExamenComplementaire::findOrFail($examen_complementaire);
        $examen_complementaire->delete();
        return $this->successResponse($examen_complementaire);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'fr_description' => 'required', 
            'prix' => 'required', 
            'slug' => 'required'
        ];
        return $rules;
    }

    //
}
