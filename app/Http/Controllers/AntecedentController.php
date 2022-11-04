<?php

namespace App\Http\Controllers;

use App\Models\Antecedent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AntecedentController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $antecedents = Antecedent::with('types:id,libelle')->like('description', $request->search)->paginate($size);
        }else{
            $antecedents = Antecedent::with('types:id,libelle')->latest()->paginate($size);
        }
        
        return $this->successResponse($antecedents);

    }

    public function show($antecedent){

        $antecedent = Antecedent::with('types:id,libelle')->findOrFail($antecedent);
        return $this->successResponse($antecedent);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $antecedent = Antecedent::create([
            'dossier_medical_id' => $request->dossier_medical_id,
            'description' => $request->description,
            'date' => $request->date,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);
        $antecedent->types()->sync($request->type_id);

        return $this->successResponse($antecedent);

    }

    public function update(Request $request, $antecedent){
        
        $this->validate($request, $this->validation());
        $antecedent = Antecedent::findOrFail($antecedent);
        $antecedent = $antecedent->fill([
            'dossier_medical_id' => $request->dossier_medical_id,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        if ($antecedent->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $antecedent->save();
        $antecedent->types()->sync($request->type_id);
        
        return $this->successResponse($antecedent);

    }

    public function destroy($antecedent){
        
        $antecedent = Antecedent::findOrFail($antecedent);
        $antecedent->delete();
        return $this->successResponse($antecedent);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'dossier_medical_id' => 'required',
            'description' => 'required',
            'date' => 'required|date'
        ];
        return $rules;
    }

    //
}
