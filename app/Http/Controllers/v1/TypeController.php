<?php

namespace App\Http\Controllers\v1;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index(Request $request){
        if($request->type != ""){
            return $types = Type::has($request->type)->orderBy('libelle', 'asc')->get(['id', 'libelle', 'description']);
        }
        $types = Type::orderBy('libelle', 'asc')->get(['id', 'libelle', 'description']);
        return $this->successResponse($types);
    }

    public function show($type){
        $type = Type::findOrFail($type);
        return $this->successResponse($type);

    }
    public function getExamens($type){
        $examen_complementaires = Type::findOrFail($type)->examen_complementaires;
        return $this->successResponse($examen_complementaires);

    }
}
