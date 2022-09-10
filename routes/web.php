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
	Route::view('/', 'login')->name('login.view');
	Route::post('login', [AuthController::class, 'login'])->name('login.user');

	Route::view('register', 'register')->name('register.view');
	Route::post('register', [RegisterController::class, 'store'])->name('registration.store');
});

Route::view('dashboard', 'dashboard')->name('dashboard.view');
Route::view('dashboard/by-country', 'by-country')->name('country.view');

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');

Route::post('logut', [AuthController::class, 'logout'])->name('logout.user');
