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
    }
    public function guardar(Request $request){
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido_p = $request->apellido_p;
        $persona->apellido_m = $request->apellido_m;
        $persona->fecha_nac = $request->fecha_nac;

        if($persona->save())
            return response()->json(["personas"=>$persona],201);
        return response()->json(null,400);
        
    }


}
