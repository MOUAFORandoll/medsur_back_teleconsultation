<?php

namespace App\Http\Controllers\v1;

use App\Models\VoieAdministration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class VoieAdministrationController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $voie_administrations = VoieAdministration::like('libelle', $request->search)->orderBy('libelle', 'asc')->get();
        }else{
            $voie_administrations = VoieAdministration::latest()->orderBy('libelle', 'asc')->get();
        }

        return $this->successResponse($voie_administrations);

    }

    public function show($voie_administration){

        $voie_administration = VoieAdministration::findOrFail($voie_administration);
        return $this->successResponse($voie_administration);

    }

    public function store(Request $request){
        $voie_administration = VoieAdministration::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($voie_administration);

    }

    public function update(Request $request, $voie_administration){

        $this->validate($request, $this->validation());
        $voie_administration = VoieAdministration::findOrFail($voie_administration);
        $voie_administration = $voie_administration->fill([
            'libelle' => $request->libelle
        ]);

        if ($voie_administration->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $voie_administration->save();
        return $this->successResponse($voie_administration);
    }

    public function destroy($voie_administration){
        $voie_administration = VoieAdministration::findOrFail($voie_administration);
        $voie_administration->delete();
        return $this->successResponse($voie_administration);

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
