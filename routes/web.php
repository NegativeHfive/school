<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teacher',[TeacherController::class , 'index']);
Route::get('/teacher/{teacher}',[TeacherController::class , 'show']);

Route::get('/subject',[SubjectController::class , 'index']);
Route::get('/subject/{subject}',[SubjectController::class , 'show']);
