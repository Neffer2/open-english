<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller 
{   
    public function index ($pais){
        return view('dashboard', ['pais' => $pais]);
    }

    public function flags(){

        $flags = app('paises');

        return view('flags', ['flags' => $flags]);
    }

    public function createInformes(){
        
        return view('create-informe');
    }
} 
