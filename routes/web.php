<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::middleware(['guest'])->group(function () {
	Route::view('/', 'login')->name('login');
	Route::post('login', [AuthController::class, 'login'])->name('login.user');

	Route::view('register', 'register')->name('register.index');
	Route::post('register', [RegisterController::class, 'store'])->name('register.store');
});

Route::view('dashboard', 'dashboard')->name('dashboard');

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
