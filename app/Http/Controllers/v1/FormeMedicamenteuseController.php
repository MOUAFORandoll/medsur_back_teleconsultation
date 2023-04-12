<?php

namespace App\Http\Controllers\v1;

use App\Models\FormeMedicamenteuse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class FormeMedicamenteuseController extends Controller
{

    public function index(Request $request){

        $page_size = $request->page_size ?? 25;

        $categorie_medicamenteuse_id = $request->categorie_medicamenteuse_id;
        if($request->search != ""){
            if($categorie_medicamenteuse_id != ""){
                $forme_medicamenteuses = FormeMedicamenteuse::where('categorie_medicamenteuse_id', $categorie_medicamenteuse_id)->like('libelle', $request->search)->orderBy('libelle', 'asc')->paginate($page_size);
            }else{
                $forme_medicamenteuses = FormeMedicamenteuse::like('libelle', $request->search)->orderBy('libelle', 'asc')->paginate($page_size);
            }
        }else{
            if($categorie_medicamenteuse_id != ""){
                $forme_medicamenteuses = FormeMedicamenteuse::where('categorie_medicamenteuse_id', $categorie_medicamenteuse_id)->latest()->orderBy('libelle', 'asc')->paginate($page_size);
            }else{
                $forme_medicamenteuses = FormeMedicamenteuse::latest()->orderBy('libelle', 'asc')->paginate($page_size);
            }
        }

        return $this->successResponse($forme_medicamenteuses);

    }

    public function show($forme_medicamenteuse){

        $forme_medicamenteuse = FormeMedicamenteuse::findOrFail($forme_medicamenteuse);
        return $this->successResponse($forme_medicamenteuse);

    }

    public function store(Request $request){
        $forme_medicamenteuse = FormeMedicamenteuse::create([
            'uuid' => Str::uuid()->toString(),
            'categorie_medicamenteuse_id' => $request->categorie_medicamenteuse_id,
            'libelle' => $request->libelle
        ]);

        return $this->successResponse($forme_medicamenteuse);

    }

    public function update(Request $request, $forme_medicamenteuse){

        $this->validate($request, $this->validation());
        $forme_medicamenteuse = FormeMedicamenteuse::findOrFail($forme_medicamenteuse);
        $forme_medicamenteuse = $forme_medicamenteuse->fill([
            'libelle' => $request->libelle,
            'categorie_medicamenteuse_id' => $request->categorie_medicamenteuse_id
        ]);

        if ($forme_medicamenteuse->isClean()) {
            return $this->errorResponse("aucune valeur n'a été mise à jour", Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $forme_medicamenteuse->save();
        return $this->successResponse($forme_medicamenteuse);
    }

    public function destroy($forme_medicamenteuse){
        $forme_medicamenteuse = FormeMedicamenteuse::findOrFail($forme_medicamenteuse);
        $forme_medicamenteuse->delete();
        return $this->successResponse($forme_medicamenteuse);

    }


    /**
     * fonction de validation des formulaires
     */
    public function validation($is_update = null){
        if($is_update){
            $rules = [
                'categorie_medicamenteuse_id' => 'required',
                'libelle' => 'required'
            ];
        }else{
            $rules = [
                'categorie_medicamenteuse_id' => 'required',
                'libelle' => 'required'
            ];
        }
        return $rules;
    }


}
