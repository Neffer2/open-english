<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller 
{   
    public function index ($pais){
        return view('dashboard', ['pais' => $pais]);
    }

    public function flags(){
        $flags = ['Argentina', 'Bolivia', 'Chile', 'Colombia', 'Costa Rica', 'Ecuador', 'España',
        'EEUU', 'Guatemala', 'México', 'Perú', 'República Dominicana', 'Uruguay'];

        return view('flags', ['flags' => $flags]);
    }
} 
