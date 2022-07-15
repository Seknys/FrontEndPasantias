<?php

use App\Http\Controllers\displayController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui es donde se registran las rutas de la aplicación y se asignan los metodos/controladores que usaran.
|
*/

Route::get('/', [homeController::class, 'index'])->name('home'); //Se crea una ruta para la pagina home y se le asigna la funcion index del modelo homeController ubicado en la carpeta app\Http\Controllers\homeController.php

Route::post('/', [homeController::class, 'store'])->name('home.form'); //Se crea una ruta para el formulario y se le asigna la funcion store del modelo homeController ubicado en la carpeta app\Http\Controllers\homeController.php
