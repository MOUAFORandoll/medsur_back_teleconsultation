<?php

namespace App\Http\Controllers\v1;

use App\Models\BonPriseEnCharge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BonPriseEnChargeController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 10;
        $bon_prise_en_charges = BonPriseEnCharge::where("creator", $request->user_id)->orwhere('patient_id', $request->user_id)->latest()->paginate($page_size);
        return $this->successResponse($bon_prise_en_charges);
    }

    public function show($bon_prise_en_charge){

        $bon_prise_en_charge = BonPriseEnCharge::findOrFail($bon_prise_en_charge)->makeHidden(['created_at', 'updated_at', 'deleted_at']);
        return $this->successResponse($bon_prise_en_charge);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $bon_prise_en_charge = BonPriseEnCharge::create(['uuid' => Str::uuid()->toString(),
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'plainte' => $request->plainte
        ]);

        return $this->successResponse($bon_prise_en_charge);

    }

    public function update(Request $request, $bon_prise_en_charge){

        $this->validate($request, $this->validation());
        $bon_prise_en_charge = BonPriseEnCharge::findOrFail($bon_prise_en_charge);
        $bon_prise_en_charge = $bon_prise_en_charge->fill([
            'creator' => $request->creator,
            'medecin_id' => $request->medecin_id,
            'patient_id' => $request->patient_id,
            'plainte' => $request->plainte
        ]);

        if ($bon_prise_en_charge->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $bon_prise_en_charge->save();

        return $this->successResponse($bon_prise_en_charge);

    }

    public function destroy($bon_prise_en_charge){

        $bon_prise_en_charge = BonPriseEnCharge::findOrFail($bon_prise_en_charge);
        $bon_prise_en_charge->delete();
        return $this->successResponse($bon_prise_en_charge);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'plainte' => 'required'
        ];
        return $rules;
    }


}


