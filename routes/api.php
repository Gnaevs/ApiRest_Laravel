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
//obtener todas las categorias
Route::get('/categoria','App\Http\Controllers\categoria_controller@getCategoria');
//Obtener la categoria por ID
Route::get('/categoria/{id}', 'App\Http\Controllers\categoria_controller@getCategoriaByID');

///   AHORA PARA EL EJEMPLO ESTA BIEN, PERO NO DEBO DE PONER VERBOS EN LAS DIRECCIONES /////

//insertar una nueca categoria
Route::post('/addCategoria', 'App\Http\Controllers\categoria_controller@insertCategoria');
//actualizar una categoria existente
Route::put('updateCategoria/{id}', 'App\Http\Controllers\categoria_controller@updateCategoria');
//Eliminar un registro
Route::delete('deleteCategoria/{id}','App\Http\Controllers\categoria_controller@deleteCategoria');
