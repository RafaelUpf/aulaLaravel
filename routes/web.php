<?php

use App\Models\Curso;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;



Route::get('/cursos', function () {

    return redirect()->route('cursos.index');

});

Route::resource('cursos',CursoController::class); 

Route::get('/alunos', function () {

    return redirect()->route('cursos.index');

});

Route::resource('alunos',AlunoController::class); 