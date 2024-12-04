<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function criminales(){

        return view('pag/criminales');
    }

    public function criminal1($criminal){

        return view('pag.criminal', ['criminal' => $criminal]);
    }

    public function mas($criminal, $mas = null){

        return view('pag.mas',['criminal' => $criminal],['mas' => $mas]);
    }


}

