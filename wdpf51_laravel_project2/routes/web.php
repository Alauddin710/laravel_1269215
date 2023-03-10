<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\showAge;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\CheckAge;
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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/admin', function () {
//     return view('auth/login');
// });
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin_home');
Route::resource('products', ProductController::class);


Route::middleware([CheckAge::class])->group(function () {
    Route::get('showmyage', [showAge::class, 'index']);
});

// middleware
Route::get('/admin', [LoginController::class, 'index']);

//maddom middleware
Route::middleware([AuthLogin::class])->group(function () {
    Route::post('/login', [LoginController::class, 'login']);
});


Route::get('/jobs', function () {
    return view('jobs');
});

// report controller
Route::get('/reports', [ReportsController::class, 'report1']);
