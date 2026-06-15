<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)->group(function() {
    Route::get('/', 'index');
});

Route::controller(ExerciseController::class)->group(function() {
    Route::get('/generate-exercises', 'index')->name('generate-exercises');
    Route::post('generate-exercises', 'store')->name('exercises-store');
});
