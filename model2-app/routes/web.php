<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard', [App\Http\Controllers\Admin\CategoryController::class, 'store']);

    Route::get('/dashboard/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('dashboard.update');

    Route::get('/dashboard/{category}/delete', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('dashboard.delete');
});