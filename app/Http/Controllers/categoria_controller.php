<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoria_controller extends Controller
{
    public function getCategoria(){
        //200 es el codigo de mensajen de que todo salio bien
        return response()->json(categoria::all(),200);
    }
}
