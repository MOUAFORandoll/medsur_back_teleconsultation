<?php

namespace App\Http\Controllers\v1;

use App\Models\Etablissement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class EtablissementController extends Controller
{

    public function index(Request $request){

        $size = $request->size ?? 25;
        if($request->search != ""){
            $etablissements = Etablissement::like('name', $request->search)->paginate($size);
        }else{
            $etablissements = Etablissement::latest()->paginate($size);
        }
        
        return $this->successResponse($etablissements);

    }

    public function show($etablissement){

        $etablissement = Etablissement::findOrFail($etablissement);
        return $this->successResponse($etablissement);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $etablissement = Etablissement::create([
            'name' => $request->name,
            'description' => $request->description,
            'adresse' => $request->adresse,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);

       /*  if($request->hasFile('logo')){
            return "le fichier existe";
        }
        return $request->logo; */
        
        
        return $this->successResponse($etablissement);

    }

    public function update(Request $request, $etablissement){
        
        $this->validate($request, $this->validation());
        $etablissement = Etablissement::findOrFail($etablissement);
        $etablissement = $etablissement->fill([
            'dossier_medical_id' => $request->dossier_medical_id,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        if ($etablissement->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $etablissement->save();
        
        return $this->successResponse($etablissement);

    }

    public function destroy($etablissement){
        
        $etablissement = Etablissement::findOrFail($etablissement);
        $etablissement->delete();
        return $this->successResponse($etablissement);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'adresse' => 'required',
            'logo' => 'file'
        ];
        
        return $rules;
    }

    //
}
