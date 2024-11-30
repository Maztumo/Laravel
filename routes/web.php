<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriminalController;



Route::get('/', [HomeController::class, "index"]);

Route::get('/criminales', [CriminalController::class, "criminales"]);
Route::get('/criminales/{criminal}', [CriminalController::class, "criminal1"]);
Route::get('/criminales/{criminal}/{mas?}', [CriminalController::class, "mas"]);

/* 
Route::get('/criminales/{criminal}', function ($criminal) {
    return "Aquí aparece el historial del criminal {$criminal}.";
});
 */
