<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');

Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');
