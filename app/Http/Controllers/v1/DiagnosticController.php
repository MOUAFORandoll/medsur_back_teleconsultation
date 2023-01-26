<?php

namespace App\Http\Controllers\v1;

use App\Models\Diagnostic;
use App\Models\Teleconsultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class DiagnosticController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $diagnostics = Diagnostic::like('name', $request->search)->paginate($page_size);
        }else{
            $diagnostics = Diagnostic::latest()->paginate($page_size);
        }

        return $this->successResponse($diagnostics);

    }

    public function show($diagnostic){

        $diagnostic = Diagnostic::findOrFail($diagnostic);
        return $this->successResponse($diagnostic);

    }

    public function fetchPatientDiagnostic($patient_id){
        $diagnostics = Diagnostic::whereHas('teleconsultations', function ($query) use ($patient_id) {
            $query->where('patient_id', $patient_id);
        })->get();

        return $this->successResponse($diagnostics);
    }

    public function store(Request $request){
        $diagnostics = [];
        $this->validate($request, $this->validation());

        foreach($request->code_icd as $key => $icd){
            $diagnostic = Diagnostic::create([
                'uuid' => Str::uuid()->toString(), 
                'code_icd' => $request->code_icd[$key], 
                'name' => $request->name[$key]
            ]);
            $diagnostics[] = $diagnostic->id;
        }

        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $teleconsultation->diagnostics()->attach($diagnostics);
            return $teleconsultation->diagnostics;
        }
        return $this->successResponse($diagnostic);

    }

    public function update(Request $request, $diagnostic){

        $this->validate($request, $this->validation());
        $diagnostic = Diagnostic::findOrFail($diagnostic);
        $diagnostic = $diagnostic->fill([
            'uuid' => Str::uuid()->toString(), 
            'code_icd' => $request->code_icd, 
            'name' => $request->name
        ]);

        if ($diagnostic->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $diagnostic->save();
        return $this->successResponse($diagnostic); 
    }

    public function destroy($relation_id, $diagnostic, $relation){
        $diagnostic = Diagnostic::findOrFail($diagnostic);
        $diagnostic->{$relation}()->detach($relation_id);
        //$diagnostic->delete();
        return $this->successResponse($diagnostic);

    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'code_icd' => 'required',
                'name' => 'required'
            ];
        }else{
            $rules = [
                'code_icd' => 'required|array',
                'name' => 'required|array'
            ];
        }
        return $rules;
    }
}
