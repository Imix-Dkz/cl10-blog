<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeConotroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Models\Tag;

    /* // Como se usó, ->prefix('admin') en RouteServiceProvider.php
        Route::get('', function () { //No es necesario escribirlo despues del "get('..."        
            //return "Hola Administrador"; //Prueba de funcionamiento de script

            //Se creará tambien un controlador para que gestione las rutas de aministrador "Admin\HomeConotroller"
        });
    */
    Route::get('', [HomeConotroller::class, 'index'])->name('admin.home');

    //Aqui se generarán las rutas para el CRUD, que son de tipo RESOURCES
        //> php artisan make:controller Admin/CategoryController --model=Category -r
    Route::resource('categories', CategoryController::class)->names('admin.categories');

    //Ahora se generarán las rutas para el CRUD de Tags
        //> php artisan make:controller Admin/TagController --model=Tag -r
    Route::resource('tags', TagController::class)->names('admin.tags');

?>