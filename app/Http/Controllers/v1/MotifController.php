<?php

namespace App\Http\Controllers\v1;

use App\Models\Motif;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class MotifController extends Controller
{

    public function index(Request $request){


        $size = $request->size ?? 25;
        if($request->search != ""){
            $motifs = Motif::like('description', $request->search)->paginate($size);
        }else{
            $motifs = Motif::latest()->paginate($size);
        }
        
        return $this->successResponse($motifs);

    }

    public function show($motif){

        $motif = Motif::findOrFail($motif);
        return $this->successResponse($motif);

    }

    public function store(Request $request){

        $this->validate($request, $this->validation());
        $motif = Motif::create([
            'description' => $request->description,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]);

        return $this->successResponse($motif);

    }

    public function update(Request $request, $motif){
        
        $this->validate($request, $this->validation());
        $motif = Motif::findOrFail($motif);
        $motif = $motif->fill([
            'description' => $request->description,
        ]);

        if ($motif->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $motif->save();
        
        return $this->successResponse($motif);

    }

    public function destroy($motif){
        
        $motif = Motif::findOrFail($motif);
        $motif->delete();
        return $this->successResponse($motif);
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        $rules = [
            'description' => 'required'
        ];
        return $rules;
    }

    //
}


