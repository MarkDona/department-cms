<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('payments',[HomeController::class, 'get_duespayments'])->name('payments');
Route::get('noticeboard',[HomeController::class, 'get_noticeboard'])->name('noticeboard');
Route::get('biodata',[HomeController::class, 'get_bio_data'])->name('biodata');

Route::get('/logout',[LogoutController::class, 'perform_logout'])->name('logout_user');
