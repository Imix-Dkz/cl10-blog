<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeConotroller extends Controller
{ //Funciónes de opéración del controlador
    public function index(){
        return view('adminv.index');
        /* //Si la redirección fue correcta, ya se puede instalar AdminLTE3
            composer require jeroennoten/laravel-adminlte
        */

    }
}
