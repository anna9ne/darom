<?php

use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cities', [CityController::class, 'index'])->name('dashboard.cities.index');
    Route::get('/cities/create', [CityController::class, 'create'])->name('dashboard.cities.create');
    Route::post('/cities/store', [CityController::class, 'store'])->name('dashboard.cities.store');
    //Route::get('/cities/{id}', [CityController::class, 'show'])->name('dashboard.cities.show');
    //Route::get('/cities/edit/{id}', [CityController::class, 'edit'])->name('dashboard.cities.edit');
    //Route::put('/cities/update/{id}', [CityController::class, 'update'])->name('dashboard.cities.update');
    Route::delete('/cities/delete/{city}', [CityController::class, 'destroy'])->name('dashboard.cities.destroy');

    Route::get('/ads', [AdController::class, 'index'])->name('dashboard.ads.index');
    Route::get('/ads/create', [AdController::class, 'create'])->name('dashboard.ads.create');
    Route::post('/ads/store', [AdController::class, 'store'])->name('dashboard.ads.store');
    Route::get('/ads/{ad}', [AdController::class, 'show'])->name('dashboard.ads.show');
    Route::get('/ads/edit/{ad}', [AdController::class, 'edit'])->name('dashboard.ads.edit');
    Route::put('/ads/update/{ad}', [AdController::class, 'update'])->name('dashboard.ads.update');
    Route::delete('/ads/delete/{ad}', [AdController::class, 'destroy'])->name('dashboard.ads.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


Route::get('/', [SiteController::class, 'getCities'])->name('home');
Route::get('/{city:slug}', [SiteController::class, 'getAdsByCity'])->name('ads-by-city');
Route::get('/ads/{ad:slug}', [SiteController::class, 'showAd'])->name('ad');
