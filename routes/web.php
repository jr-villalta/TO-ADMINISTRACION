<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});


//Route::prefix('admin')->group(function(){
    //login
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'loginVerify'])->name('login.verify');
    //cerrar session
    Route::post('signOut',[AuthController::class,'signOut'])->name('signOut');


//});

//protegidas

Route::middleware('auth')->group(function(){
   // Route::prefix('admin')->group(function(){

        //usuario
        Route::resource('user',UsuarioController::class);
        //Categorias
        Route::resource('category',ControllerCategory::class);
        //Producto
        Route::resource('producto',ProductoController::class);
        //dashboard
        Route::get('dashboard',[DashboardController::class,'index'])->name('index');

    //});

});

