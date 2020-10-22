<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Persona;

class PersonaController extends Controller
{
    public function index($id=null){
        if ($id)
        return response()->json(["persona"=>Persona::find($id)],200);
        return response()->json(["personas"=>Persona::all()],200);
    }
}
