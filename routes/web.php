<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GPAController;

// Display GPA Calculator form
Route::get('/', [GPAController::class, 'showForm'])->name('calc');

// Handle GPA calculation
Route::post('/calculate-gpa', [GPAController::class, 'calculateGPA'])->name('calculate-gpa');

// Display GPA Results
Route::get('/result', function () {
    return view('result');
})->name('result');

