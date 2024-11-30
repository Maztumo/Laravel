<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriminalController;



Route::get('/', [HomeController::class, "index"]);

Route::get('/criminales/{criminal}/{mas?}', [CriminalController::class, "index"]);

/* 
Route::get('/criminales/{criminal}', function ($criminal) {
    return "Aquí aparece el historial del criminal {$criminal}.";
});
 */
