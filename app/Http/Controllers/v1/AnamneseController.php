<?php

namespace App\Http\Controllers\v1;

use App\Models\Anamnese;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AnamneseController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $anamneses = Anamnese::with('types:id,libelle')->like('fr_description', $request->search)->paginate($size);
        }else{
            $anamneses = Anamnese::with('types:id,libelle')->latest()->paginate($size);
        }
        
        return $this->successResponse($anamneses);

    }

    public function show($anamnese){

        $anamnese = Anamnese::with('types:id,libelle')->findOrFail($anamnese);
        return $this->successResponse($anamnese);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $anamnese = Anamnese::create([
            'fr_description' => $request->fr_description,
            'en_description' => $request->en_description,
            'slug' => Str::slug($request->fr_description, '-').'-'.time()
        ]);
        $anamnese->types()->sync($request->type_id);

        return $this->successResponse($anamnese);

    }

    public function update(Request $request, $anamnese){
        
        $this->validate($request, $this->validation());
        $anamnese = Anamnese::findOrFail($anamnese);
        $anamnese = $anamnese->fill([
            'fr_description' => $request->fr_description,
            'en_description' => $request->en_description
        ]);

        if ($anamnese->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $anamnese->save();
        $anamnese->types()->sync($request->type_id);
        
        return $this->successResponse($anamnese);

    }

    public function destroy($anamnese){
        
        $anamnese = Anamnese::findOrFail($anamnese);
        $anamnese->delete();
        return $this->successResponse($anamnese);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'type_id' => 'required',
            'fr_description' => 'required', 
            'en_description' => 'required' 
        ];
        return $rules;
    }

    //
}