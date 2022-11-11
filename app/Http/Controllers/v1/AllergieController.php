<?php

namespace App\Http\Controllers\v1;

use App\Models\Allergie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AllergieController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        \Log::alert($request->all());
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

        $this->validate($request, $this->validation());
        $allergie = Allergie::create([
            'description' => $request->description, 
            'date' => $request->date,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);
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

    public function destroy($allergie){
        
        $allergie = Allergie::findOrFail($allergie);
        $allergie->delete();
        return $this->successResponse($allergie);

    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'description' => 'required',
            'date' => 'required'
        ];
        return $rules;
    }

    //
}
