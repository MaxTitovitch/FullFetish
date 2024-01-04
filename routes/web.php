<?php

use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/reset', [ProfileController::class, 'reset'])->name('profile.reset');

    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');
    Route::get('/payment', [ProfileController::class, 'payment'])->name('profile.payment');
    Route::get('/verification', [ProfileController::class, 'verification'])->name('profile.verification');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/subscriptions', [HomeController::class, 'subscriptions'])->name('home.subscriptions');
Route::get('/content', [HomeController::class, 'content'])->name('home.content');
Route::get('/categories', [HomeController::class, 'categories'])->name('home.categories');
Route::get('/models', [HomeController::class, 'models'])->name('home.models');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
