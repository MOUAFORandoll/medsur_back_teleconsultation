<?php

namespace App\Http\Controllers\v1;

use App\Models\HoraireDePrise;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class HoraireDePriseController extends Controller
{

    public function index(Request $request){

       /*  if($request->search != ""){
            $horaire_de_prises = HoraireDePrise::like('valeur', $request->search)->get(['id', 'valeur', 'description']);
        }else{
            
        } */
        $horaire_de_prises = HoraireDePrise::orderBy('id', 'asc')->get(['id', 'libelle']);

        return $this->successResponse($horaire_de_prises);

    }

    public function show($horaire_de_prise){

        $horaire_de_prise = HoraireDePrise::findOrFail($horaire_de_prise)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($horaire_de_prise);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $horaire_de_prise = HoraireDePrise::create([
            'libelle' => $request->libelle,
        ]);

        return $this->successResponse($horaire_de_prise);

    }

    public function update(Request $request, $horaire_de_prise){

        $this->validate($request, $this->validation());
        $horaire_de_prise = HoraireDePrise::findOrFail($horaire_de_prise);
        $horaire_de_prise = $horaire_de_prise->fill([
            'libelle' => $request->libelle,
        ]);

        if ($horaire_de_prise->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $horaire_de_prise->save();

        return $this->successResponse($horaire_de_prise);

    }

    public function destroy($horaire_de_prise){

        $horaire_de_prise = HoraireDePrise::findOrFail($horaire_de_prise);
        $horaire_de_prise->delete();
        return $this->successResponse($horaire_de_prise);
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


