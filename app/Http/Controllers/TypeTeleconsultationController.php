<?php

namespace App\Http\Controllers;

use App\Models\TypeTeleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TypeTeleconsultationController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        $type_teleconsultations = TypeTeleconsultation ::latest()->paginate($page_size);
        return $this->successResponse($type_teleconsultations);

    }

    public function show($type_teleconsultation){

        $type_teleconsultation = TypeTeleconsultation::findOrFail($type_teleconsultation);
        return $this->successResponse($type_teleconsultation);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $type_teleconsultation = TypeTeleconsultation::create([
            'libelle' => $request->libelle
        ]);
        return $this->successResponse($type_teleconsultation);

    }

    public function update(Request $request, $type_teleconsultation){
        
        $this->validate($request, $this->validation());
        $type_teleconsultation = TypeTeleconsultation::findOrFail($type_teleconsultation);
        $type_teleconsultation = $type_teleconsultation->fill([
            'libelle' => $request->libelle
        ]);

        if ($type_teleconsultation->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $type_teleconsultation->save();
        return $this->successResponse($type_teleconsultation);

    }

    public function destroy($type_teleconsultation){
        
        $type_teleconsultation = TypeTeleconsultation::findOrFail($type_teleconsultation);
        $type_teleconsultation->delete();
        return $this->successResponse($type_teleconsultation);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'libelle' => 'required'
        ];
        return $rules;
    }

    //
}
