<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('employee', EmployeeController::class);


