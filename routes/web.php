<?php
// routes/web.php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return redirect()->route('students.index');
});
Route::resource('students', StudentController::class);
Route::resource('majors', MajorController::class);
Route::resource('subjects', SubjectController::class);
