<?php

namespace App\Http\Controllers\v1;

use App\Models\Conditionnement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ConditionnementController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $conditionnements = Conditionnement::like('libelle', $request->search)->orderBy('libelle', 'asc')->get();
        }else{
            $conditionnements = Conditionnement::latest()->orderBy('libelle', 'asc')->get();
        }

        return $this->successResponse($conditionnements);

    }

    public function show($conditionnement){

        $conditionnement = Conditionnement::findOrFail($conditionnement);
        return $this->successResponse($conditionnement);

    }

    public function store(Request $request){
        $conditionnement = Conditionnement::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($conditionnement);

    }

    public function update(Request $request, $conditionnement){

        $this->validate($request, $this->validation());
        $conditionnement = Conditionnement::findOrFail($conditionnement);
        $conditionnement = $conditionnement->fill([
            'libelle' => $request->libelle
        ]);

        if ($conditionnement->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $conditionnement->save();
        return $this->successResponse($conditionnement);
    }

    public function destroy($conditionnement){
        $conditionnement = Conditionnement::findOrFail($conditionnement);
        $conditionnement->delete();
        return $this->successResponse($conditionnement);

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
