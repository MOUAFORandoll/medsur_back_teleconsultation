<?php

namespace App\Http\Controllers\v1;

use App\Models\Statut;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class StatutController extends Controller
{

    public function index(Request $request){

        if($request->search != ""){
            $statuts = Statut::like('valeur', $request->search)->get(['id', 'valeur', 'description']);
        }else{
            $statuts = Statut::orderBy('valeur', 'asc')->get(['id', 'valeur', 'description']);
        }

        return $this->successResponse($statuts);

    }

    public function show($statut){

        $statut = Statut::findOrFail($statut)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($statut);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $statut = Statut::create([
            'valeur' => $request->valeur,
            'description' => $request->description,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);

        return $this->successResponse($statut);

    }

    public function update(Request $request, $statut){

        $this->validate($request, $this->validation());
        $statut = Statut::findOrFail($statut);
        $statut = $statut->fill([
            'valeur' => $request->valeur,
            'description' => $request->description,
        ]);

        if ($statut->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $statut->save();
        
        return $this->successResponse($statut);

    }

    public function destroy($statut){
        
        $statut = Statut::findOrFail($statut);
        $statut->delete();
        return $this->successResponse($statut);
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


