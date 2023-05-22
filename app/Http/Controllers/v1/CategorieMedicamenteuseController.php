<?php

namespace App\Http\Controllers\v1;

use App\Models\CategorieMedicamenteuse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategorieMedicamenteuseController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;
        if($request->search != ""){
            $categorie_medicamenteuses = CategorieMedicamenteuse::like('libelle', $request->search)->orderBy('libelle', 'asc')->get();
        }else{
            $categorie_medicamenteuses = CategorieMedicamenteuse::latest()->orderBy('libelle', 'asc')->get();
        }

        return $this->successResponse($categorie_medicamenteuses);

    }

    public function show($categorie_medicamenteuse){

        $categorie_medicamenteuse = CategorieMedicamenteuse::findOrFail($categorie_medicamenteuse);
        return $this->successResponse($categorie_medicamenteuse);

    }

    public function store(Request $request){
        $categorie_medicamenteuse = CategorieMedicamenteuse::create([
            'uuid' => Str::uuid()->toString(),
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($categorie_medicamenteuse);

    }

    public function update(Request $request, $categorie_medicamenteuse){

        $this->validate($request, $this->validation());
        $categorie_medicamenteuse = CategorieMedicamenteuse::findOrFail($categorie_medicamenteuse);
        $categorie_medicamenteuse = $categorie_medicamenteuse->fill([
            'libelle' => $request->libelle
        ]);

        if ($categorie_medicamenteuse->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $categorie_medicamenteuse->save();
        return $this->successResponse($categorie_medicamenteuse);
    }

    public function destroy($categorie_medicamenteuse){
        $categorie_medicamenteuse = CategorieMedicamenteuse::findOrFail($categorie_medicamenteuse);
        $categorie_medicamenteuse->delete();
        return $this->successResponse($categorie_medicamenteuse);

    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'libelle' => 'required'
            ];
        }else{
            $rules = [
                'libelle' => 'required'
            ];
        }
        return $rules;
    }


}
