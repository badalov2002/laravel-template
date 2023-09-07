<?php

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

/**
 * Dashboard routes.
 */
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/', [\App\Http\Controllers\Dashboard\Home\HomeController::class, 'index'])->name('home');

    Route::prefix('features')->name('features.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\Features\FeatureController::class, 'index'])->name('index');

        Route::prefix('languages')->name('languages.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Dashboard\Features\Languages\LanguageController::class, 'index'])->name('index');
        });
    });

    Route::get('change-language/{language}', [\App\Http\Controllers\Dashboard\Features\Languages\ChangeLanguageController::class, 'change'])->name('change-language');
});
