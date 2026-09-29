<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dealers', DealerController::class);
Route::resource('areas', AreaController::class);
Route::resource('supervisors', SupervisorController::class);