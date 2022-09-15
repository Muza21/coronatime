<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegisterController;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('verify', function () {
	// Mail::to('lasha@gmail.com')->send(new VerifyMail());
	return view('verify-notice');
})->name('verify_email.notice');

Route::middleware('auth')->group(function () {
	Route::get('dashboard', [CountryController::class, 'index'])->name('dashboard.view');

	Route::get('dashboard/{columnName}/{sort}', [CountryController::class, 'sortByColumn'])->name('sort.columns');

	Route::post('logout', [AuthController::class, 'logout'])->name('logout.user');
});

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
