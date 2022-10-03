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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/p2', [\App\Http\Controllers\MainController::class, 'p2']);
Route::get('/p3', [\App\Http\Controllers\MainController::class, 'p3']);
Route::get('/p4', [\App\Http\Controllers\MainController::class, 'p4']);
Route::get('/p5', [\App\Http\Controllers\MainController::class, 'p5']);
