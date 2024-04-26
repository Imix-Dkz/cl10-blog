<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeConotroller;

    /* // Como se usó, ->prefix('admin') en RouteServiceProvider.php
        Route::get('', function () { //No es necesario escribirlo despues del "get('..."        
            //return "Hola Administrador"; //Prueba de funcionamiento de script

            //Se creará tambien un controlador para que gestione las rutas de aministrador "Admin\HomeConotroller"
        });
    */
    Route::get('', [AdminHomeConotroller::class, 'index']);


?>