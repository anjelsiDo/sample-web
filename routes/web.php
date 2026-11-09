<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('students.dashboard');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{section}', [StudentController::class, 'section'])
    ->whereIn('section', ['courses', 'schedule', 'grades', 'messages'])
    ->name('students.section');