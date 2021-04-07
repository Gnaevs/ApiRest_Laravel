<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoria_controller extends Controller
{   
    //Read
    public function getCategoria(){
        //200 es el codigo de mensajen de que todo salio bien
        return response()->json(categoria::all(),200);
    }

    //Peticion GET buscando por id
    public function getCategoriaById($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }
    //Create
    public function insertCategoria(Request $request){
        $categoria = categoria::create($request->all());
        return response()->json($categoria,200);
    }
    //debemos bscar la categria por el id para saber cual es el registro que vamos a actualizar
    //Update
    public function updateCategoria(Request $request, $id){
            $categoria = categoria::find($id);
            if(is_null($categoria)){
                return response()->json(['Mensaje'=>'Registro no encontrado'],404);
            }else
            $categoria->update($request->all());
            return response($categoria,200);
    }
    
    //Delete
    public function deleteCategoria($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }else
        $categoria->delete();
        return response()->json(['Mensaje' => 'Registro Eliminado' ],200);
    }


}
