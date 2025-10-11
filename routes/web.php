<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;

use App\Http\Controllers\Estudiantes\EstudiantesController;



Route::get('/', function () {

    /*$estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;*/
    //return 'Aqui trabajaremos con la tabla estudiantes';
    return view('welcome');
});


Route::get('/saludo', function () {
    return ('greeting');
})->name('Saludos');

Route::get('/bienvenidos', function () {
    return view('bienvenidos');
})->name('Bienvenidos');

Route::get('/inspire', function () {
    return ('inspire');
})->name('inspire');

Route::get('/brawlperso', function () {
    return view('brawl');
})->name('Brawl');

Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');