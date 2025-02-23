<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/city/create', [CityController::class, 'create'])->name('city.create');
Route::post('/city/store', [CityController::class, 'store'])->name('city.store');
Route::get('/city/{id}', [CityController::class, 'show'])->name('city.show');
Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('city.edit');
Route::put('/city/update/{id}', [CityController::class, 'update'])->name('city.update');
Route::delete('/city/delete/{id}', [CityController::class, 'destroy'])->name('city.destroy');

Route::get('/ads', [AdController::class, 'index'])->name('ads.index');
Route::get('/ad/create', [AdController::class, 'create'])->name('ad.create');
Route::post('/ad/store', [AdController::class, 'store'])->name('ad.store');
Route::get('/ad/{id}', [AdController::class, 'show'])->name('ad.show');
Route::get('/ad/edit/{id}', [AdController::class, 'edit'])->name('ad.edit');
Route::put('/ad/update/{id}', [AdController::class, 'update'])->name('ad.update');
Route::delete('/ad/delete/{id}', [AdController::class, 'destroy'])->name('ad.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
