<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');



// Define the resource route for EmployeeController
Route::resource('/employee', EmployeeController::class);
Route::resource('/student', StudentController::class);
