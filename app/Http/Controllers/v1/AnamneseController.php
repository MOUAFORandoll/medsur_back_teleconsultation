<?php

namespace App\Http\Controllers\v1;

use App\Models\Anamnese;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AnamneseController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $anamneses = Anamnese::with('types:id,libelle')->like('fr_description', $request->search)->paginate($size);
        }else{
            $anamneses = Anamnese::with('types:id,libelle')->latest()->paginate($size);
        }

        return $this->successResponse($anamneses);

    }

    public function show($anamnese){

        $anamnese = Anamnese::with('types:id,libelle')->findOrFail($anamnese);
        return $this->successResponse($anamnese);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        /* $anamnese = Anamnese::create([
            'fr_description' => $request->fr_description,
            'type_id' => $request->fr_description,
            'slug' => Str::slug($request->fr_description, '-').'-'.time()
        ]); */
        //$anamnese->types()->sync($request->type_id);
        $teleconsultation = Teleconsultation::findOrFail($request->teleconsultation_id);
        

           /*  $teleconsultation->anamneses()->detach();
            $teleconsultation->anamneses()->sync($new_ids);
            $teleconsultation = $teleconsultation->refresh();
            return $teleconsultation->anamneses; */

        $teleconsultation->anamneses()->attach($request->anamnese_id, ['data' => json_encode(['anamnese' => $request->fr_description])]);
        
        /* if(!is_null($request->anamnese_id)){
            $teleconsultation->anamneses()->sync($request->anamnese_id, json_encode(['data' => ['anamnese' => $request->fr_description]]));
        } */


        return $this->successResponse($teleconsultation->load('anamneses'));

    }

    public function update(Request $request, $anamnese){

        $this->validate($request, $this->validation());
        $anamnese = Anamnese::findOrFail($anamnese);
        $anamnese = $anamnese->fill([
            'fr_description' => $request->fr_description,
            'type_id' => $request->type_id
        ]);

        $anamnese->save();
        $anamnese->types()->sync($request->type_id);


       /*  if ($anamnese->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        */

        return $this->successResponse($anamnese);

    }

    public function destroy($anamnese){

        $anamnese = Anamnese::findOrFail($anamnese);
        $anamnese->delete();
        return $this->successResponse($anamnese);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'anamnese_id' => 'required',
            'fr_description' => 'required',
            'teleconsultation_id' => 'required'
        ];
        return $rules;
    }

    //
}
