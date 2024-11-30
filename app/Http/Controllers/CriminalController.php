<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function criminales(){

        return view('criminales/criminales');
    }

    public function criminal1($criminal){

        return view('criminales.criminal', ['criminal' => $criminal]);
    }

    public function mas($criminal, $mas = null){

        return view('criminales.mas',['criminal' => $criminal],['mas' => $mas]);
    }


}

