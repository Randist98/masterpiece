<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\news\NewsController;
use App\Http\Controllers\contact\ContactController;
use App\Http\Controllers\causes\CausesController;
use App\Http\Controllers\about\AboutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\SignupCharitiesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CasesController;
use App\Http\Controllers\SinglePage\SinglePageController;
use App\Http\Controllers\donate\DonateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home',HomeController::class);
Route::resource('/about',AboutController::class);
Route::resource('/causes',CausesController::class);
Route::resource('/contact',ContactController::class);
Route::resource('/news',NewsController::class);
Route::resource('/donation',DonateController::class);


// Route::resource('/case-profile',SinglePageController::class);
// Route::get('/single-page/{id}', 'SinglePageController@singlePage')->name('single.page');

// Route::get('/single-page/{id}', [SinglePageController::class, 'show'])->name('single.page');

Route::get('/single-page/{id}', [SinglePageController::class, 'index'])->name('single.page');
Route::post('/cases', 'CasesController@store')->name('cases.store');

// Route::get('/donation', 'donate\DonateController@showDonationForm')->name('donation.form');




Route::get('/', [LoginController::class, 'index'])->name('sign-up.index');
Route::post('/register', [SignupController::class, 'store'])->name('sign-up');
Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');
Route::match(['get', 'post'], '/logout', [LogoutController::class, 'logout'])->name('logout');

Route::resource('/admin',AdminDashboardController::class);
Route::resource('/tableData',Tables_DataController::class);
Route::resource('/tableShow',Tables_ShowController::class);
Route::get('/admin/cases', 'AdminDashboardController@index')->name('adminDashboard.cases.index');



Route::resource('/casesTable',CasesController::class);
Route::post('/casesTable/{id}', 'CasesController@update')->name('casesTable.update');
