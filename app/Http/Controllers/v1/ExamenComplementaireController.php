<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenComplementaire;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenComplementaireController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $examen_complementaires = ExamenComplementaire::with('types:id,libelle')->like('fr_description', $request->search)->paginate($size);
        }else{
            $examen_complementaires = ExamenComplementaire::with('types:id,libelle')->latest()->paginate($size);
        }
        
        return $this->successResponse($examen_complementaires);

    }

    public function show($examen_complementaire){

        $examen_complementaire = ExamenComplementaire::with('types:id,libelle')->findOrFail($examen_complementaire);
        return $this->successResponse($examen_complementaire);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $examen_complementaire = $this->assignToTeleconsultation($request);

        return $this->successResponse($examen_complementaire);

    }

    public function update(Request $request, $examen_complementaire){

        $this->validate($request, $this->validation());
        $examen_complementaire = ExamenComplementaire::findOrFail($examen_complementaire);
        $examen_complementaire = $examen_complementaire->fill([
            'fr_description' => $request->fr_description,
            'prix' => $request->prix
        ]);

        if ($examen_complementaire->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $examen_complementaire->save();
        $examen_complementaire->types()->sync($request->type_id);
        
        return $this->successResponse($examen_complementaire);

    }

    public function destroy($relation_id, $examen_complementaire, $relation){
        $examen_complementaire = ExamenComplementaire::findOrFail($examen_complementaire);
        $examen_complementaire->{$relation}()->detach($relation_id);
        //$examen_complementaire->delete();
        return $this->successResponse($examen_complementaire);

    }

    public function assignToTeleconsultation(Request $request){
        $examen_complementaires = [];
        foreach($request->fr_description as $description_item){
            if(str_contains($description_item, 'item__')){
                /**
                 * on créé un examen clinique s'il n'existe pas
                 */
                $examen_complementaire = ExamenComplementaire::where("fr_description", explode("__", $description_item)[1])->first();
                if(is_null($examen_complementaire)){
                    $examen_complementaire = ExamenComplementaire::create([
                        'uuid' => Str::uuid(),
                        'fr_description' => explode("__", $description_item)[1],
                        'prix' => 0,
                        'slug' => Str::slug(explode("__", $description_item)[1], '-').'-'.time()
                    ]);
                }
                $examen_complementaires[] = $examen_complementaire->id;
            }else{
                $examen_complementaires[] = $description_item;
            }
        }
        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $new_ids = [...$examen_complementaires, ...$teleconsultation->examenComplementaires()->pluck('id')];
            $new_ids = array_unique($new_ids);
            $teleconsultation->examenComplementaires()->detach();
            $teleconsultation->examenComplementaires()->sync($new_ids);
            $teleconsultation = $teleconsultation->refresh();
            return $teleconsultation->examen_complementaires;
        }
        return $examen_complementaires;
    }



    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'fr_description' => 'required'
        ];
        return $rules;
    }

    //
}
