<?php

namespace App\Http\Controllers\v1;

use App\Models\NiveauUrgence;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class NiveauUrgenceController extends Controller
{

    public function index(Request $request){

        if($request->search != ""){
            $niveau_urgencess = NiveauUrgence::like('valeur', $request->search)->get(['id', 'valeur', 'description']);
        }else{
            $niveau_urgencess = NiveauUrgence::orderBy('valeur', 'asc')->get(['id', 'valeur', 'description']);
        }

        return $this->successResponse($niveau_urgencess);

    }

    public function show($niveau_urgence){

        $niveau_urgence = NiveauUrgence::findOrFail($niveau_urgence)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($niveau_urgence);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $niveau_urgences = NiveauUrgence::create([
            'valeur' => $request->valeur,
            'description' => $request->description,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);

        return $this->successResponse($niveau_urgences);

    }

    public function update(Request $request, $niveau_urgences){
        
        $this->validate($request, $this->validation());
        $niveau_urgences = NiveauUrgence::findOrFail($niveau_urgences);
        $niveau_urgences = $niveau_urgences->fill([
            'valeur' => $request->valeur,
            'description' => $request->description,
        ]);

        if ($niveau_urgences->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $niveau_urgences->save();
        
        return $this->successResponse($niveau_urgences);

    }

    public function destroy($niveau_urgences){
        
        $niveau_urgences = NiveauUrgence::findOrFail($niveau_urgences);
        $niveau_urgences->delete();
        return $this->successResponse($niveau_urgences);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'valeur' => 'required',
            'description' => 'required'
        ];
        return $rules;
    }

    //
}


