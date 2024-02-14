<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(ClienteController::class)->group(function () {
    Route::get('clientes', 'index');
    Route::get('clientes/create', 'create');
    Route::get('clientes/{cliente}', 'show');
    //Route::get('clientes/{cliente}/{archivo?}', 'show');
});



/*Route::get('clientes/{cliente}/{documento?}', function ($cliente,$documento = null) {

    if($documento){
        return "Lista de documentos tipo $documento para $cliente";        
    }else{
        return "Bienvenido cliente:  $cliente";;

    }

   
    
});*/