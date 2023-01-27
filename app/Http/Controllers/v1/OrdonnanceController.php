<?php

namespace App\Http\Controllers\v1;

use App\Models\Allergie;
use App\Models\Ordonnance;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class OrdonnanceController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $ordonnances = Ordonnance::like('description', $request->search)->paginate($page_size);
        }else{
            $ordonnances = Ordonnance::latest()->paginate($page_size);
        }

        return $this->successResponse($ordonnances);

    }

    public function show($ordonnance){

        $ordonnance = Ordonnance::findOrFail($ordonnance);
        return $this->successResponse($ordonnance);

    }

    public function fetchPatientOrdonannce($patient_id){
        $ordonnances = Ordonnance::whereHas('teleconsultations', function ($query) use ($patient_id) {
            $query->where('patient_id', $patient_id);
        })->get();

        return $this->successResponse($ordonnances);
    }

    public function store(Request $request){
        $ordonannce = Ordonnance::create([
            'description' => $request->description,
            'date' => $request->date
        ]);

        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $teleconsultation->ordonannces()->attach($ordonannce);
            return $teleconsultation->ordonannce;
        }
        return $this->successResponse($ordonannce);

    }

    public function update(Request $request, $ordonnance){

        $this->validate($request, $this->validation());
        $ordonnance = Ordonnance::findOrFail($ordonnance);
        $ordonnance = $ordonnance->fill([
            'description' => $request->description, 
            'date' => $request->date
        ]);

        if ($ordonnance->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $ordonnance->save();
        return $this->successResponse($ordonnance);
    }

    public function destroy($relation_id, $ordonnance, $relation){
        $ordonnance = Ordonnance::findOrFail($ordonnance);
        $ordonnance->{$relation}()->detach($relation_id);
        $ordonnance->delete();
        return $this->successResponse($ordonnance);

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
