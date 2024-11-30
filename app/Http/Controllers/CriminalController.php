<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function index($criminal, $mas = null){
        if ($mas){
            return "Aquí Aparece más informacion de: {$criminal} y relacion con {$mas}.";
        }
        return "Aquí aparece el historial del criminal {$criminal}.";
    }
}

