<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cities', [CityController::class, 'index'])->name('dashboard.cities.index');
    Route::get('/city/create', [CityController::class, 'create'])->name('dashboard.city.create');
    Route::post('/city/store', [CityController::class, 'store'])->name('dashboard.city.store');
    Route::get('/city/{id}', [CityController::class, 'show'])->name('dashboard.city.show');
    Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('dashboard.city.edit');
    Route::put('/city/update/{id}', [CityController::class, 'update'])->name('dashboard.city.update');
    Route::delete('/city/delete/{id}', [CityController::class, 'destroy'])->name('dashboard.city.destroy');

    Route::get('/ads', [AdController::class, 'index'])->name('dashboard.ads.index');
    Route::get('/ad/create', [AdController::class, 'create'])->name('dashboard.ad.create');
    Route::post('/ad/store', [AdController::class, 'store'])->name('dashboard.ad.store');
    Route::get('/ad/{id}', [AdController::class, 'show'])->name('dashboard.ad.show');
    Route::get('/ad/edit/{id}', [AdController::class, 'edit'])->name('dashboard.ad.edit');
    Route::put('/ad/update/{id}', [AdController::class, 'update'])->name('dashboard.ad.update');
    Route::delete('/ad/delete/{id}', [AdController::class, 'destroy'])->name('dashboard.ad.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
