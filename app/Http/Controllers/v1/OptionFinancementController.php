<?php

namespace App\Http\Controllers\v1;

use App\Models\OptionFinancement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class OptionFinancementController extends Controller
{

    public function index(Request $request){

       /*  if($request->search != ""){
            $options_financements = OptionFinancement::like('valeur', $request->search)->get(['id', 'valeur', 'description']);
        }else{
            
        } */
        $options_financements = OptionFinancement::orderBy('id', 'asc')->get(['id', 'libelle']);

        return $this->successResponse($options_financements);

    }

    public function show($options_financement){

        $options_financement = OptionFinancement::findOrFail($options_financement)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($options_financement);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $options_financement = OptionFinancement::create([
            'libelle' => $request->libelle,
        ]);

        return $this->successResponse($options_financement);

    }

    public function update(Request $request, $options_financement){

        $this->validate($request, $this->validation());
        $options_financement = OptionFinancement::findOrFail($options_financement);
        $options_financement = $options_financement->fill([
            'libelle' => $request->libelle,
        ]);

        if ($options_financement->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $options_financement->save();
        
        return $this->successResponse($options_financement);

    }

    public function destroy($options_financement){
        
        $options_financement = OptionFinancement::findOrFail($options_financement);
        $options_financement->delete();
        return $this->successResponse($options_financement);
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


