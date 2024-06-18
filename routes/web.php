<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])
    ->name('index');

Route::get('/trabajos', [\App\Http\Controllers\JobsController::class, "jobs"])
    ->name('jobs');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, "admin"])
    ->name('admin')
    ->middleware('auth');

// ABM
Route::get('/admin/cargar-nuevo', [\App\Http\Controllers\AdminController::class, "create"])
    ->name('create')
    ->middleware('auth');

Route::post('/admin/cargar-nuevo', [\App\Http\Controllers\AdminController::class, "createProcess"])
    ->name('create.process')
    ->middleware('auth');

Route::get('/admin/{id}/editar', [\App\Http\Controllers\AdminController::class, "edit"])
    ->name('edit')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/admin/{id}/editar', [\App\Http\Controllers\AdminController::class, "editProcess"])
    ->name('edit.process')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('/admin/{id}/eliminar', [\App\Http\Controllers\AdminController::class, "deleteForm"])
    ->name('delete.form')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/admin/{id}/eliminar', [\App\Http\Controllers\AdminController::class, "deleteProcess"])
    ->name('delete.process')
    ->whereNumber('id')
    ->middleware('auth');

// AUTH
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "login"])
    ->name('login');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])
    ->name('login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])
    ->name('logout.process')
    ->middleware('auth');

// REGISTER
Route::get('/crear-cuenta', [\App\Http\Controllers\AuthController::class, "register"])
    ->name('register');

Route::post('/crear-cuenta', [\App\Http\Controllers\AuthController::class, "registerProcess"])
    ->name('register');
