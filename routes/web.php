<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return "view Hola mundo";
});


Route::get('curso', function () {
    return "Bienvenidos a la pagina de cursos";
});

Route::get('curso/create', function () {
    return "En esta pagina podras crear cursos";
});

Route::get('curso/{curso}', function ($curso) {
    return "Bienvenidos al curso: $curso";
});

Route::get('curso/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenidos al de cursos $curso , del categoria $categoria)";
});

