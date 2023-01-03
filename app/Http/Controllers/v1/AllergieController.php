<?php

namespace App\Http\Controllers\v1;

use App\Models\Allergie;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AllergieController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $allergies = Allergie::like('description', $request->search)->paginate($page_size);
        }else{
            $allergies = Allergie::latest()->paginate($page_size);
        }

        return $this->successResponse($allergies);

    }

    public function show($allergie){

        $allergie = Allergie::findOrFail($allergie);
        return $this->successResponse($allergie);

    }

    public function store(Request $request){
        $allergies = [];
        $this->validate($request, $this->validation());

        foreach($request->description as $key => $description){
            $allergie = Allergie::create([
                'description' => $description,
                'date' => $request->date[$key],
                'slug' => Str::slug($description, '-').'-'.time()
            ]);
            $allergies[] = $allergie->id;
        }

        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $teleconsultation->allergies()->attach($allergies);
            return $teleconsultation->allergies;
        }
        return $this->successResponse($allergie);

    }

    public function update(Request $request, $allergie){

        $this->validate($request, $this->validation());
        $allergie = Allergie::findOrFail($allergie);
        $allergie = $allergie->fill([
            'description' => $request->description, 
            'date' => $request->date
        ]);

        if ($allergie->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $allergie->save();
        return $this->successResponse($allergie); 
    }

    public function destroy($relation_id, $allergie, $relation){
        $allergie = Allergie::findOrFail($allergie);
        $allergie->{$relation}()->detach($relation_id);
        //$allergie->delete();
        return $this->successResponse($allergie);

    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'description' => 'required',
                'date' => 'required'
            ];
        }else{
            $rules = [
                'description' => 'required|array',
                'date' => 'required|array'
            ];
        }
        return $rules;
    }

    //
}
