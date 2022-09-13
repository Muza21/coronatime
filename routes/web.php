<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatisticController;
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
Route::middleware(['auth'])->group(function () {
	Route::view('dashboard', 'dashboard')->name('dashboard.view');
	Route::get('dashboard/{sort}', [StatisticController::class, 'index'])->name('country.view');
	// Route::get('dashboard/by-country', [StatisticController::class, 'index'])->name('country.view');

	Route::get('dashboard/by-new_cases/{sort}', [StatisticController::class, 'sortByNewCases'])->name('sort.new_cases');
	// Route::get('dashboard/by-new_cases', [StatisticController::class, 'sortByNewCases'])->name('sort.new_cases');
	Route::get('dashboard/by-recovered/{sort}', [StatisticController::class, 'sortByRecovered'])->name('sort.recovered');
	// Route::get('dashboard/by-recovered', [StatisticController::class, 'sortByRecovered'])->name('sort.recovered');
	Route::get('dashboard/by-deaths/{sort}', [StatisticController::class, 'sortByDeaths'])->name('sort.deaths');
	// Route::get('dashboard/by-deaths', [StatisticController::class, 'sortByDeaths'])->name('sort.deaths');

	Route::post('logut', [AuthController::class, 'logout'])->name('logout.user');
});

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
