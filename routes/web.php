<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DuesPaymentController;
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


Route::get('/payments',[HomeController::class, 'get_duespayments'])->name('payments');
//Route::any('/verify-payment', [DuesPaymentController::class, 'verifyPayment'])->name('pay.verify');

Route::get('/verify-payment/{reference}', [DuesPaymentController::class, 'verify'])->name('pay.verify');

Route::get('/noticeboard',[HomeController::class, 'get_noticeboard'])->name('noticeboard');
Route::get('/biodata',[HomeController::class, 'get_bio_data'])->name('biodata');
Route::post('/update_profile',[HomeController::class, 'update_biodata'])->name('update_profile');
Route::get('/staff_directory',[HomeController::class, 'staff_directory'])->name('staff_directory');

Route::get('/my-activity-logs',[HomeController::class,'get_activity_logs'])->name('my.logs');

Route::get('/logout',[LogoutController::class, 'perform_logout'])->name('logout_user');

Route::prefix('dcs-admin')->group(function (){
    Route::get('/', [AdminLoginController::class, 'adminLoginForm'])->name('login.admin');
    Route::post('/',[AdminLoginController::class, 'adminLogin'])->name('admin.login');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
