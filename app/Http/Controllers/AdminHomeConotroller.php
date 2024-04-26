<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeConotroller extends Controller
{
    //Funciónes de opéración del controlador
    public function index(){
        return view('adminv.index');
        /* //Si la redirección fue correcta, ya se puede instalar AdminLTE3
            composer require jeroennoten/laravel-adminlte
        */

    }
}
