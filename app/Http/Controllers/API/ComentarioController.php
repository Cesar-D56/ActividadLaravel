<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Comentario;
use App\Modelos\Persona;
use App\Modelos\Producto;

class ComentarioController extends Controller
{
    public function comentuser($id=null){
        $persona= new Persona();
        $producto= new Producto();
        $comentario= new Comentario();
        if ($persona::find($id)){

            
            $comentarios=$comentario::'comentarios'->where('persona_id','=',$id);
            


            return response()->json(["Comentarios del usuario"=>$comentario],200);
        }
        return response()->json(["No se encontro el usuario"],200);
    }
}
