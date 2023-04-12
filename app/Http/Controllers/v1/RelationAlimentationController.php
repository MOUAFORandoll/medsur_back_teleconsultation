<?php

namespace App\Http\Controllers\v1;

use App\Models\RelationAlimentation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class RelationAlimentationController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $relation_alimentaires = RelationAlimentation::like('libelle', $request->search)->orderBy('libelle', 'asc')->get();
        }else{
            $relation_alimentaires = RelationAlimentation::latest()->orderBy('libelle', 'asc')->get();
        }

        return $this->successResponse($relation_alimentaires);

    }

    public function show($relation_alimentaire){

        $relation_alimentaire = RelationAlimentation::findOrFail($relation_alimentaire);
        return $this->successResponse($relation_alimentaire);

    }

    public function store(Request $request){
        $relation_alimentaire = RelationAlimentation::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($relation_alimentaire);

    }

    public function update(Request $request, $relation_alimentaire){

        $this->validate($request, $this->validation());
        $relation_alimentaire = RelationAlimentation::findOrFail($relation_alimentaire);
        $relation_alimentaire = $relation_alimentaire->fill([
            'libelle' => $request->libelle
        ]);

        if ($relation_alimentaire->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $relation_alimentaire->save();
        return $this->successResponse($relation_alimentaire);
    }

    public function destroy($relation_alimentaire){
        $relation_alimentaire = RelationAlimentation::findOrFail($relation_alimentaire);
        $relation_alimentaire->delete();
        return $this->successResponse($relation_alimentaire);

    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'libelle' => 'required'
            ];
        }else{
            $rules = [
                'libelle' => 'required'
            ];
        }
        return $rules;
    }


}
