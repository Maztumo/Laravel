<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index"]);


Route::get('/criminales', function () {
    return "Historial de crimenales";
});

/* 
Route::get('/criminales/{criminal}', function ($criminal) {
    return "Aquí aparece el historial del criminal {$criminal}.";
}); AReglo
 */

Route::get('/criminales/{criminal}/{mas?}', function ($criminal, $mas = null) {
    if ($mas){
        return "Aquí Aparece más informacion de: {$criminal} y relacion con {$mas}.";
    }
    return "Aquí aparece el historial del criminal {$criminal}.";
});