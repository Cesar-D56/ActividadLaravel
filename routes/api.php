<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Personas//
Route::get("/personas/userid/{id?}","API\PersonaController@index")->where("id","[0-9]+");
Route::post("/personas/create","API\PersonaController@guardar");


//Comentarios//



//Productos