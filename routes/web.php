<?php

use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Profile\AdController as ProfileAdController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


Route::middleware(['auth', 'verified', AdminMiddleware::class])->prefix('dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::put('/users/update/{user}', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');

    Route::get('/cities', [CityController::class, 'index'])->name('dashboard.cities.index');
    Route::get('/cities/create', [CityController::class, 'create'])->name('dashboard.cities.create');
    Route::post('/cities/store', [CityController::class, 'store'])->name('dashboard.cities.store');
    Route::get('/cities/edit/{city}', [CityController::class, 'edit'])->name('dashboard.cities.edit');
    Route::put('/cities/update/{city}', [CityController::class, 'update'])->name('dashboard.cities.update');
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

    Route::get('/profile/ads', [ProfileAdController::class, 'index'])->name('profile.ads.index');
    Route::get('/profile/ads/create', [ProfileAdController::class, 'create'])->name('profile.ads.create');
    Route::post('/profile/ads/store', [ProfileAdController::class, 'store'])->name('profile.ads.store');
    Route::get('/profile/ads/edit/{ad}', [ProfileAdController::class, 'edit'])->name('profile.ads.edit');
    Route::put('/profile/ads/update/{ad}', [ProfileAdController::class, 'update'])->name('profile.ads.update');
    Route::delete('/profile/ads/delete/{ad}', [ProfileAdController::class, 'destroy'])->name('profile.ads.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [SiteController::class, 'getCities'])->name('home');
Route::get('/{city:slug}', [SiteController::class, 'getAdsByCity'])->name('ads-by-city');
Route::get('/ads/{ad:slug}', [SiteController::class, 'showAd'])->name('ad');
