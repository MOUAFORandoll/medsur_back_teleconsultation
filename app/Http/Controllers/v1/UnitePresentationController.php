<?php

namespace App\Http\Controllers\v1;

use App\Models\UnitePresentation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class UnitePresentationController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $unite_presentations = UnitePresentation::like('libelle', $request->search)->orderBy('libelle', 'asc')->get();
        }else{
            $unite_presentations = UnitePresentation::latest()->orderBy('libelle', 'asc')->get();
        }

        return $this->successResponse($unite_presentations);

    }

    public function show($unite_presentation){

        $unite_presentation = UnitePresentation::findOrFail($unite_presentation);
        return $this->successResponse($unite_presentation);

    }

    public function store(Request $request){
        $unite_presentation = UnitePresentation::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($unite_presentation);

    }

    public function update(Request $request, $unite_presentation){

        $this->validate($request, $this->validation());
        $unite_presentation = UnitePresentation::findOrFail($unite_presentation);
        $unite_presentation = $unite_presentation->fill([
            'libelle' => $request->libelle
        ]);

        if ($unite_presentation->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $unite_presentation->save();
        return $this->successResponse($unite_presentation);
    }

    public function destroy($unite_presentation){
        $unite_presentation = UnitePresentation::findOrFail($unite_presentation);
        $unite_presentation->delete();
        return $this->successResponse($unite_presentation);

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
