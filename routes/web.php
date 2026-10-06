<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dealers', DealerController::class);
Route::resource('areas', AreaController::class);
Route::resource('supervisors', SupervisorController::class);

Route::get('tasks/{task}/review', [TaskController::class, 'review'])->name('tasks.review');
Route::resource('tasks', TaskController::class);

// CARA PAKAI middleware 'supervisor' / 'dealer':
// Alias-nya didaftarkan di: bootstrap/app.php
// Logikanya di: app/Http/Middleware/EnsureSupervisor.php & EnsureDealer.php
//
// Contoh (JANGAN di-uncomment dulu — butuh kolom 'role' di tabel users + login):
//
// Route::middleware(['auth', 'supervisor'])->group(function () {
//     Route::resource('dealers', DealerController::class); // kelola dealer = kerjaan supervisor
//     Route::resource('areas', AreaController::class);
// });
//
// Route::middleware(['auth', 'dealer'])->group(function () {
//     // Route::get('tasks', ...); // lihat + kumpulin tugas = kerjaan dealer
// });
