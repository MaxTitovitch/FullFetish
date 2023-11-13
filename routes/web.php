<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/categories', [HomeController::class, 'categories'])->name('home.categories');
Route::get('/models', [HomeController::class, 'models'])->name('home.models');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
