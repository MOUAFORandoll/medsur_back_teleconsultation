<?php

namespace App\Http\Controllers\v1;

use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PrescriptionController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        $prescriptions = Prescription::where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->latest()->paginate($page_size);
        return $this->successResponse($prescriptions);
    }

    public function show($prescription){

        $prescription = Prescription::findOrFail($prescription)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($prescription);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $prescription = Prescription::create(['uuid' => Str::uuid()->toString(),
            'date_heure' => $request->date_heure,
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'motif' => $request->motif
        ]);

        return $this->successResponse($prescription);

    }

    public function update(Request $request, $prescription){

        $this->validate($request, $this->validation());
        $prescription = Prescription::findOrFail($prescription);
        $prescription = $prescription->fill([
            'date_heure' => $request->date_heure,
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'motif' => $request->motif
        ]);

        if ($prescription->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prescription->save();

        return $this->successResponse($prescription);

    }

    public function destroy($prescription){

        $prescription = Prescription::findOrFail($prescription);
        $prescription->delete();
        return $this->successResponse($prescription);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'date_heure' => 'required',
            'motif' => 'required'
        ];
        return $rules;
    }


}


