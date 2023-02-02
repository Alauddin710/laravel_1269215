<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');

// Route::get('/admin', function () {
//     echo "admin Route";
// });
