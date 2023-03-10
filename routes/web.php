<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/logout', [HomeController::class, 'logout']);

Route::prefix('karyawan')->group(function() {
    Route::get('/', [KaryawanController::class, 'list']);
    Route::get('/add', [KaryawanController::class, 'add']);
    Route::get('/manage', [KaryawanController::class, 'manage']);
    Route::get('/search', [KaryawanController::class, 'search']);
    Route::get('/edit/{id}', [KaryawanController::class, 'edit']);
    
    Route::post('/', [KaryawanController::class, 'create']);
    Route::put('/{id}', [KaryawanController::class, 'update']);
    Route::get('/{id}', [KaryawanController::class, 'detail']);
    Route::delete('/{id}', [KaryawanController::class, 'delete']);
});

Route::prefix('departement')->group(function() {
    Route::get('/', [DepartemenController::class, 'list']);
    Route::get('/add', [DepartemenController::class, 'add']);
    Route::get('/edit/{id}', [DepartemenController::class, 'edit']);

    Route::post('/', [DepartemenController::class, 'create']);
    Route::put('/{id}', [DepartemenController::class, 'update']);
    Route::delete('/{id}', [DepartemenController::class, 'delete']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
