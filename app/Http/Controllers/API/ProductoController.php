<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Producto;

class ProductoController extends Controller
{
    public function index($id=null){
        if ($id)
            return response()->json(["Producto"=>Producto::find($id)],200);
        return response()->json(["Productos"=>Producto::all()],200);
    }

    public function guardar(Request $request){
        $producto = new Producto();
        $persona->nombre = $request->nombre;
        $persona->apellido_p = $request->apellido_p;

        if($persona->save())
            return response()->json(["personas"=>$persona],201);
        return response()->json(null,400);
        
    }
}
