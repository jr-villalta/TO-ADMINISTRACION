<?php

use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\PedidosController;
use App\Http\Controllers\Api\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function (){
    Route::get('/productos','index');
    Route::get('/producto/{id}','show');
    Route::get('/producto/categoria/{filtro}','filtro');
});

Route::controller(CategoriaController::class)->group(function (){
    Route::get('/categorias','index');
    Route::get('/categoria/{id}','show');
});
Route::controller(PedidosController::class)->group(function (){
    Route::get('/pedidos','index');
    Route::post('/pedido','store');
});
