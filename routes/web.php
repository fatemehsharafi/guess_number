<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::post('regenerate-number', [\App\Http\Controllers\HomeController::class, 'regenerateNumber'])->name('regenerate.number');
Route::post('check-number', [\App\Http\Controllers\GuessController::class, 'index'])->name('check.number');
