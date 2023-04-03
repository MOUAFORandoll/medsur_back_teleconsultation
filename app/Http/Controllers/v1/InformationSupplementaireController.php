<?php

namespace App\Http\Controllers\v1;

use App\Models\InformationSupplementaire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class InformationSupplementaireController extends Controller
{

    public function index(Request $request){

        $information_supplementaires = InformationSupplementaire::get(['id', 'libelle']);

        return $this->successResponse($information_supplementaires);

    }

    public function show($information_supplementaire){

        $information_supplementaire = InformationSupplementaire::findOrFail($information_supplementaire)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($information_supplementaire);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
       $information_supplementaire = InformationSupplementaire::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($information_supplementaire);

    }

    public function update(Request $request,$information_supplementaire){

        $this->validate($request, $this->validation());
       $information_supplementaire = InformationSupplementaire::findOrFail($information_supplementaire);
       $information_supplementaire =$information_supplementaire->fill([
            'libelle' => $request->libelle
        ]);

        if ($information_supplementaire->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

       $information_supplementaire->save();

        return $this->successResponse($information_supplementaire);

    }

    public function destroy($information_supplementaire){

       $information_supplementaire = InformationSupplementaire::findOrFail($information_supplementaire);
       $information_supplementaire->delete();
        return $this->successResponse($information_supplementaire);
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


