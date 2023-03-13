<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenPertinentPrecedent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenPertinentPrecedentController extends Controller
{

    public function index(Request $request){

        $examen_pertinents = ExamenPertinentPrecedent::get(['id', 'libelle']);

        return $this->successResponse($examen_pertinents);

    }

    public function show($examen_pertinent){

        $examen_pertinent = ExamenPertinentPrecedent::findOrFail($examen_pertinent)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($examen_pertinent);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
       $examen_pertinent = ExamenPertinentPrecedent::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($examen_pertinent);

    }

    public function update(Request $request,$examen_pertinent){

        $this->validate($request, $this->validation());
       $examen_pertinent = ExamenPertinentPrecedent::findOrFail($examen_pertinent);
       $examen_pertinent =$examen_pertinent->fill([
            'libelle' => $request->libelle
        ]);

        if ($examen_pertinent->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

       $examen_pertinent->save();
        
        return $this->successResponse($examen_pertinent);

    }

    public function destroy($examen_pertinent){
        
       $examen_pertinent = ExamenPertinentPrecedent::findOrFail($examen_pertinent);
       $examen_pertinent->delete();
        return $this->successResponse($examen_pertinent);
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


