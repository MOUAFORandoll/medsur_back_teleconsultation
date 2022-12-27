<?php

namespace App\Http\Controllers\v1;

use App\Models\Motif;
use App\Models\Teleconsultation;
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
        /* $motif = Motif::create([
            'uuid' => Str::uuid(),
            'description' => $request->description,
            'slug' => Str::slug($request->description, '-').'-'.time()
        ]); */
        $motifs = $this->assignToTeleconsultation($request);

        return $this->successResponse($motifs);

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

    public function assignToTeleconsultation(Request $request){
        $motifs = [];
        foreach($request->motifs as $motif_item){
            if(str_contains($motif_item, 'item__')){
                /**
                 * on créé une un s'il n'existe pas
                 */
                $motif = Motif::where("description", explode("__", $motif_item)[1])->first();
                if(is_null($motif)){
                    $motif = Motif::create([
                        'uuid' => Str::uuid(),
                        'description' => $request->description,
                        'slug' => Str::slug($request->description, '-').'-'.time()
                    ]);
                }
                $motifs[] = $motif->id;
            }else{
                $motifs[] = $motif_item;
            }
        }
        if($request->teleconsultation_id){
            $teleconsultation = Teleconsultation::findorFail($request->teleconsultation_id);
            $teleconsultation->motifs()->attach($motifs);
            return $teleconsultation->motifs;
        }
        return $motifs;
    }

    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'motifs' => 'required',
            ];
        }else{
            $rules = [
                'motifs' => 'required|array',
            ];
        }
        return $rules;
    }



    //
}


