<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifyEmailController;
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

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::view('/email/verify', 'verify-notice')->name('verification.notice');

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('dashboard', [CountryController::class, 'index'])->name('dashboard.view');

	Route::get('dashboard/{columnName}/{sort}', [CountryController::class, 'sortByColumn'])->name('sort.columns');

	Route::post('logout', [AuthController::class, 'logout'])->name('logout.user');
});

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
