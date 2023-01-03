<?php

namespace App\Http\Controllers\v1;

use App\Models\ExamenClinique;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ExamenCliniqueController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;

        if($request->search != ""){
            $examen_cliniques = ExamenClinique::with('types:id,libelle')->like('fr_description', $request->search)->paginate($size);
        }else{
            $examen_cliniques = ExamenClinique::with('types:id,libelle')->latest()->paginate($size);
        }

        return $this->successResponse($examen_cliniques);

    }

    public function show($examen_clinique){

        $examen_clinique = ExamenClinique::with('types:id,libelle')->findOrFail($examen_clinique);
        return $this->successResponse($examen_clinique);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        /* $examen_clinique = ExamenClinique::create([
            'fr_description' => $request->fr_description,
            'en_description' => $request->fr_description,
            'slug' => Str::slug($request->fr_description, '-').'-'.time()
        ]);
        $examen_clinique->types()->sync($request->type_id);

        if($request->teleconsultation_id){
            $examen_clinique->teleconsultations()->sync($request->teleconsultation_id);
        } */

        $examen_clinique = $this->assignToTeleconsultation($request);

        return $this->successResponse($examen_clinique);

    }

    public function update(Request $request, $examen_clinique){

        $this->validate($request, $this->validation());
        $examen_clinique = ExamenClinique::findOrFail($examen_clinique);
        $examen_clinique = $examen_clinique->fill([
            'fr_description' => $request->fr_description,
            'en_description' => $request->en_description
        ]);

        if ($examen_clinique->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $examen_clinique->save();
        $examen_clinique->types()->sync($request->type_id);

        return $this->successResponse($examen_clinique);

    }

    public function destroy($relation_id, $examen_clinique, $relation){

        $examen_clinique = ExamenClinique::findOrFail($examen_clinique);
        $examen_clinique->{$relation}()->detach($relation_id);
        //$examen_clinique->delete();
        return $this->successResponse($examen_clinique);
    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'fr_description' => 'required',
        ];
        return $rules;
    }

    public function assignToTeleconsultation(Request $request){
        $examenCliniques = [];
        foreach($request->fr_description as $description_item){
            if(str_contains($description_item, 'item__')){
                /**
                 * on créé un examen clinique s'il n'existe pas
                 */
                $examenClinique = ExamenClinique::where("fr_description", explode("__", $description_item)[1])->first();
                if(is_null($examenClinique)){
                    $examenClinique = ExamenClinique::create([
                        'uuid' => Str::uuid(),
                        'fr_description' => explode("__", $description_item)[1],
                        'en_description' => explode("__", $description_item)[1],
                        'slug' => Str::slug(explode("__", $description_item)[1], '-').'-'.time()
                    ]);
                }
                $examenCliniques[] = $examenClinique->id;
            }else{
                $examenCliniques[] = $description_item;
            }
        }
        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $new_ids = [...$examenCliniques, ...$teleconsultation->examenCliniques()->pluck('id')];
            $new_ids = array_unique($new_ids);
            $teleconsultation->examenCliniques()->detach();
            $teleconsultation->examenCliniques()->sync($new_ids);
            $teleconsultation = $teleconsultation->refresh();
            return $teleconsultation->examenCliniques;
        }
        return $examenCliniques;
    }

    //
}
